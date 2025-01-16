@extends('master')
@section('title', 'Điều hướng')

@section('head')
    <style>
        .checkbox-wrapper-16 *,
        .checkbox-wrapper-16 *:after,
        .checkbox-wrapper-16 *:before {
            box-sizing: border-box;
        }

        .checkbox-wrapper-16 .checkbox-input {
            clip: rect(0 0 0 0);
            -webkit-clip-path: inset(100%);
            clip-path: inset(100%);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }
        .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile {
            border-color: #2260ff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            color: #2260ff;
        }
        .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile:before {
            transform: scale(1);
            opacity: 1;
            background-color: #2260ff;
            border-color: #2260ff;
        }
        .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile .checkbox-icon,
        .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile .checkbox-label {
            color: #2260ff;
        }
        .checkbox-wrapper-16 .checkbox-input:focus + .checkbox-tile {
            border-color: #2260ff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1), 0 0 0 4px #b5c9fc;
        }
        .checkbox-wrapper-16 .checkbox-input:focus + .checkbox-tile:before {
            transform: scale(1);
            opacity: 1;
        }

        .checkbox-wrapper-16 .checkbox-tile {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 7rem;
            min-height: 7rem;
            border-radius: 0.5rem;
            border: 2px solid #b5bfd9;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            transition: 0.15s ease;
            cursor: pointer;
            position: relative;
        }
        .checkbox-wrapper-16 .checkbox-tile:before {
            content: "";
            position: absolute;
            display: block;
            width: 1.25rem;
            height: 1.25rem;
            border: 2px solid #b5bfd9;
            background-color: #fff;
            border-radius: 50%;
            top: 0.25rem;
            left: 0.25rem;
            opacity: 0;
            transform: scale(0);
            transition: 0.25s ease;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='192' height='192' fill='%23FFFFFF' viewBox='0 0 256 256'%3E%3Crect width='256' height='256' fill='none'%3E%3C/rect%3E%3Cpolyline points='216 72.005 104 184 48 128.005' fill='none' stroke='%23FFFFFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'%3E%3C/polyline%3E%3C/svg%3E");
            background-size: 12px;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }
        .checkbox-wrapper-16 .checkbox-tile:hover {
            border-color: #2260ff;
        }
        .checkbox-wrapper-16 .checkbox-tile:hover:before {
            transform: scale(1);
            opacity: 1;
        }

        .checkbox-wrapper-16 .checkbox-icon {
            transition: 0.375s ease;
            color: #494949;
        }
        .checkbox-wrapper-16 .checkbox-icon svg {
            width: 3rem;
            height: 3rem;
        }

        .checkbox-wrapper-16 .checkbox-label {
            color: #707070;
            transition: 0.375s ease;
            text-align: center;
        }


        /* CSS */
        .button-50 {
            appearance: button;
            background-color: #000;
            background-image: none;
            border: 1px solid #000;
            border-radius: 4px;
            box-shadow: #fff 4px 4px 0 0,#000 4px 4px 0 1px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: ITCAvantGardeStd-Bk,Arial,sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
            margin: 0 5px 10px 0;
            overflow: visible;
            padding: 12px 40px;
            text-align: center;
            text-transform: none;
            touch-action: manipulation;
            user-select: none;
            -webkit-user-select: none;
            vertical-align: middle;
            white-space: nowrap;
        }

        .button-50:focus {
            text-decoration: none;
        }

        .button-50:hover {
            text-decoration: none;
        }

        .button-50:active {
            box-shadow: rgba(0, 0, 0, .125) 0 3px 5px inset;
            outline: 0;
        }

        .button-50:not([disabled]):active {
            box-shadow: #fff 2px 2px 0 0, #000 2px 2px 0 1px;
            transform: translate(2px, 2px);
        }

        @media (min-width: 768px) {
            .button-50 {
                padding: 12px 50px;
            }
        }
    </style>
@endsection

