\@extends('master')
@section('title', 'Điều hướng')

@section('head')

@endsection

@section('content')
    @include('layouts.left_menu')
    <section class="main_content dashboard_part">
        @include('layouts.header')
{{--        <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>--}}


        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Thêm mới</h3>
                                </div>
                                <div class="add_button ms-2">
                                    <a href="/medical-examination/create" class="btn_1">Lưu</a>
                                </div>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label" for="code">Mã</label>
                                    <input type="text" class="form-control" id="code" placeholder="Vd: TMH01,...">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Tên</label>
                                    <input type="text" class="form-control" id="name" placeholder="Vd: Tai mũi họng 01,...">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Mô tả</label>
                                    <input type="text" class="form-control" id="description" placeholder="Vd: Phòng khám thường,...">
                                </div>
                                <div class="input-group">
                                    <input type="button" id="lfm" data-input="thumbnail" data-preview="holder" value="Upload">
                                    <input id="thumbnail" class="form-control" type="text" name="filepath">
                                </div>
                                <img id="holder" style="margin-top:15px;max-height:100px;">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    <script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        // $('#lfm').filemanager('image');
        $("#lfm").on("click", function() {
            var fileManager = function(options, cb) {
                var route_prefix = '/file-manager';
                window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=1100,height=600');
                window.SetUrl = cb;
            }

            fileManager({type: 'image'}, function (url, path) {
                $("#image-review").html('<img src="' + path + '">');
                $("#image-select").val(path);
            })
        })
    </script>
@endsection