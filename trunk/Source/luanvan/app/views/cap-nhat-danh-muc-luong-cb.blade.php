<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật danh mục lương cơ bản</title>
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
            {{ Form::open(array('url' => 'them-luong-cb-action')) }}
            {{ Form::label(' Lương cơ bản', ' Nhập số tiền lương cơ bản'); }}<br>
            {{ Form::text('luong', null, array('class' => 'form-control')); }}<br>
            {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
            {{ Form::close() }}
        </div>
        <div class="col-md-8 container">
            <table class="table col-md-8" data-toggle="table" data-url="data1.json" data-cache="false" data-height="299">
                <thead>
                    <tr>
                        <th data-field="id">Số thứ tự</th> 
                        <th data-field="id"> Số tiền</th> 
                    </tr>
                </thead>
                @foreach ($list as $item)
                <tr>
                    <th data-field="id">{{ $item->STTLUONGCB }}</th> 
                    <th data-field="id">{{ $item->LUONGCB }}</th> 
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