@section('content')
    @include('layouts.left_menu')
    <section class="main_content dashboard_part">
        @include('layouts.header')



        <div class="d-flex p-2">
            <div class="checkbox-wrapper-16 p-2">
                <label class="checkbox-wrapper">
                    <input type="checkbox" class="checkbox-input" />
                    <span class="checkbox-tile">
                        <span class="checkbox-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
                                <rect width="256" height="256" fill="none"></rect>
                                <polygon points="72 40 184 40 240 104 128 224 16 104 72 40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
                                <polygon points="177.091 104 128 224 78.909 104 128 40 177.091 104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
                                <line x1="16" y1="104" x2="240" y2="104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></line>
                            </svg>
                        </span>
                        <span class="checkbox-label">Tai mũi họng</span>
                    </span>
                </label>
            </div>

            <div class="checkbox-wrapper-16 p-2">
                <label class="checkbox-wrapper">
                    <input type="checkbox" class="checkbox-input" />
                    <span class="checkbox-tile">
                        <span class="checkbox-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
                                <rect width="256" height="256" fill="none"></rect>
                                <polygon points="72 40 184 40 240 104 128 224 16 104 72 40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
                                <polygon points="177.091 104 128 224 78.909 104 128 40 177.091 104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
                                <line x1="16" y1="104" x2="240" y2="104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></line>
                            </svg>
                        </span>
                        <span class="checkbox-label">Nội tổng quát</span>
                    </span>
                </label>
            </div>

            <div class="checkbox-wrapper-16 p-2">
                <label class="checkbox-wrapper">
                    <input type="checkbox" class="checkbox-input" />
                    <span class="checkbox-tile">
                        <span class="checkbox-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
                                <rect width="256" height="256" fill="none"></rect>
                                <polygon points="72 40 184 40 240 104 128 224 16 104 72 40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
                                <polygon points="177.091 104 128 224 78.909 104 128 40 177.091 104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
                                <line x1="16" y1="104" x2="240" y2="104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></line>
                            </svg>
                        </span>
                        <span class="checkbox-label">Thần kinh</span>
                    </span>
                </label>
            </div>
        </div>


    </section>
    <footer>
        <div class="position-absolute" style="bottom: 0; right: 0; width: 100%;height: 150px; background: #d8d8d8; padding-left: 270px;">
            <div class="d-flex justify-content-between pt-2 pl-2 pr-2">
                <div id="app" class="d-flex">
                    <div class="d-flex justify-content-end">
                        <div class="p-2">
                            <div style="width: 150px;">
                                <div style="border: 2px solid black">
                                    <qrcode-stream :track="paintBoundingBox" v-on:detect="onDetect" v-on:error="onError"></qrcode-stream>
                                </div>
                            </div>

                            {{--                        <div>--}}
                            {{--                            <p style="color: red" v-text="error"></p>--}}
                            {{--                            <br>--}}
{{--                                                        <p>Last result: <b v-text="result"></b></p>--}}
                            {{--                        </div>--}}
                        </div>
                    </div>

                    <div class="p-2">
                        <div class="">
                            <div>
                                <span>Mã số BN: </span><span class="fw-bold" v-text="code"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <span>Họ và tên: </span><span class="fw-bold" v-text="full_name"></span>
                            </div>
                            <div class="col-6">
                                <span>Giới tính: </span><span class="fw-bold" v-text="gender"></span>
                            </div>
                            <div class="col-6">
                                <span>Số điện thoại: </span><span class="fw-bold" v-text="phone"></span>
                            </div>
                            <div class="col-6">
                                <span>Tuổi: </span><span class="fw-bold" v-text="year_old"></span>
                            </div>
                            <div class="col-6">
                                <span>CCCD: </span><span class="fw-bold" v-text="indentity_card"></span>
                            </div>
                            <div class="col-6">
                                <span>BHYT: </span><span class="fw-bold" v-text="BHYT"></span>
                            </div>
                            <div class="col-12">
                                <span>Địa chỉ: </span><span class="fw-bold" v-text="address"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center p-3">
                    <input type="hidden" name="code" v-text="code">
                    <button class="button-50" role="button">In số thứ tự -></button>
                </div>
            </div>
        </div>
    </footer>
@endsection

@section('footer')
    <script src="{{ asset('js/vue.global.js') }}"></script>
    <script src="{{ asset('js/vue-qrcode-reader.umd.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script>
        const { createApp, ref } = Vue;

        const app = createApp({
            setup() {
                const result = ref('');
                const error = ref('');
                const code = ref('');
                const full_name = ref('');
                const year_old = ref('');
                const gender = ref('');
                const phone = ref('');
                const email = ref('');
                const address = ref('');
                const indentity_card = ref('');
                const BHYT = ref('');

                const fetchData = async () => {
                    try {
                        const res = await axios.get('/patient/one-data' , {
                            params: {
                                code: result.value,
                            }
                        });
                        const data = res.data.data;
                        code.value = data.code;
                        full_name.value = data.full_name;
                        year_old.value = data.year_old;
                        gender.value = data.gender;
                        phone.value = data.phone;
                        email.value = data.email;
                        address.value = data.address;
                        indentity_card.value = data.indentity_card;
                        BHYT.value = data.BHYT;
                    } catch (err) {
                        error.value = err.message;
                    }
                }

                function paintBoundingBox(detectedCodes, ctx) {
                    for (const detectedCode of detectedCodes) {
                        const {
                            boundingBox: { x, y, width, height }
                        } = detectedCode;

                        ctx.lineWidth = 2;
                        ctx.strokeStyle = '#007bff';
                        ctx.strokeRect(x, y, width, height);
                    }
                }

                function onError(err) {
                    error.value = `[${err.name}]: `;

                    if (err.name === 'NotAllowedError') {
                        error.value += 'Bạn cần cấp quyền truy cập camera';
                    } else if (err.name === 'NotFoundError') {
                        error.value += 'Không có camera trên thiết bị này';
                    } else if (err.name === 'NotSupportedError') {
                        error.value += 'Yêu cầu bối cảnh an toàn (https, localhost)';
                    } else if (err.name === 'NotReadableError') {
                        error.value += 'Máy ảnh đã được sử dụng chưa?';
                    } else if (err.name === 'OverconstrainedError') {
                        error.value += 'Máy ảnh được cài đặt không phù hợp';
                    } else if (err.name === 'StreamApiNotSupportedError') {
                        error.value += 'API luồng không được hỗ trợ trong trình duyệt này';
                    } else if (err.name === 'InsecureContextError') {
                        error.value += 'Truy cập camera chỉ được phép trong bối cảnh an toàn. Sử dụng https hoặc localhost thay vì http.';
                    } else {
                        error.value += err.message;
                    }
                }

                function onDetect(detectedCodes) {
                    result.value = JSON.stringify(
                        detectedCodes.map(code => code.rawValue)
                    );
                    fetchData();
                }

                return {
                    result,
                    error,
                    code,
                    full_name,
                    year_old,
                    gender,
                    phone,
                    email,
                    address,
                    indentity_card,
                    BHYT,
                    onDetect,
                    onError,
                    paintBoundingBox,
                    fetchData
                };
            }
        });
        app.use(VueQrcodeReader);
        app.mount('#app');
    </script>
@endsection
