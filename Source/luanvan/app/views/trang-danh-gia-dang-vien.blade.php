<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Trang cập nhật đánh giá và phân loại Đảng viên</title>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery.validate.min')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <!-- DATA TABLES -->
        <link href="{{asset('public/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div >
            <div class="col-md-9 container alert alert-info" style="padding: 0 30px 0 30px">
                <center><h2>Trang cập nhật đánh giá và phân loại Đảng viên</h2></center><br>
                <form action="filter-danh-gia" method="post" class="form-group">
                    <div class="col-md-4">
                        <select name="maChiBo" class="form-control" id="maChiBo"

                                >
                            <option value="0"
                            <?php
                            if (Session::get("maChiBoTaiKhoan") != "0") {
                                echo "disabled";
                            }
                            ?>
                                    >Toàn Đảng bộ</option>
                            @foreach( $listChiBo as $chiBo )
                            <option value="{{$chiBo->MACB}}" class="form-control"
                            <?php
                            if (Session::get("maChiBoTaiKhoan") == $chiBo->MACB) {
                                echo "selected";
                            } else {
                                echo "disabled";
                            }
                            ?>
                                    >{{$chiBo->TENCB}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" name="namChon">
                            @foreach( $listNam as $nam )
                            <option value="{{$nam->NAM}}"
                            <?php
                            if ($nam->NAM == $namDuocChon) {
                                echo "selected";
                            }
                            ?>
                                    >{{$nam->NAM}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input class="btn btn-default"  type="submit" value="Liệt kê">
                    </div>
                </form>
                <form action="luu-danh-gia" method="post" class="form-group">
                    <input type="hidden" name="namChon" value="{{$namDuocChon}}">
                    <br><br>
                    <div class="box">
                        <div class="box-body">
                            <table class="table table-bordered table-striped col-md-8" id="example1" data-height="299">
                                <thead>
                                    <tr>
                                        <th>Tên Đảng viên</th> 
                                        <th>Giới tính</th> 
                                        <th>Ngày sinh</th> 
                                        <th>Chi bộ</th> 
                                        <th>Mức phân loại</th>
                                    </tr>
                                </thead>
                                @foreach ($listDangVien as $item)
                                <tr>
                                    <td><a href="{{URL()."/trang-chinh-sua-dang-vien/".$item->MADANGVIEN }}" target="_blank"> {{ $item->HOTENSUDUNG }} </a></td> 
                                    <td>@if ($item->GIOITINH == "1") {{"Nam" }} @else {{"Nữ"}} @endif</td> 
                                    <td>{{ date("d-m-Y", strtotime($item->NGAYSINH)) }}</td> 
                                    <td>
                                        @foreach( $listChiBo as $chiBo )
                                        @foreach( $listLyLich as $lyLich )
                                        @if ( ($lyLich-> MACB == $chiBo->MACB ) && ( $lyLich->MADANGVIEN == $item->MADANGVIEN ) )
                                        {{ $chiBo -> TENCB }}
                                        @endif
                                        @endforeach
                                        @endforeach
                                    </td> 
                                    <td>
                                        <select name="{{'mucPhanLoai'.$item->MADANGVIEN }}" class="form-control">
                                            <?php
                                            $phanLoai = PhanLoaiDangVien::where("MADANGVIEN", "=", $item->MADANGVIEN)->where("NAM", "=", $namDuocChon)->first();
                                            if (count($phanLoai) == 0) {
                                                $phanLoai = new PhanLoaiDangVien();
                                                $phanLoai->MUCPLDV = 0;
                                            }
                                            ?>
                                            @if($phanLoai->MUCPL == 0 )
                                            <option>Chưa chọn</option>
                                            @endif
                                            <option value='1'
                                            <?php
                                            if ($phanLoai->MUCPLDV == 1) {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Mức 1</option>
                                            <option value='2'
                                            <?php
                                            if ($phanLoai->MUCPLDV == 2) {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Mức 2</option>
                                            <option value='3'
                                            <?php
                                            if ($phanLoai->MUCPLDV == 3) {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Mức 3</option>
                                            <option value='4'
                                            <?php
                                            if ($phanLoai->MUCPLDV == 4) {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Mức 4</option>
                                        </select>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                    <div style="float:right">
                        <input class="btn btn-default"  type="submit"  value="Lưu lại">
                        <br><br>
                    </div>
                </form>
            </div>
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
$('#selecctall').click(function (event) {  //on click 
    if (this.checked) { // check select status
        $('.checkbox1').each(function () { //loop through each checkbox
            this.checked = true;  //select all checkboxes with class "checkbox1"               
        });
    } else {
        $('.checkbox1').each(function () { //loop through each checkbox
            this.checked = false; //deselect all checkboxes with class "checkbox1"                       
        });
    }
});
        </script>
    </body>
</html>
