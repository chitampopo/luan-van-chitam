<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Trang thêm cảm tình Đảng</title>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery.validate.min')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="form-group col-md-9 container alert alert-info" >
            <center><h2>Trang thêm cảm tình Đảng</h2></center>
            {{ Form::open(array('url' => 'them-cam-tinh-dang-action')) }}
            <div class="col-md-6">
                {{ Form::label('', 'Chi bộ'); }}<br>
                <select class="form-control" name="chiBo">
                    @foreach ($listChiBo as $chiBo )
                    <option value="{{$chiBo->MACB}}">{{$chiBo->TENCB}}</option>
                    @endforeach
                </select>
                {{ Form::label('', 'Họ và tên'); }}<br>
                <input class="form-control" name="hovaten" type="text" required minlength="4">
                {{ Form::label('', 'Giới tính'); }}<br>
                <div class="form-control">
                    <label>
                        <input type="radio" name="gioitinh" value="1" required> Nam
                    </label>
                    <label>
                        <input type="radio" name="gioitinh" value="0" required> Nữ<br>
                    </label>
                </div>
                {{ Form::label('', 'Ngày sinh'); }}<br>
                <input class="form-control" data-provide="datepicker" name="ngaysinh" type="text" value="" required>
                {{ Form::label('', 'Dân tộc'); }}<br>
                <select class="form-control" name="dantoc" required>
                    @foreach( $listDanToc as $danToc)
                    <option value="{{$danToc->MADT}}">{{$danToc->TENDT}}</option>
                    @endforeach
                </select>
                {{ Form::label('', 'Tôn giáo'); }}<br>
                <select class="form-control" name="tongiao">
                    <option value="0">Không</option>
                    @foreach( $listTonGiao as $tonGiao)
                    <option value="{{$tonGiao->MATONGIAO}}">{{$tonGiao->TENTONGIAO}}</option>
                    @endforeach
                </select>
                {{ Form::label('', 'Quê quán'); }}<br>
                <select class="form-control" name="quequan">
                    @foreach ($listTinh as $tinh)
                    @foreach ($listHuyen as $huyen)
                    @foreach ($listXa as $xa)
                    @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT )
                    <option value="{{$xa->MAPX}}"> {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }} </option>
                    @endif
                    @endforeach
                    @endforeach   
                    @endforeach
                </select>
                {{ Form::label('', 'Nơi ở'); }}<br>
                <select class="form-control" name="noio">
                    @foreach ($listTinh as $tinh)
                    @foreach ($listHuyen as $huyen)
                    @foreach ($listXa as $xa)
                    @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT )
                    <option value="{{$xa->MAPX}}"> {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }} </option>
                    @endif
                    @endforeach
                    @endforeach   
                    @endforeach
                </select>
                {{ Form::label('', 'Trình độ chuyên môn'); }}<br>
                <select class="form-control" name="chuyenmon">
                    <option value="0">Không</option>
                    @foreach( $listChuyenMon as $chuyenMon)
                    <option value="{{$chuyenMon->MACM}}">{{$chuyenMon->TENCM}}</option>
                    @endforeach
                </select>
                {{ Form::label('', 'Chức vụ chính quyền'); }}<br>
                <input class="form-control" name="cvchinhquyen" type="text" required>
                {{ Form::label('', 'Chức vụ đoàn thể'); }}<br>
                <input class="form-control" name="cvdoanthe" type="text" required>
            </div>
            <div class="col-md-6">
                {{ Form::label('', 'Ngày công nhận cảm tình Đảng'); }}<br>
                <input class="form-control" data-provide="datepicker" name="ngaycongnhan" type="text" value="" required>
                {{ Form::label('', 'Giấy chứng nhận lớp bồi dưỡng nhận thức về Đảng'); }}<br>
                <input class="form-control" data-provide="datepicker" name="ngaychungnhan" type="text" value="" required>
                {{ Form::label('', 'Quá trình viết lý lịch'); }}<br>
                <select name="lylich" class="form-control">
                    <option value="1">Viết lý lịch bản nháp</option>
                    <option value="2">Chi bộ thông qua lý lịch</option>
                    <option value="3">Viết lý lịch bản chính</option>
                    <option value="4">Đã xác minh lý lịch</option>
                </select>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="doanVien">
                        Là Đoàn viên 
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="lamdonxinvaodang">
                        Cảm tình Đảng làm đơn xin vào Đảng
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="ykiennoicutru">
                        Xin ý kiến nơi cư trú
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="ykiendoanthe">
                        Xin ý kiến đoàn thể
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="giaygtdvhd">
                        Giấy giới thiệu của Đảng viên hướng dẫn
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="giaygtdoanthe">
                        Giấy giới thiệu đoàn thể
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="xetketnap">
                        Chi bộ xét kết nạp
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="chuyenhoso">
                        Chuyển hồ sơ lên Đảng ủy
                    </label>
                </div><br>
                {{ Form::label('', "Người hướng dẫn"); }}<br>
                <textarea class="form-control" rows="2" name="nguoihuongdan" ></textarea><br>
                {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
                {{ Form::close() }}
            </div>
        </div>
    </body>
</html>
