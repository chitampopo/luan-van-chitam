<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật danh mục chi bộ</title>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
    </head>
    <body>
        <div class="col-md-12">
            @include('header')
        </div>
        <div class="col-md-4"> 
            @include('menu')
        </div>

        <div class="form-group col-md-5 container">
            {{ Form::open(array('url' => 'chi-bo-action')) }}
            {{ Form::label('Tên chi bộ', 'Nhập tên chi bộ'); }}<br>
            {{ Form::text('tenchibo', null, array('class' => 'form-control')); }}<br>
            {{ Form::label('Tên tài khoản', 'Nhập tên tài khoản'); }}<br>
            {{ Form::text('tentaikhoan', null, array('class' => 'form-control')); }}<br>
            {{ Form::label('Mật khẩu', 'Nhập mật khẩu'); }}<br>
            {{ Form::password('matkhau', array('class' => 'form-control')); }}<br>
            {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
            {{ Form::close() }}
        </div>
        <div class="col-md-8 container">
            <table class="table col-md-8" data-toggle="table" data-url="data1.json" data-cache="false" data-height="299">
                <thead>
                    <tr>
                        <th data-field="id">Mã chi bộ</th> 
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
    </body>
</html>
