<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PatientController extends BaseController
{

    public function __construct()
    {
        parent::__construct('patient', 'profile');
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
        $query = $this->db->firstOrNew(['code' => $data['code']]);
        $query->fill($data);
        $query->dob = Carbon::createFromFormat('d/m/Y', $data['dob'])->format('Y-m-d');
        if($query->save()) {
            $this->json_result([
                'status' => 'success',
                'message' => 'In số thứ tự thành công'
            ]);
        } else {
            $this->json_result([
                'status' => 'error',
                'message' => 'Lỗi dữ liệu'
            ]);
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
