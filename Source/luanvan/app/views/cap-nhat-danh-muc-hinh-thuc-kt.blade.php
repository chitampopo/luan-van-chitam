<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật danh mục hình thức khen thưởng</title>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery.validate.min')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="form-group col-md-9 container alert alert-success" style="padding-left: 100px; padding-right: 100px">
            <h2>Trang cập nhật danh mục hình thức khen thưởng</h2>
            {{ Form::open(array('url' => 'hinh-thuc-kt-action')) }}
            {{ Form::label('Tên hình thức khen thưởng', 'Nhập tên hình thức khen thưởng'); }}<br>
            <input class="form-control" name="ten" type="text" required minlength="4"><br>
            {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
            {{ Form::close() }}
            <table class="table col-md-8" data-toggle="table" data-url="data1.json" data-cache="false" data-height="299">
                <thead>
                    <tr>
                        <th data-field="id" class="col-md-4">Mã hình thức khen thưởng</th> 
                        <th data-field="id">Tên hình thức khen thưởng</th> 
                    </tr>
                </thead>
                @foreach ($list as $item)
                <tr>
                    <th data-field="id">{{ $item->MAHTKT }}</th> 
                    <th data-field="id">{{ $item->TENHTKT }}</th> 
                </tr>
                @endforeach
            </table>
        </div>
            
    </body>
</html>
