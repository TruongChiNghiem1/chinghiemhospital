<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{
    public function __construct()
    {
        parent::__construct('auth', 'user');
    }

    public function getLogin()
    {
        return $this->view('login');
    }

    public function postLogin(Request $request)
    {
        $login = [
            'code' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($login)) {
            $request->session()->regenerate();
            $this->json_result([
                'status' => 'success',
                'message' => 'Đăng nhập thành công',
                'redirect' => route('dashboard.index'),
            ]);
        }

        $this->json_result([
            'status' => 'error',
            'message' => 'Mã nhân viên hoặc mật khẩu không đúng',
            'redirect' => 'reload',
        ]);
    }
}
