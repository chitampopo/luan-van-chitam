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
        <div class="col-md-12">
            <br><br>
        </div>
        <div class="col-md-12">
            @include('header')
        </div>
        <div class="col-md-12">
            <br><br>
        </div>
        <div class="col-md-4"> 
            @include('menu')
        </div>
        <div class="col-md-8">
            <h2>Trang cập nhật danh mục nhiệm kỳ</h2><br>
        </div>
        <div class="form-group col-md-5 container">
            {{ Form::open(array('url' => 'nhiem-ky-action')) }}
            {{ Form::label('Từ năm', ' Từ năm'); }}<br>
            <input class="form-control" name="tunam" type="text" required minlength="4"><br>
            {{ Form::label('Đến năm', ' Đến năm'); }}<br>
            <input class="form-control" name="dennam" type="text" required minlength="4"><br>
            {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
            {{ Form::close() }}
        </div>
        <div class="col-md-8 container">
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
