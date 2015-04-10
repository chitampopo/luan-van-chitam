<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Cập nhật danh mục chuyên môn</title>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
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
        <div class="form-group col-md-9 container alert alert-info" style="background-color: #F7FAFF; color: black">
            <center><h2>Trang cập nhật danh mục trình độ chuyên môn</h2></center><br>
            <div style="text-align: right" class="col-lg-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm chuyên môn</button>
            </div>
            <br><br>
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered table-striped col-md-8" id="example1" data-toggle="table" data-url="data1.json" data-cache="false" data-height="299">
                        <thead>
                            <tr>
                                <th data-field="id" class="col-md-2" style="background-color: steelblue">Mã chuyên môn</th> 
                                <th data-field="id" style="background-color: steelblue">Tên chuyên môn</th> 
                            </tr>
                        </thead>
                        @foreach ($listChuyenMon as $chuyenMon)
                        <tr>
                            <td data-field="id">{{ $chuyenMon->MACM }}</td> 
                            <td data-field="id">{{ $chuyenMon->TENCM }}</td> 
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                            <h3 class="modal-title custom_align" id="Heading" style="color: #228B22">Thêm trình độ chuyên môn</h3>
                        </div>
                        <div class="modal-body">
                            {{ Form::open(array('url' => 'chuyen-mon-action')) }}
                            {{ Form::label('Tên chuyên môn', 'Nhập tên chuyên môn'); }}<br>
                            <input class="form-control" name="tenchuyenmon" type="text" required minlength="4"><br>
                            {{ Form::submit('Lưu lại', array('class' => 'form-control btn btn-primary')); }}
                            {{ Form::close() }}
                        </div>
                    </div>
                    <!-- /.modal-content --> 
                </div>
            </div>
        </div>
        <!-- DATA TABES SCRIPT -->
        <script src="{{asset('public/js/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/dataTables.bootstrap.js')}}" type="text/javascript"></script>
        <script>
$(function () {
    $("#example1").dataTable();
});
        </script>
    </body>
</html>
