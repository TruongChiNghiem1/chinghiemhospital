@extends('master')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/private/login.css') }}"
@endsection

@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center align-items-center" style="height: 90vh">
                <div class="col-lg-12">
                    <div class="h-100">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="modal-content cs_modal">
                                    <div class="white_box d-flex justify-content-between pb-0">
                                        <div class="modal-header d-flex justify-content-center p-0">
                                            <h5 class="modal-title">Log in</h5>
                                        </div>
                                        <div class="main-title">
                                            <img src="{{ asset('images/logo.png') }}" alt>
                                        </div>
                                    </div>

                                    <div class="modal-body">
                                        <form action="{{ route('post_login') }}" method="POST" class="form-ajax">
                                            <div class>
                                                <input name="username"
                                                       type="text"
                                                       class="form-control"
                                                       placeholder="Mã nhân viên"
                                                        required>
                                            </div>
                                            <div class>
                                                <input type="password"
                                                       name="password"
                                                       class="form-control"
                                                       placeholder="Mật khẩu" required>
                                            </div>
                                            <button type="submit" class="btn_1 full_width text-center">Log in</button>
{{--                                            <p>Need an account? <a--}}
{{--                                                        data-bs-toggle="modal"--}}
{{--                                                        data-bs-target="#sing_up"--}}
{{--                                                        data-bs-dismiss="modal"--}}
{{--                                                        href="#"> Sign--}}
{{--                                                    Up</a></p>--}}
                                            <div class="text-center">
                                                <a href="#"
                                                   data-bs-toggle="modal"
                                                   data-bs-target="#forgot_password"
                                                   data-bs-dismiss="modal"
                                                   class="pass_forget_btn">Forget Password?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection