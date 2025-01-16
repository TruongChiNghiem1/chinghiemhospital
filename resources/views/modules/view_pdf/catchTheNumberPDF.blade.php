<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Số thứ tự nhận bệnh</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap1.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style_pdf.css') }}" />
</head>
<style>
    * {
        font-family: DejaVu Sans !important;
    }
    body {
        width: 7.2cm;
        height: 40cm;
        padding: 0;
        margin: 0;
    }
    .fs_4 {
        font-size: 7px;
    }
    .fs_5 {
        font-size: 8px;
    }
    .fs_6 {
        font-size: 10px;
    }
    .fs_7 {
        font-size: 12px;
    }
    .fs_8 {
        font-size: 14px;
    }
    .fs_9 {
        font-size: 16px;
    }
    .fs_10 {
        font-size: 18px;
    }
    .fs_11 {
        font-size: 20px;
    }
    .fs_12 {
        font-size: 22px;
    }
    .fs_13 {
        font-size: 24px;
    }
    .fs_14 {
        font-size: 26px;
    }
    .fs_15 {
        font-size: 28px;
    }
    .fs_16 {
        font-size: 30px;
    }

    .d-flex {
        display: flex;
    }
    .justify-content-center {
        justify-content: center;
    }
    .w-100{
        width: 100%;
    }
    .fw-bold {
        font-weight: bold;
    }
    .p-0 {
        padding: 0;
    }
    .m-0 {
        margin: 0;
    }
    .flex-row{
        flex-direction: row;
    }
    .logo-en{
        left: 90px;
        width: 100%;
        top: 2px;
    }
    .logo-vi{
        top: 15px;
        width: 100%;
        left: 90px;
    }
    .position-absolute{
        position: absolute;
    }
    .logo-img{
        left: 55px;
        top: 5px;
    }
    .w-100{
        width: 100%;
    }
</style>
<body>
<?php
    $top = 80;
    $left = 13;
?>
<div>
    <div style="width: 7.2cm" class="d-flex justify-content-center flex-row">
        <img class="logo-img position-absolute" src="data:image/png;base64,<?php echo base64_encode(file_get_contents(base_path('public/images/logo2.png'))); ?>" width="25" alt="">
        <span class="logo-en fs_5 position-absolute">CHI NGHIEM HOSPITAL</span>
        <br>
        <span class="logo-vi fs_6 fw-bold position-absolute">BỆNH VIỆN CHÍ NGHIỆM</span>
    </div>
    <br>
    <div>
        <span class="fs_7 fw-bold position-absolute w-100" style="left: 60px; top: 40px;">SỐ THỨ TỰ NHẬN BỆNH</span>
        <br>
        <span class="fs_4  fw-bold position-absolute w-100" style="left: 70px; top: 60px;">{{ $datetime }}</span>
        <div class="position-absolute" style="width: 134px; left: 70px; top: 73px; border: solid; border-bottom: 0.5px;">

        </div>
    </div>
    <div>
{{--        <span class="fs_7 position-absolute w-100" style="left: <?php echo $left ?>px; top: <?php echo $top ?>px;">Quầy: </span>--}}
{{--        <span class="fs_14 fw-bold position-absolute w-100" style="left: <?php echo $left + 87 ?>px; top: <?php echo $top - 20 ?>px;">A8</span>--}}

        <span class="fs_7 position-absolute w-100" style="left: <?php echo $left ?>px; top: <?php echo $top + 22 ?>px;">Nhân viên: </span>
        <span class="fs_7 fw-bold position-absolute w-100" style="left: <?php echo $left + 67 ?>px; top: <?php echo $top + 22 ?>px; width: 250px;">{{ $user_name }}</span>

        <span class="fs_7 position-absolute w-100" style="left: <?php echo $left ?>px; top: <?php echo $top + 42 ?>px;">Mã số BN: </span>
        <span class="fs_7 fw-bold position-absolute w-100" style="left: <?php echo $left + 67 ?>px; top: <?php echo $top + 42 ?>px;">{{ $code }}</span>

        <span class="fs_7 position-absolute w-100" style="left: <?php echo $left ?>px; top: <?php echo $top + 62 ?>px;">Tên BN: </span>
        <span class="fs_7 fw-bold position-absolute w-100" style="left: <?php echo $left + 67 ?>px; top: <?php echo $top + 62 ?>px; width: 250px;">{{ $full_name }}</span>

        <span class="fs_7 position-absolute w-100" style="left: <?php echo $left ?>px; top: <?php echo $top + 82 ?>px;">Giới tính: </span>
        <span class="fs_7 fw-bold position-absolute w-100" style="left: <?php echo $left + 67 ?>px; top: <?php echo $top + 82 ?>px;">{{ $gender }}</span>

        <span class="fs_7 position-absolute w-100" style="left: 140px; top: <?php echo $top + 82 ?>px;">Năm sinh: </span>
        <span class="fs_7 fw-bold position-absolute w-100" style="left: 210px; top: <?php echo $top + 82 ?>px;">{{ $dob }}</span>

        <span class="fs_7 position-absolute w-100" style="left: <?php echo $left ?>px; top: <?php echo $top + 102 ?>px;">Số thứ tự: </span>
        <span class="fs_16 fw-bold position-absolute w-100" style="left: 100px; top: <?php echo $top + 102 ?>px;">{{ $numerical_order }}</span>

        <span class="fs_6 position-absolute w-100" style="left: 20px; top: <?php echo $top + 152 ?>px; width: 250px;">Bệnh nhân vui lòng giữ phiếu qua nhận bệnh </span>

{{--        <img class="fs_6 position-absolute w-100" style="left: <?php echo $left + 67 ?>px; top: <?php echo $top + 172 ?>px; width: 100px;" src="data:image/png;base64,<?php echo base64_encode(file_get_contents(base_path('public/images/qrdemo.png'))); ?>" alt="">--}}
        <img class="fs_6 position-absolute w-100" style="left: <?php echo $left + 65 ?>px; top: <?php echo $top + 180 ?>px; width: 100px;" src="data:image/png;base64,{!! base64_encode($qrCode) !!}" alt="">
{{--        {!! QrCode::generate('Welcome to kerneldev.com!') !!}--}}
    </div>
</div>
</body>
</html>
