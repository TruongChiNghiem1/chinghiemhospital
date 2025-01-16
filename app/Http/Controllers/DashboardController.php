<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function __construct()
    {
        parent::__construct('general_system', 'user');
    }

    public function index()
    {
        return $this->view('dashboard');
    }
}
