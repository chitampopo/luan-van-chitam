<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật danh mục chuyên môn</title>
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
            {{ Form::open(array('url' => 'chuyen-mon-action')) }}
            {{ Form::label('Tên chuyên môn', 'Nhập tên chuyên môn'); }}<br>
            {{ Form::text('tenchuyenmon', null, array('class' => 'form-control')); }}<br>
            {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
            {{ Form::close() }}
        </div>
        <div class="col-md-8 container">
            <table class="table col-md-8" data-toggle="table" data-url="data1.json" data-cache="false" data-height="299">
                <thead>
                    <tr>
                        <th data-field="id">Mã chuyên môn</th> 
                        <th data-field="id">Tên chuyên môn</th> 
                    </tr>
                </thead>
                @foreach ($listChuyenMon as $chuyenMon)
                <tr>
                    <th data-field="id">{{ $chuyenMon->MACM }}</th> 
                    <th data-field="id">{{ $chuyenMon->TENCM }}</th> 
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
