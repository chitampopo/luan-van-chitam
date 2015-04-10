<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Cập nhật sổ công văn đến</title>
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
        <div class="col-md-12">
            @include('header')
        </div>
        <div class="col-md-12">
            <br>
        </div>
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="col-md-9 container alert alert-info">
            <center><h2>Trang cập nhật sổ công văn đến</h2></center><br>
            <div style="float: right">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Thêm công văn</button>
                <button type="button" class="btn btn-default" id="button1" class="form-control">Kết xuất sổ</button><br><br>
            </div><br><br>
            <!-- Form thêm công văn, khi nhấn nút thêm công văn sẽ hiện ra -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                            <h3 class="modal-title custom_align" id="Heading" style="color: #228B22">Thêm cuộc gọi</h3>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="them-cong-van-den" class="form-group">
                                Số công văn: <br>
                                <input type="text" name="soCongVan" class="form-control" required>
                                Tên công văn: <br>
                                <input type="text" name="tenCongVan" class="form-control" required>
                                Nơi gởi đến: <br>
                                <input type="text" name="noiGoiDen" class="form-control" required>
                                Tập Hs Lưu:<br>
                                <input type="text" name="tapHSLuu" class="form-control" required>
                                Ghi chú: <br>
                                <input type="text" name="ghiChu" class="form-control"><br>
                                <input type="submit" class="form-control btn-primary" value="Lưu">
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content --> 
                </div>
            </div>
            <!-- Hết Form thêm công văn -->
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered table-striped" id="example1" data-height="299">
                        <thead>
                            <tr>
                                <th data-field="id">STT</th> 
                                <th data-field="id">Số CV</th> 
                                <th data-field="id">Tên CV</th> 
                                <th data-field="id">Nơi gởi đến</th> 
                                <th data-field="id">Ngày</th> 
                                <th data-field="id">Tập HS lưu</th> 
                                <th data-field="id">Ghi chú</th> 
                            </tr>
                        </thead>
                        <?php $count = 1; ?>
                        <!-- Vòng lặp hiển thị dữ liệu-->
                        @foreach( $listCongVan as $congVan )
                        <tr>
                            <th data-field="id" class="col-md-1">{{$count++;}}</th> 
                            <th data-field="id" class="col-md-1">{{$congVan->SOCV}}</th> 
                            <th data-field="id"  class="col-md-3">{{$congVan->TENCVDEN}}</th> 
                            <th data-field="id" class="col-md-2">{{$congVan->NOIGOIDEN}}</th> 
                            <th data-field="id" class="col-md-2">{{date("d-m-Y", strtotime($congVan->NGAY));}}</th> 
                            <th data-field="id" class="col-md-1">{{$congVan->TAPHSLUU}}</th> 
                            <th data-field="id" class="col-md-2">{{$congVan->GHICHUCVDEN}}</th> 
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
        <!-- DATA TABES SCRIPT -->
        <script src="{{asset('public/js/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/dataTables.bootstrap.js')}}" type="text/javascript"></script>
        <script>
$('#button1').click(function () {
    window.location = "http://localhost/luanvan/index.php/ket-xuat-so-cong-van-den";
});
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
