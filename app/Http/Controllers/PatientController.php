<?php

namespace App\Http\Controllers;

use App\Models\CatchTheNumber;
use App\Models\Patient;
use App\Models\Profile;
use App\Models\Province;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PatientController extends BaseController
{

    public function __construct()
    {
        parent::__construct('patient');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveInformation(Request $request)
    {
        $data = $request->all();
        $query = $this->db->firstOrNew(['indentity_card' => $data['indentity_card']]);
        $query->fill($data);
        $query->code ??= 'BN' . time();
        $query->dob = Carbon::createFromFormat('d/m/Y', $data['dob'])->format('Y-m-d');
        if($query->save()) {
            $countCatchTheNumberToday = CatchTheNumber::query()
                ->whereDate('created_at', today())
                ->count();
            $queryProfile = new CatchTheNumber();
            $queryProfile->patient_id = $query->value('id');
            $queryProfile->numerical_order = $countCatchTheNumberToday + 1;
            $queryProfile->type = 1;
            if($queryProfile->save()) {
                $catchTheNumberId = $queryProfile->value('id');
                $this->json_result([
                    'status' => 'success',
                    'message' => 'In số thứ tự thành công',
                    'redirect' => route('view_pdf.catch_the_number_pdf', $catchTheNumberId),
                ]);
            }
        } else {
            $this->json_result([
                'status' => 'error',
                'message' => 'Lỗi dữ liệu'
            ]);
        }
    }

    public function getOnePatientByCode(Request $request) {
        $code = chop(ltrim($request->code, "[\""), "\"]");
        $patientByCode = Patient::where('code', $code)->first();
        $patientByCode->gender = $patientByCode->gender == 1 ? 'Nam' : 'Nữ';
        $arrProvince = Province::whereIn('id', [$patientByCode->province, $patientByCode->district,$patientByCode->commune])
            ->orderByDesc('level')
            ->pluck('name')
            ->toArray();
        $patientByCode->address = $patientByCode->street_name . ', ' . implode(', ', $arrProvince);
        if($patientByCode) {
            $this->json_result([
                'data' => $patientByCode
            ]);
        }
        $this->json_result([
            'status' => 'error',
            'message' => 'Mã QR không hợp lệ'
        ]);
    }
}
