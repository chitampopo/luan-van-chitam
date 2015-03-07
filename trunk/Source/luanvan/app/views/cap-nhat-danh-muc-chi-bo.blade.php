<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật danh mục chi bộ</title>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery.validate.min')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
    </head>
    <body>
        @include('header')
        <div class="col-md-4"> 
            @include('menu')
        </div>
        <div class="col-md-8">
            <h2>Trang cập nhật danh mục chi bộ</h2><br>
        </div>
        <div >
            <div class="form-group col-md-5 container ">
                {{ Form::open(array('url' => 'chi-bo-action')) }}
                {{ Form::label('Tên chi bộ', 'Nhập tên chi bộ'); }}<br>
                <input class="form-control" name="tenchibo" type="text" required minlength="4"><br>
                {{ Form::label('Tên tài khoản', 'Nhập tên tài khoản'); }}<br>
                <input class="form-control" name="tentaikhoan" type="text" required minlength="4"><br>
                {{ Form::label('Mật khẩu', 'Nhập mật khẩu'); }}<br>
                <input class="form-control" name="matkhau" type="password" required minlength="4"><br>
                {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
                <button type="button" class="btn btn-default" id="hider">Ẩn</button>
                <button type="button" class="btn btn-default" id="shower">Hiện</button><br>
                {{ Form::close() }}
            </div>
            <div class="col-md-8 container" id="box">
                <table class="table col-md-8" data-toggle="table" data-url="data1.json" data-cache="false" data-height="299">
                    <thead>
                        <tr>
                            <th data-field="id" class="col-lg-2">Mã chi bộ</th> 
                            <th data-field="id">Tên chi bộ</th> 
                        </tr>
                    </thead>
                    @foreach ($listChiBo as $chiBo)
                    <tr>
                        <th data-field="id">{{ $chiBo->MACB }}</th> 
                        <th data-field="id">{{ $chiBo->TENCB }}</th> 
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
        <script>
            $("#hider").click(function () {
                $("#box").hide("fast", function () {
                });
            });
            $("#shower").click(function () {
                $("#box").show("fast");
            });
        </script>
    </body>
</html>
