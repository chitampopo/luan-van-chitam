<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật danh mục dân tộc</title>
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
            <h2>Trang cập nhật danh mục dân tộc</h2><br>
        </div>
        <div class="form-group col-md-5 container">
            {{ Form::open(array('url' => 'dan-toc-action')) }}
            {{ Form::label('Tên dân tộc', 'Nhập tên dân tộc'); }}<br>
            <input class="form-control" name="tendantoc" type="text" required minlength="2"><br>
            {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
            {{ Form::close() }}
        </div>
        <div class="col-md-8 container">
            <table class="table col-md-8" data-toggle="table" data-url="data1.json" data-cache="false" data-height="299">
                <thead>
                    <tr>
                        <th data-field="id" class="col-md-4">Mã dân tộc</th> 
                        <th data-field="id">Tên dân tộc</th> 
                    </tr>
                </thead>
                @foreach ($list as $item)
                <tr>
                    <th data-field="id">{{ $item->MADT }}</th> 
                    <th data-field="id">{{ $item->TENDT }}</th> 
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
