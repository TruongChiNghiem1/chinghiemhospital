<?php

namespace App\Http\Controllers;

use App\Models\MedicalExamination;
use Illuminate\Http\Request;

class MedicalExaminationController extends BaseController
{
    public function __construct()
    {
        parent::__construct('MedicalExamination');
    }

    public function index()
    {
        return $this->view('index');
    }

    public function create()
    {
        return $this->view('create');
    }

    public function getData()
    {
        $medicalExamination = MedicalExamination::query()->paginate(10);
        $this->json_result_paginate($medicalExamination);
    }
}
