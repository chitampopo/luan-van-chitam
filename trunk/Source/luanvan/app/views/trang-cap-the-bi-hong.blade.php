<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang lập danh sách đề nghị cấp thẻ Đảng viên bị hỏng</title>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script2.js')}}" type="text/javascript"></script>
        <!-- Tích hợp editor -->
        <script type="text/javascript" src="{{asset('vendor/tinymce/tinymce/tinymce.min.js')}}"></script>
        <script>
tinymce.init({
    selector: "textarea#elm2",
    theme: "modern",
    width: 500,
    height: 100,
});
        </script>
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div >
            <div class="form-inline col-md-9 container alert alert-success">
                <center><h2>Trang lập danh sách đề nghị cấp lại thẻ Đảng viên Bị hỏng</h2></center><br><br>
                <form method="post" action="in-danh-sach-cap-the-bi-hong">
                    <input type="hidden" name="maChiBo" value="{{Session::get("maChiBoTaiKhoan")}}">
                    Nơi nhận: 
                    <textarea class="form-control" name="noiNhan" id="elm2"></textarea>
                    <br>
                    Đợt ngày:
                    <input class="form-control" size="20" data-provide="datepicker" name="dotNgay" type="text" value="" required>
                    <input type="submit" value="Tạo" class="form-control">
                    <br><br>
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Đảng viên</th>
                                <th>Ngày sinh</th>
                                <th>Quê quán</th>
                                <th>Chi bộ</th>
                                <th> Chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            ?>
                            @foreach($listDangVien as $dangVien)
                            <tr>
                                <td>{{$count++;}}</td>
                                <td>{{$dangVien->HOTENSUDUNG}}</td>
                                <td>{{date("d-m-Y",strtotime($dangVien->NGAYSINH))}}</td>
                                <td>
                                    @foreach($listTinh as $tinh)
                                    @foreach($listHuyen as $huyen)
                                    @foreach($listXa as $xa)
                                    @if($huyen->MATT == $tinh->MATT && $xa->MAQH == $huyen->MAQH && $xa->MAPX == $dangVien->PHU_MAPX)
                                    {{$xa->TENPX.", ".$huyen->TENQH.", ".$tinh->TENTT}}
                                    @endif
                                    @endforeach
                                    @endforeach
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($listChiBo as $chiBo)
                                    @if($chiBo -> MACB == $dangVien->MACB)
                                    {{$chiBo->TENCB}}
                                    @endif
                                    @endforeach
                                </td>
                                <td><input type="checkbox" name="{{'chonDangVien'.$dangVien->MADANGVIEN}}"
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
            </div>

        </div>
    </body>
</html>

