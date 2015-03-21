<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang lập danh sách cử đi học lớp bồi dưỡng kết nạp Đảng</title>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script2.js')}}" type="text/javascript"></script>
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="col-md-9">
            <h2>Trang lập danh sách cử đi học lớp bồi dưỡng kết nạp Đảng</h2><br>
        </div>
        <div >
            <div class="form-group col-md-9 container ">
                <form method="post" action="http://localhost/luanvan/in-danh-sach-hoc-cam-tinh-dang">
                    <input type="hidden" name="maChiBo" value="{{$chiBo->MACB}}">
                    <table class="table">
                        <thead>
                            <tr>
                                <th >STT</th> 
                                <th >Họ tên</th> 
                                <th >Ngày sinh</th>
                                <th >Giới tính</th>
                                <th >Chi bộ</th>
                                <th ><input type="checkbox"></th>
                            </tr>
                        </thead>
                        <?php
                        $count = 1;
                        ?>


                        @foreach ($listCamTinhDang as $camTinhDang)
                        <tbody>
                            <tr>
                                <td data-field="id">{{ $count++ }}</td> 
                                <td data-field="id">{{ $camTinhDang->HOVATEN }}</td> 
                                <td data-field="id">{{ $camTinhDang->ngaysinh }}</td> 
                                <td data-field="id">
                                    @if ($camTinhDang->gioitinh == "1")
                                    {{"Nam"}}
                                    @else
                                    {{"Nữ"}}
                                    @endif
                                </td> 
                                <td>
                                    {{$chiBo->TENCB}}
                                </td>
                                <td>
                                    <input type="checkbox" name="{{$camTinhDang->STTCTD}}">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    Khóa ngày:
                    <input class="form-control" data-provide="datepicker" name="khoangay" type="text" value="" required>
                    <input type="submit" value="Lập danh sách">
                </form>
            </div>

        </div>
        <script>
$("#hider").click(function () {
    $("#box").hide("fast", function () {
    });
});
$("#shower").click(function () {
    $("#box").show("fast");
});
        </script>
    </body>
</html>
