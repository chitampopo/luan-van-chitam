<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Cập nhật chức vụ Đảng viên và Lý lịch trích ngang</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery.validate.min')}}" type="text/javascript"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <!-- DATA TABLES -->
        <link href="{{asset('public/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="col-md-9 container alert alert-info">
            
            <div class="col-md-12 alert alert-info">
                <center><h2>Trang cập nhật chức vụ Đảng viên và Lý lịch trích ngang</h2></center><br>
                <form method="post" action="filter-cap-nhat-chuc-vu" class="form-group">
                    <div class="col-md-4">
                        <select class="form-control" id="maChiBoChon" name="maChiBoChon">
                            <?php
                            $maChiBoTaiKhoan = Session::get("maChiBoTaiKhoan");
                            ?>
                            <option value="0"
                                    <?php
                                    if($maChiBoTaiKhoan != "0"){
                                        echo "disabled";
                                    } else{
                                        echo "selected";
                                    }
                                    ?>
                                    >Toàn Đảng bộ</option>
                            @foreach( $listChiBo as $chiBo )
                            <option value="{{$chiBo->MACB}}"
                            <?php
                            if ($maChiBoTaiKhoan == $chiBo->MACB){
                                echo "selected";
                            } else{
                                echo "disabled";
                            }
                            ?>
                                    >{{$chiBo->TENCB}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control" id="maNhiemKy" name="maNhiemKy">
                            @foreach( $listNhiemKy as $nhiemKy )
                            <option value="{{$nhiemKy->MANHIEMKY}}" class="form-control"
                            <?php
                            if ($maNhiemKy == $nhiemKy->MANHIEMKY)
                                echo "selected";
                            ?>
                                    >{{$nhiemKy->TUNAM." - ".$nhiemKy->DENNAM}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input class="btn btn-default"  type="submit" value="Liệt kê"><br>
                    </div>
                </form>
            </div>
            <div class="col-md-12 alert alert-info">
                <form method="post" action="in-ly-lich-trich-ngang" class="form-group">
                    <input type='hidden' value="{{$maChiBoChon}}" name="maChiBoDuocChon">
                    <input type="hidden" value="{{$maNhiemKy}}" name="maNhiemKyDuocChon">
                    <div class="col-md-4">
                        {{ Form::label('', 'Chức vụ người lập'); }}<br>
                        <input class="form-control" name="chucVuNguoiLap" type="text" required minlength="4"><br>
                    </div>
                    <div class="col-md-4">
                        {{ Form::label('', 'Người lập danh sách'); }}<br>
                        <input class="form-control" name="nguoiLap" type="text" required minlength="4"><br>
                    </div>
                    <div class="col-md-4">
                        {{ Form::label('', ''); }}<br>
                        <input class="btn btn-default"  type="submit" value="Lập danh sách lý lịch trích ngang">
                    </div>
                </form>
            </div>
            <div class="col-md-12 container" id="box">
                <form class="form-group" action="cap-nhat-chuc-vu-action" method="post">
                    <input type='hidden' value="{{$maChiBoChon}}" name="maChiBoDuocChon">
                    <input type="hidden" value="{{$maNhiemKy}}" name="maNhiemKyDuocChon">
                    <?php $listSubmit = null; ?>
                    @foreach( $listDangVien as $dangVien )
                    <?php $listSubmit = $listSubmit . "," . $dangVien->MADANGVIEN; ?>
                    @endforeach
                    <input type="hidden" value="{{$listSubmit}}" name="listSubmit">
                    <div class="box">
                        <div class="box-body">

                            <table class="table col-md-12" id="example1">
                                <thead>
                                    <tr>
                                        <th class="col-md-2">Họ tên</th> 
                                        <th class="col-md-1">Giới tính</th> 
                                        <th class="col-md-4">Chi bộ</th> 
                                        <th class="col-md-3">Chức vụ</th> 
                                    </tr>
                                </thead>
                                <tbody id="bodyPOITable">
                                    @foreach( $listDangVien as $dangVien )
                                    <tr>
                                        <td data-field="id">{{$dangVien->HOTENSUDUNG}}</td> 
                                        <td data-field="id">
                                            @if ( $dangVien->GIOITINH == "1" )
                                            {{ "Nam" }}
                                            @else
                                            {{ "Nữ" }}
                                            @endif
                                        </td> 
                                        <td data-field="id">
                                            @foreach ( $listChiBo as $chiBo )
                                            @if( $chiBo -> MACB == $dangVien->MACB )
                                            {{ $chiBo -> TENCB }}
                                            @endif
                                            @endforeach
                                        </td> 
                                        <td data-field="id">
                                            <select name="{{'maChucVu'.$dangVien->MADANGVIEN }}" class="form-control">
                                                <option value="0">Không</option>
                                                @foreach( $listChucVu as $chucVu )
                                                <option value="{{$chucVu->MACV}}"
                                                <?php
                                                foreach ($listGiuChucVu as $giuChucVu) {
                                                    if ($giuChucVu->MANHIEMKY == $maNhiemKy && $giuChucVu->MADANGVIEN == $dangVien->MADANGVIEN && $chucVu->MACV == $giuChucVu->MACV) {
                                                        echo "selected";
                                                    }
                                                }
                                                ?>
                                                        >{{$chucVu->TENCV}}</option>
                                                @endforeach
                                            </select>
                                        </td> 
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <input type="submit" value="Lưu lại" class="btn btn-default">
                </form>

            </div>
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
