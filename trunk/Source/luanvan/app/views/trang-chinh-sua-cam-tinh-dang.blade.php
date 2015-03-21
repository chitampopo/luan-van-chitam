<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang chỉnh sửa cảm tình Đảng</title>
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
        <div class="col-md-9">
            <h2>Trang chỉnh sửa cảm tình Đảng</h2><br>
        </div>
        <div class="form-group col-md-9 container " >
            {{ Form::open(array('url' => 'chinh-sua-cam-tinh-dang-action')) }}
            <input type="hidden" name="maCamTinhDang" value="{{$camTinhDang->STTCTD}}">
            <div class="col-md-6">
                {{ Form::label('', 'Chi bộ'); }}<br>
                <select class="form-control" name="chiBo">
                    @foreach ($listChiBo as $chiBo )
                    <option value="{{$chiBo->MACB}}"
                    <?php
                    if ($camTinhDang->MACB == $chiBo->MACB) {
                        echo "selected";
                    }
                    ?>
                            >{{$chiBo->TENCB}}</option>
                    @endforeach
                </select><br>
                {{ Form::label('', 'Họ và tên'); }}<br>
                <input class="form-control" name="hovaten" type="text" required minlength="4" value="{{$camTinhDang->HOVATEN}}"><br>
                {{ Form::label('', 'Giới tính'); }}<br>
                <div class="form-control">
                    <label>
                        <input type="radio" name="gioitinh" value="1" required
                        <?php
                        if ($camTinhDang->gioitinh == 1) {
                            echo "checked";
                        }
                        ?>
                               > Nam
                    </label>
                    <label>
                        <input type="radio" name="gioitinh" value="0" required
                        <?php
                        if ($camTinhDang->gioitinh == 0) {
                            echo "checked";
                        }
                        ?>
                               > Nữ<br>
                    </label>
                </div>
                {{ Form::label('', 'Ngày sinh'); }}<br>
                <input class="form-control" data-provide="datepicker" name="ngaysinh" type="text" value="{{date("d-m-Y",strtotime($camTinhDang->ngaysinh))}}" required>
                {{ Form::label('', 'Dân tộc'); }}<br>
                <select class="form-control" name="dantoc" required>
                    @foreach( $listDanToc as $danToc)
                    <option value="{{$danToc->MADT}}"
                    <?php
                    if ($camTinhDang->madt == $danToc->MADT) {
                        echo "selected";
                    }
                    ?>
                            >{{$danToc->TENDT}}</option>
                    @endforeach
                </select>
                {{ Form::label('', 'Tôn giáo'); }}<br>
                <select class="form-control" name="tongiao">
                    <option value="0"
                    <?php
                    if ($camTinhDang->matongiao == null) {
                        echo "selected";
                    }
                    ?>
                            >Không</option>
                    @foreach( $listTonGiao as $tonGiao)
                    <option value="{{$tonGiao->MATONGIAO}}"
                    <?php
                    if ($camTinhDang->matongiao == $tonGiao->MATONGIAO) {
                        echo "selected";
                    }
                    ?>
                            >{{$tonGiao->TENTONGIAO}}</option>
                    @endforeach
                </select>
                {{ Form::label('', 'Quê quán'); }}<br>
                <select class="form-control" name="quequan">
                    @foreach ($listTinh as $tinh)
                    @foreach ($listHuyen as $huyen)
                    @foreach ($listXa as $xa)
                    @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT )
                    <option value="{{$xa->MAPX}}"
                    <?php
                    if ($camTinhDang->maquequan == $xa->MAPX) {
                        echo "selected";
                    }
                    ?>
                            > {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }} </option>
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
                    <option value="{{$xa->MAPX}}"
                    <?php
                    if ($camTinhDang->manoio == $xa->MAPX) {
                        echo "selected";
                    }
                    ?>
                            > {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }} </option>
                    @endif
                    @endforeach
                    @endforeach   
                    @endforeach
                </select>
                {{ Form::label('', 'Trình độ chuyên môn'); }}<br>
                <select class="form-control" name="chuyenmon">
                    <option value="0"
                    <?php
                    if ($camTinhDang->macm == null) {
                        echo "selected";
                    }
                    ?>
                            >Không</option>
                    @foreach( $listChuyenMon as $chuyenMon)
                    <option value="{{$chuyenMon->MACM}}"
                    <?php
                    if ($camTinhDang->macm == $chuyenMon->MACM) {
                        echo "selected";
                    }
                    ?>
                            >{{$chuyenMon->TENCM}}</option>
                    @endforeach
                </select>
                {{ Form::label('', 'Chức vụ chính quyền'); }}<br>
                <input class="form-control" name="cvchinhquyen" value="{{$camTinhDang->CVCQ}}" type="text">

            </div>
            <div class="col-md-6">
                {{ Form::label('', 'Chức vụ đoàn thể'); }}<br>
                <input class="form-control" name="cvdoanthe" type="text" value="{{$camTinhDang->CVDT}}">
                {{ Form::label('', 'Ngày công nhận cảm tình Đảng'); }}<br>
                <input class="form-control" data-provide="datepicker" name="ngaycongnhan" type="text" value="{{$camTinhDang->NGAYCONGNHANCTD}}" required><br>
                {{ Form::label('', 'Giấy chứng nhận lớp bồi dưỡng nhận thức về Đảng'); }}<br>
                <input class="form-control" data-provide="datepicker" name="ngaychungnhan" type="text" value="{{$camTinhDang->CHUNGNHANCTD}}" required><br>
                {{ Form::label('', 'Quá trình viết lý lịch'); }}<br>
                <select name="lylich" class="form-control">
                    <option value="1"
                    <?php
                    if ($camTinhDang->LLNHAP == "1" &&
                            $camTinhDang->CBTHONGQUA == "0" &&
                            $camTinhDang->LLCHINH == "0" &&
                            $camTinhDang->XACMINH == "0") {
                        echo "selected";
                    }
                    ?>
                            >Viết lý lịch bản nháp</option>
                    <option value="2"
                    <?php
                    if ($camTinhDang->LLNHAP == "1" &&
                            $camTinhDang->CBTHONGQUA == "1" &&
                            $camTinhDang->LLCHINH == "0" &&
                            $camTinhDang->XACMINH == "0") {
                        echo "selected";
                    }
                    ?>
                            >Chi bộ thông qua lý lịch</option>
                    <option value="3"
                    <?php
                    if ($camTinhDang->LLNHAP == "1" &&
                            $camTinhDang->CBTHONGQUA == "1" &&
                            $camTinhDang->LLCHINH == "1" &&
                            $camTinhDang->XACMINH == "0") {
                        echo "selected";
                    }
                    ?>
                            >Viết lý lịch bản chính</option>
                    <option value="4"
                    <?php
                    if ($camTinhDang->LLNHAP == "1" &&
                            $camTinhDang->CBTHONGQUA == "1" &&
                            $camTinhDang->LLCHINH == "1" &&
                            $camTinhDang->XACMINH == "1") {
                        echo "selected";
                    }
                    ?>
                            >Đã xác minh lý lịch</option>
                </select><br>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="doanVien"
                        <?php
                        if ($camTinhDang->DOANVIEN == "1") {
                            echo "checked";
                        }
                        ?>
                               >
                        Là Đoàn viên 
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="lamdonxinvaodang"
                        <?php
                        if ($camTinhDang->VIETDON == "1") {
                            echo "checked";
                        }
                        ?>
                               >
                        Cảm tình Đảng làm đơn xin vào Đảng
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="ykiennoicutru"
                        <?php
                        if ($camTinhDang->YKIENCUTRU == "1") {
                            echo "checked";
                        }
                        ?>
                               >
                        Xin ý kiến nơi cư trú
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="ykiendoanthe"
                        <?php
                        if ($camTinhDang->YKIENDOANTHE == "1") {
                            echo "checked";
                        }
                        ?>
                               >
                        Xin ý kiến đoàn thể
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="giaygtdvhd"
                        <?php
                        if ($camTinhDang->GIAYGTDANGVIEN == "1") {
                            echo "checked";
                        }
                        ?>
                               >
                        Giấy giới thiệu của Đảng viên hướng dẫn
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="giaygtdoanthe"
                        <?php
                        if ($camTinhDang->GIAYGTDOANTHE == "1") {
                            echo "checked";
                        }
                        ?>
                               >
                        Giấy giới thiệu đoàn thể
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="xetketnap"
                        <?php
                        if ($camTinhDang->XETKETNAP == "1") {
                            echo "checked";
                        }
                        ?>
                               >
                        Chi bộ xét kết nạp
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="chuyenhoso"
                        <?php
                        if ($camTinhDang->CHUYENDANGUY == "1") {
                            echo "checked";
                        }
                        ?>
                               >
                        Chuyển hồ sơ lên Đảng ủy
                    </label>
                </div><br>
                {{ Form::label('', "Người hướng dẫn"); }}<br>
                <textarea class="form-control" rows="2" name="nguoihuongdan" >{{$camTinhDang->NGUOIHD}}</textarea><br>
                {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
                {{ Form::close() }}
            </div>
        </div>
    </body>
</html>
