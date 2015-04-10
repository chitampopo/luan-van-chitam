<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật danh sách cảm tình Đảng</title>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery.validate.min')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script1.js')}}" type="text/javascript"></script>
        <!-- DATA TABLES -->
        <link href="{{asset('public/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="col-md-9 container alert alert-info">
            <div class="col-md-12 container">
                <center><h2>Danh sách cảm tình Đảng</h2></center>
                <form method="post" action="filter-cam-tinh-dang">
                    <div class="col-md-6">
                        Chi bộ:<Br>
                        <select name="maChiBo" id="maChiBo" class="form-control">
                            <option value="0"
                                    <?php
                                    if($maChiBoChon == "0"){
                                        echo "selected";
                                    }
                                    ?>
                                    >Toàn Đảng bộ</option>
                            @foreach ($listChiBo as $chiBo )
                            <option value="{{$chiBo->MACB}}"
                            <?php
                            if (isset($maChiBoChon) && $chiBo->MACB == $maChiBoChon) {
                                echo "selected";
                            }
                            ?>
                                    >{{$chiBo->TENCB}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        Tháng năm <br>
                        <select name="thangNam" id="thangNam" class="form-control">
                            @foreach ($listThangNam as $thangNam )
                            <option value="{{$thangNam->THANGNAM}}"
                            <?php
                            if (isset($thangNamChon) && $thangNam->THANGNAM == $thangNamChon) {
                                echo "selected";
                            }
                            ?>
                                    >{{$thangNam->THANGNAM}}</option>
                            @endforeach
                        </select><br>
                    </div>&nbsp;&nbsp;
                    <input type="submit" value="Liệt kê" class="btn btn-default">
                    <button type="button" id="button1" class="btn btn-default">In danh sách cảm tình Đảng</button>
                    <button type="button" id="button2" class="btn btn-default">Thêm cảm tình Đảng</button>
                </form>

            </div>
            <div class="col-md-12"><br><br></div>
            <div class="col-md-12 nguoithan" id="box">
                <table class="table" data-height="299" id="example1">
                    <thead>
                    <th style="width: 70px">STT</th> 
                    <th style="width: 200px">Họ và tên</th> 
                    <th style="width: 125px">Ngày công nhận CTĐ</th> 
                    <th style="width: 125px">Chứng nhận bồi dưỡng CTĐ</th> 
                    <th style="width: 70px">Viết lý lịch bản nháp</th> 
                    <th style="width: 70px">Chi bộ thông qua lý lịch</th> 
                    <th style="width: 70px">Viết lý lịch bản chính</th> 
                    <th style="width: 70px">Xác minh lý lịch</th> 
                    <th style="width: 70px">Viết đơn xin vào Đảng</th>
                    <th style="width: 100px">Ý kiến nhận xét cấp ủy nơi cư trú</th> 
                    <th style="width: 100px">Ý kiến nhận xét công đoàn, Đoàn thành niên</th> 
                    <th style="width: 100px">Giấy giới thiệu của ĐV hướng dẩn</th> 
                    <th style="width: 100px">Giấy giới thiệu Đoàn TN hoặc Công đoàn</th> 
                    <th style="width: 70px">Đảng bộ xét kết nạp</th>
                    <th style="width: 70px">Chuyển hồ sơ lên Đảng ủy</th>
                    <th style="width: 150px">Đảng viên hướng dẫn</th>
                    </thead>
                    <tbody id="bodyPOITable1">
                        <?php $count = 1; ?>
                        @foreach ($listCamTinhDang as $camTinhDang )
                        <tr>
                            <td>{{$count++}}</td> 
                            <td>
                                <a href="{{URL()."/trang-sua-cam-tinh-dang/".$camTinhDang->STTCTD }}" target="_blank">{{$camTinhDang->HOVATEN}}</a>
                            </td> 
                            <td>{{date("Y-m-d", strtotime($camTinhDang->NGAYCONGNHANCTD))}}</td> 
                            <td>{{date("Y-m-d", strtotime($camTinhDang->CHUNGNHANCTD))}}</td> 
                            <td>
                                @if ($camTinhDang->LLNHAP == "1")
                                {{"X"}}
                                @endif
                            </td> 
                            <td>
                                @if ($camTinhDang->CBTHONGQUA == "1")
                                {{"X"}}
                                @endif
                            </td> 
                            <td>
                                @if ($camTinhDang->LLCHINH == "1")
                                {{"X"}}
                                @endif
                            </td>
                            <td>
                                @if ($camTinhDang->XACMINH == "1")
                                {{"X"}}
                                @endif
                            </td> 
                            <td>
                                @if ($camTinhDang->VIETDON == "1")
                                {{"X"}}
                                @endif
                            </td> 
                            <td>
                                @if ($camTinhDang->YKIENCUTRU == "1")
                                {{"X"}}
                                @endif
                            </td> 
                            <td>
                                @if ($camTinhDang->YKIENDOANTHE == "1")
                                {{"X"}}
                                @endif
                            </td> 
                            <td>
                                @if ($camTinhDang->GIAYGTDANGVIEN == "1")
                                {{"X"}}
                                @endif
                            </td> 
                            <td>
                                @if ($camTinhDang->GIAYGTDOANTHE == "1")
                                {{"X"}}
                                @endif
                            </td> 
                            <td>
                                @if ($camTinhDang->XETKETNAP == "1")
                                {{"X"}}
                                @endif
                            </td> 
                            <td>
                                @if ($camTinhDang->CHUYENDANGUY == "1")
                                {{"X"}}
                                @endif
                            </td> 
                            <td>
                                <?php
                                $array = strripos($camTinhDang->NGUOIHD, "2)");
                                echo substr($camTinhDang->NGUOIHD, 0, $array);
                                echo "<Br>";
                                echo substr($camTinhDang->NGUOIHD, $array, strlen($camTinhDang->NGUOIHD));
                                ?>
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script>
var value = $('#maChiBo').val();
var value1 = $('#thangNam').val()
$('#button2').click(function () {
    window.open("http://localhost/luanvan/index.php/trang-them-cam-tinh-dang", '_blank')
});
$('#button1').click(function () {
    window.open("http://localhost/luanvan/index.php/in-danh-sach-cam-tinh-dang/" + value + "/" + value1, '_blank')
});
        </script>
        <!-- DATA TABES SCRIPT -->
        <script src="{{asset('public/js/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/dataTables.bootstrap.js')}}" type="text/javascript"></script>
        <script>
$(function () {
    $("#example1").dataTable();
    $('#example2').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": false
    });
});
        </script>
    </body>
</html>
