<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Trang lập danh sách đề nghị cấp thẻ Đảng viên</title>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script2.js')}}" type="text/javascript"></script>
        <!-- Tích hợp editor -->
        <script type="text/javascript" src="{{asset('vendor/tinymce/tinymce/tinymce.min.js')}}"></script>
        <script>
tinymce.init({
    selector: "textarea#elm2",
    theme: "modern",
    width: 500,
    height: 100,
});
        </script>
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
                <center><h2>Trang lập danh sách đề nghị cấp lại thẻ Đảng viên Bị mất</h2></center><br><br>
                <form method="post" action="loc-danh-sach-cap-the-bi-mat">
                    Đợt ngày:
                    <input class="form-control" size="20" data-provide="datepicker" name="dotNgay" type="text" value="{{$dotNgay}}" required>
                    <input type="submit" value="Xem danh sách" class="form-control">
                </form>
                <form method="post" action="in-danh-sach-cap-the-bi-mat">
                    <input type="hidden" name="maChiBo" value="{{Session::get("maChiBoTaiKhoan")}}">
                    <input name="dotNgay" type="hidden" value="{{$dotNgay}}" >
                    Nơi nhận: 
                    <textarea class="form-control" name="noiNhan" id="elm2"></textarea>
                    <br>
                    <input type="submit" value="In danh sách" class="form-control">
                    <br><br>
                    <div class="box">
                        <div class="box-body">
                            <table class="table table-bordered table-striped" id="example1" data-height="299">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Đảng viên</th>
                                        <th>Ngày sinh</th>
                                        <th>Quê quán</th>
                                        <th>Chi bộ</th>
                                        <th><input type="checkbox" id="selecctall" ></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 1;
                                    ?>
                                    @foreach($listDangVien as $dangVien)
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
                                        <td><input type="checkbox" class="checkbox1" name="{{'chonDangVien'.$dangVien->MADANGVIEN}}"
                                                   <?php
                                                   foreach ($dsCapThe as $ds) {
                                                       if ($ds->MADANGVIEN == $dangVien->MADANGVIEN) {
                                                           echo "checked";
                                                       }
                                                   }
                                                   ?>
                                                   >
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
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

