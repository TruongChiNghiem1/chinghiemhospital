@extends('master')
@section('title', 'Điều hướng')

@section('head')

@endsection

@section('content')
    @include('layouts.left_menu')
    <section class="main_content dashboard_part">
        @include('layouts.header')
        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Table</h4>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text"
                                                           placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i
                                                            class="ti-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="add_button ms-2">
                                        <a href="/medical-examination/create" class="btn_1">Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">
{{--                                lms_table_active--}}
                                <table class="table " id="myTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">stt</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Mã</th>
                                            <th scope="col">Tên</th>
                                            <th scope="col">Mô tả</th>
                                            <th scope="col">Icon</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    <script>
        let table = new DataTable('#myTable', {
            serverSide: true,
            ajax: {
                url: '/medical-examination/get-data',
                type: 'GET',
                dataSrc: function (json) {
                    return json.data;
                }
            },
            columns: [
                {data: 'stt'},
                {
                    data: 'image',
                    render: function(data) {
                        return `<img src="${data}" alt="Image" style="width: 50px; height: auto;">`;
                    }
                },
                {data: 'code'},
                {data: 'name'},
                {data: 'description'},
                {
                    data: 'icon',
                    render: function(data) {
                        return `<i class="${data}"></i>`; // Hiển thị icon
                    }
                },
            ],
            paging: true,
        });
    </script>
@endsection