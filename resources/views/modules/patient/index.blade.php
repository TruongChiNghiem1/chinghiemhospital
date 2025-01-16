@extends('master')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/patient/style.css') }}" />
@endsection

@section('content')
    <section class="main_content dashboard_part p-0">
        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="main-title">
                                <img src="{{ asset('images/logo.png') }}" alt>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Thông tin cá nhân / Personal information</h3>
                                </div>
                            </div>
                            <form method="post" action="{{ route('patient.save_information') }}" role="form" class="form-ajax">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label fs-6" for="indentity_card">Căn cước công dân / Citizen identification card <span class="text-danger">*</span></label>
                                        <input name="indentity_card" class="form-control"
                                               id="indentity_card"
                                               placeholder="Vd: 096..."
                                                required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label fs-6" for="full_name">Họ và tên / Fullname <span class="text-danger">*</span></label>
                                        <input name="full_name" class="form-control"
                                               id="full_name"
                                               placeholder="Vd: Nguyễn Văn A,..."
                                               required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input_wrap common_date_picker">
                                            <label class="form-label fs-6 fw-normal" for="start_datepicker">Ngày sinh <span class="text-danger">*</span></label>
                                            <input class="input_form"
                                                   id="start_datepicker"
                                                   name="dob"
                                                   placeholder="Vd: 01/01/2000"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input_wrap common_date_picker">
                                            <label class="form-label fs-6 fw-normal" for="gender">Giới tính <span class="text-danger">*</span></label>
                                            <select class="form-control"
                                                    id="gender"
                                                    name="gender"
                                                    required>
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fs-6"
                                               for="phone">Số điện thoại / Phone number <span class="text-danger">*</span></label>
                                        <input name="phone" class="form-control"
                                               id="phone"
                                               placeholder="Vd: 0912345678,..."
                                               required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fs-6" for="email">Email</label>
                                        <input type="email" class="form-control"
                                               id="email"
                                               name="email"
                                               placeholder="name@example.com">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fs-6"
                                               for="province"
                                               >Tỉnh / Province</label>
                                        <select name="province"
                                                id="province"
                                                class="form-control load-province w-100 mb_30"
                                                data-level="1"
                                                data-placeholder="Vd: Cà Mau,..."
                                                required>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fs-6"
                                               for="district">Quận / Huyện / District</label>
                                        <select name="district"
                                                id="district"
                                                class="form-control load-province w-100 mb_30"
                                                data-level="2"
                                                data-placeholder="Vd: Quận 1,..."
                                                required>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fs-6"
                                               for="commune">Phường / Xã / Thị trấn / Commune</label>
                                        <select name="commune"
                                                id="commune"
                                                class="form-control load-province w-100 mb_30"
                                                data-level="3"
                                                data-placeholder="Vd: xã Tân Đức,..."
                                                required>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fs-6" for="street_name">Số nhà / Tên đường / Street name <span class="text-danger">*</span></label>
                                        <input name="street_name" class="form-control"
                                               placeholder="Vd: Nguyễn Văn A,..."
                                               required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <button class="btn btn-primary" type="submit">IN SỐ THỨ TỰ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <script>
        load_province();
        function load_province() {
            $('.load-province').select2({
                allowClear: true,
                dropdownAutoWidth: true,
                width: '100%',
                placeholder: function (params) {
                    return {
                        id: null,
                        text: params.placeholder,
                    }
                },
                ajax: {
                    method: 'GET',
                    url: '/load-ajax/select2/load-province',
                    dataType: 'json',
                    data: function (params) {
                        let level = $(this).data('level');
                        let parent_id = 0;
                        if(level === 2) {
                            parent_id = $('#province').val();
                        } else if(level === 3) {
                            parent_id = $('#district').val();
                        }
                        return {
                            search: $.trim(params.term),
                            level: level,
                            page: params.page,
                            parent_id: parent_id
                        }
                    }
                }
            })
        }
    </script>
@endsection