<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật danh mục chức vụ</title>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery.validate.min')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
    </head>
    <body>
        @include('header')
        <div class="col-md-4"> 
            @include('menu')
        </div>
        <div class="col-md-8">
            <h2>Trang cập nhật danh mục chức vụ</h2><br>
        </div>
        <div class="form-group col-md-5 container">
            {{ Form::open(array('url' => 'chuc-vu-action')) }}
            {{ Form::label('', 'Tên chức vụ'); }}<br>
            <input class="form-control" name="tenchucvu" type="text" required minlength="6"><br>
            {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
            {{ Form::close() }}
        </div>
        <div class="col-md-8 container">
            <table class="table col-md-8" data-toggle="table" data-url="data1.json" data-cache="false" data-height="299">
                <thead>
                    <tr>
                        <th data-field="id" class="col-lg-2">Mã chức vụ</th> 
                        <th data-field="id">Tên chức vụ</th> 
                    </tr>
                </thead>
                @foreach ($listChucVu as $chucVu)
                <tr>
                    <th data-field="id">{{ $chucVu->MACV }}</th> 
                    <th data-field="id">{{ $chucVu->TENCV }}</th> 
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
