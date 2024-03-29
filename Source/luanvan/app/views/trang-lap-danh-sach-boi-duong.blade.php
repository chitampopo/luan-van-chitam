<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Trang lập danh sách cử đi học lớp bồi dưỡng Đảng viên mới</title>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script2.js')}}" type="text/javascript"></script>
        <!-- DATA TABLES -->
        <link href="{{asset('public/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />

    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div >
            <div class="form-inline col-md-9 container alert alert-info">
                <center><h2>Trang lập danh sách cử đi học lớp bồi dưỡng Đảng viên mới</h2></center><br><br>
                <form method="post" action="in-danh-sach-boi-duong-dvm">
                    <input type="hidden" name="maChiBo" value="{{Session::get("maChiBoTaiKhoan")}}">
                    Khóa ngày:
                    <input class="form-control" size="15" data-provide="datepicker" name="khoangay" type="text" value="" required>
                    Người lập: 
                    <input type="text" name="nguoiLap" class="form-control">
                    Chức vụ: 
                    <input type="text" name="chucVuNguoiLap" class="form-control">
                    <input type="submit" value="Tạo" class="form-control">

                    <br><br>
                    <table class='table' id="example1">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Đảng viên</th>
                                <th>Ngày sinh</th>
                                <th>Quê quán</th>
                                <th>Chi bộ</th>
                                <th> Chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            ?>
                            @foreach($listDangVienMoi as $dangVien)
                            <tr>
                                <td>{{$count++;}}</td>
                                <td>{{$dangVien->HOTENSUDUNG}}</td>
                                <td>{{date("d-m-Y",strtotime($dangVien->NGAYSINH))}}</td>
                                <td>
                                    @foreach($listTinh as $tinh)
                                    @foreach($listHuyen as $huyen)
                                    @foreach($listXa as $xa)
                                    @if($huyen->MATT == $tinh->MATT && $xa->MAQH == $huyen->MAQH && $xa->MAPX == $dangVien->PHU_MAPX)
                                    {{$xa->TENPX.", ".$huyen->TENQH.", ".$tinh->TENTT}}
                                    @endif
                                    @endforeach
                                    @endforeach
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($listChiBo as $chiBo)
                                    @if($chiBo -> MACB == $dangVien->MACB)
                                    {{$chiBo->TENCB}}
                                    @endif
                                    @endforeach
                                </td>
                                <td><input type="checkbox" name="{{'chonDangVien'.$dangVien->MADANGVIEN}}"
                                    <?php
                                    $lylich = LyLich::where("MADANGVIEN", "=", $dangVien->MADANGVIEN)->first();
                                    if ($lylich->DOTBD != null) {
                                        echo "checked";
                                    }
                                    ?>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
            </div>

        </div>
        <!-- jQuery -->
        <script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

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

