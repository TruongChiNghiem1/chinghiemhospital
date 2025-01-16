<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NursingController extends BaseController
{
    public function __construct()
    {
        parent::__construct('nursing', 'user');
    }

    public function index() {
        return $this->view('index');
    }


}
