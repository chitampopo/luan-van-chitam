<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Trang lập danh sách cử đi học lớp bồi dưỡng kết nạp Đảng</title>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script2.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- DATA TABLES -->
        <link href="{{asset('public/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="form-inline col-md-9 container alert alert-info ">
            <center><h2>Trang lập danh sách cử đi học lớp bồi dưỡng kết nạp Đảng</h2></center><br>
            <form method="post" action="http://localhost/luanvan/in-danh-sach-hoc-cam-tinh-dang">
                <input type="hidden" name="maChiBo" value="{{$chiBo->MACB}}">
                Khóa ngày:
                <input class="form-control" size="50" data-provide="datepicker" name="khoangay" type="text" value="" required>
                <input type="submit" class="form-control" value="Lập danh sách"><br><br>
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-striped" id="example1">
                            <thead>
                                <tr>
                                    <th >STT</th> 
                                    <th >Họ tên</th> 
                                    <th >Ngày sinh</th>
                                    <th >Giới tính</th>
                                    <th >Chi bộ</th>
                                    <th ><input type="checkbox" id="selecctall" ></th>
                                </tr>
                            </thead>
                            <?php
                            $count = 1;
                            ?>
                            <tbody>
                                @foreach ($listCamTinhDang as $camTinhDang)
                                <tr>
                                    <td data-field="id">{{ $count++ }}</td> 
                                    <td data-field="id">{{ $camTinhDang->HOVATEN }}</td> 
                                    <td data-field="id">{{ date("d-m-Y",strtotime($camTinhDang->ngaysinh)) }}</td> 
                                    <td data-field="id">
                                        @if ($camTinhDang->gioitinh == "1")
                                        {{"Nam"}}
                                        @else
                                        {{"Nữ"}}
                                        @endif
                                    </td> 
                                    <td>
                                        {{$chiBo->TENCB}}
                                    </td>
                                    <td>
                                        <input type="checkbox" class="checkbox1" name="{{$camTinhDang->STTCTD}}">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
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
});
        </script>
    </body>
</html>
