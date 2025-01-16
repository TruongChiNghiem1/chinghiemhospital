<?php

namespace App\Http\Controllers;

use App\Models\CatchTheNumber;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PDFController extends Controller
{
    public function catchTheNumberPDF($id)
    {
        $queryCatchTheNumber = CatchTheNumber::query()
            ->select('c.numerical_order', 'c.created_at', 'c.type', 'p.full_name', 'p.dob', 'p.gender', 'p.code')
            ->from('catch_the_numbers', 'c')
            ->leftJoin('patients as p', 'p.id', '=', 'c.patient_id')
            ->where('c.id',$id)
            ->first();

        if($queryCatchTheNumber) {
            $data = [
                'datetime' => Carbon::parse($queryCatchTheNumber->created_at)->format('H:i, \N\g\à\y d \t\h\á\n\g m \n\ă\m Y'),
                'full_name' => $queryCatchTheNumber->full_name,
                'dob' => Carbon::parse($queryCatchTheNumber->dob)->format('Y'),
                'code' => $queryCatchTheNumber->code,
                'gender' => $queryCatchTheNumber->gender == 1 ? 'Nam' : 'Nữ',
                'numerical_order' => str_pad($queryCatchTheNumber->numerical_order, 3, '0', STR_PAD_LEFT),
                'counter' => 'A8',
                'user_name' => 'CHINGHIEM_HOSPITAL',
                'qrCode' => QrCode::generate($queryCatchTheNumber->code),
            ];

            $pdf = PDF::loadView('modules.view_pdf.catchTheNumberPDF', $data)
                ->setPaper(array(34, -14, 238, 350), 'potrait');

            return $pdf->stream();
        } else {
            abort(404);
        }
    }
}
