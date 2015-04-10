<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Cập nhật danh mục học vị</title>
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
        <div class="form-group col-md-9 container alert alert-info" style=" background-color: #F7FAFF; color: black">
            <center><h2>Trang cập nhật danh mục học vị</h2></center><br>
            <div style="text-align: right" class="col-lg-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm học vị</button>
            </div>
            <br><br>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                            <h3 class="modal-title custom_align" id="Heading" style="color: #228B22">Thêm học vị</h3>
                        </div>
                        <div class="modal-body">
                            {{ Form::open(array('url' => 'hoc-vi-action')) }}
                            {{ Form::label('Tên học vị', ' Nhập tên học vị'); }}<br>
                            <input class="form-control" name="tenhocvi" type="text" required minlength="4"><br>
                            {{ Form::submit('Lưu lại', array('class' => 'form-control btn btn-default')); }}
                            {{ Form::close() }}
                        </div>
                    </div>
                    <!-- /.modal-content --> 
                </div>
            </div>
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered table-striped col-md-8" id="example1">
                        <thead>
                            <tr>
                                <th data-field="id" class="col-md-2">Mã học vị</th> 
                                <th data-field="id">Tên học vị</th> 
                            </tr>
                        </thead>
                        @foreach ($list as $item)
                        <tr>
                            <td data-field="id">{{ $item->MAHOCVI }}</td> 
                            <td data-field="id">{{ $item->TENHOCVI }}</td> 
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
$(function () {
    $("#example1").dataTable();
});
        </script>
    </body>
</html>
