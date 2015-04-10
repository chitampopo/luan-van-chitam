<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Đảng phí</title>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- DATA TABLES -->
        <link href="{{asset('public/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="col-md-12">
            <br>
        </div>
        @include('header')
        <br>
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="col-md-9 container alert alert-info">
            <center><h2><br>Trang cập nhật các hệ số lương</h2></center><br>
            <form method="post" action="luu-cac-he-so">
                <div class="col-md-12">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                        <input type="submit" value="Lưu các hệ số" class="form-control" >
                    </div>
                </div>
                <br><br><br>
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-striped" id="example1" data-height="299">
                            <thead>
                                <tr>
                                    <th style="width: 30px">STT</th> 
                                    <th style="width: 120px">Họ và tên</th> 
                                    <th style="width: 150px">Chi bộ</th> 
                                    <th style="width: 70px">Hệ số lương</th> 
                                    <th style="width: 70px">Phụ cấp chức vụ</th> 
                                    <th style="width: 70px">Phụ cấp thâm niên</th> 
                                    <th style="width: 70px">Phụ cấp vượt khung</th> 
                                </tr>
                            </thead>
                            <?php
                            $count = 1;
                            $listChiBo = ChiBo::all();
                            ?>
                            @foreach( $listDangVien as $dangVien )
                            <tr>
                                <td data-field="id" >{{$count++;}}</td> 
                                <td data-field="id" >{{$dangVien->HOTENSUDUNG}}</td> 
                                <td data-field="id"  >
                                    @foreach( $listChiBo as $chiBo )
                                    @if ($chiBo->MACB == $dangVien->MACB)
                                    {{$chiBo->TENCB}}
                                    @endif
                                    @endforeach

                                    </th> 
                                <td data-field="id" >
                                    <input type="text" size="5" class="form-control" name="{{"hsLuong".$dangVien->MADANGVIEN}}" value="{{number_format($dangVien->HSLUONG,2)}}" >
                                </td> 
                                <td data-field="id" >
                                    <input type="text" size="5" class="form-control" name="{{"hsChucVu".$dangVien->MADANGVIEN}}"  value="{{number_format($dangVien->HSCHUCVU,2)}}">
                                </td> 
                                <td data-field="id" >
                                    <input type="text" size="5" class="form-control" name="{{"hsThamNien".$dangVien->MADANGVIEN}}" value="{{number_format($dangVien->HSTHAMNIEN,2)}}" >
                                </td> 
                                <td data-field="id" >
                                    <input type="text" size="5" class="form-control" name="{{"hsVuotKhung".$dangVien->MADANGVIEN}}"  value="{{number_format($dangVien->HSVUOTKHUNG,2)}}">
                                </td> 
                            </tr>
                            @endforeach
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
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
