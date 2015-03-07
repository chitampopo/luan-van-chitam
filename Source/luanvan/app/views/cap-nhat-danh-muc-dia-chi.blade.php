<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật danh mục địa chỉ</title>
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

        <div class="form-group col-md-5 container">
            {{ Form::open(array('url' => 'dia-chi-action')) }}
            {{ Form::label('Tỉnh thành', 'Nhập tên tỉnh thành'); }}<br>
            <input class="form-control" name="tinhthanh" type="text" required minlength="4"><br>
            {{ Form::label('Quận huyện', 'Nhập tên quận huyện'); }}<br>
            <input class="form-control" name="quanhuyen" type="text" required minlength="4"><br>
            {{ Form::label(' Phường xã', 'Nhập tên phường xã'); }}<br>
            <input class="form-control" name="phuongxa" type="text" required minlength="4"><br>
            {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
            {{ Form::close() }}
        </div>
        <div class="col-md-8 container">
            <table class="table col-md-8" data-toggle="table" data-url="data1.json" data-cache="false" data-height="299">
                <thead>
                    <tr>
                        <th data-field="id">Tỉnh, thành</th> 
                        <th data-field="id">Quận, huyện</th> 
                        <th data-field="id">Phường, xã</th> 
                    </tr>
                </thead>
                @foreach ($list as $item)
                <tr>
                    <?php
                        $tinhThanh = $item->quanhuyen()->tinhthanh();
                        $quanHuyen = $item->quanhuyen();
                    ?>
                    <th data-field="id">{{ $tinhThanh->TENTT }}</th> 
                    <th data-field="id">{{ $quanHuyen->TENQH }}</th> 
                    <th data-field="id">{{ $item->TENPX }}</th> 
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
