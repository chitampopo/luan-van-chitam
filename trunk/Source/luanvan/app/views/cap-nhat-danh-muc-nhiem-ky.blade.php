<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật danh mục nhiệm kỳ</title>
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
            <h2>Trang cập nhật danh mục nhiệm kỳ</h2>
            {{ Form::open(array('url' => 'nhiem-ky-action')) }}
            {{ Form::label('Từ năm', ' Từ năm'); }}<br>
            <input class="form-control" name="tunam" type="text" required minlength="4"><br>
            {{ Form::label('Đến năm', ' Đến năm'); }}<br>
            <input class="form-control" name="dennam" type="text" required minlength="4"><br>
            {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
            {{ Form::close() }}
            <table class="table col-md-8" data-height="299">
                <thead>
                    <tr>
                        <th data-field="id" class="col-md-2">Mã nhiệm kỳ</th> 
                        <th data-field="id">Từ năm</th> 
                        <th data-field="id">Đến năm</th> 
                    </tr>
                </thead>
                @foreach ($list as $item)
                <tr>
                    <th data-field="id">{{ $item->MANHIEMKY }}</th> 
                    <th data-field="id">{{ $item->TUNAM }}</th> 
                    <th data-field="id">{{ $item->DENNAM }}</th> 
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
