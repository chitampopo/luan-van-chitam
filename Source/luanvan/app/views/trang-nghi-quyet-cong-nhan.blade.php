<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Trang nghị quyết công nhận đảng viên chính thức</title>
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
        <script type="text/javascript">
        tinymce.init({
            selector: "textarea"
         });
        </script>
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="col-md-9">
            <div class="form-group col-md-12 container ">
                <form method="post" action="in-nghi-quyet-cong-nhan">
                    <input type="hidden" name="maChiBo" value="{{Session::get("maChiBoTaiKhoan")}}">
                    <div class="col-md-12 form-group form-inline alert alert-info">
                        <center><h2>Trang lập nghị quyết công nhận đảng viên chính thức</h2></center><br>
                        <div class="form-group">
                            <label>Cảm tình Đảng:&nbsp;&nbsp;&nbsp;</label>
                            <select name="maDangVien" class="form-control" style="width:300px">
                                @foreach( $listDangVien as $dangVien )
                                <option value="{{$dangVien->MADANGVIEN}}">{{$dangVien->HOTENSUDUNG}}</option>
                                @endforeach
                            </select><br><br>
                        </div><br>
                        
                        @if ( Session::get("maChiBoTaiKhoan") == "0" )
                        <label>Tổng số UVBCH:</label>
                        <input type="number" class="form-control" name="soUVBCH"/>
                        <label>Có mặt:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="number" class="form-control" name="soUVBCHCoMat"/>
                        <label>Vắng:&nbsp;&nbsp;</label>
                        <input type="number" class="form-control" name="soUVBCHVangMat"/><br><br>
                        <label>Lý do vắng mặt:</label>
                        <input type="text" class="form-control" name="lyDoVangUVBCH"  class="form-control" size="102"/>
                        <br><br>
                        @else
                        <label>Số Đảng viên: &nbsp;&nbsp;&nbsp;</label>
                        <input type="number" class="form-control" name="soDangVien"/>
                        <label>Chính thức:</label>
                        <input type="number" class="form-control" name="soChinhThuc"/>
                        <label>Dự bị:</label>
                        <input type="number" class="form-control" name="soDuBi"/>
                        <br><br>
                        <label>Có mặt:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="number" class="form-control" name="soCoMat"/>
                        <label>Chính thức:</label>
                        <input type="number" class="form-control" name="soCoMatChinhThuc"/>
                        <label>Dự bị:</label>
                        <input type="number" class="form-control" name="soCoMatDuBi"/><br><br>
                        <label>Vắng mặt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="number" class="form-control" name="soVangMat"/>
                        <label>Chính thức:</label>
                        <input type="number" class="form-control" name="soVangMatChinhThuc"/>
                        <label>Dự bị:</label>
                        <input type="number" class="form-control" name="soVangMatDuBi"/><br><br>
                        <label>Lý do vắng mặt:</label>
                        <input type="text" class="form-control" name="lyDoVangMat"  class="form-control" size="105"/><br><br>
                        @endif
                        <label>Chủ trì&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" class="form-control" name="chuTri" size="40" class="form-control"/>
                        <label>Chức vụ:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" class="form-control" name="chucVuChuTri"  size="39"  class="form-control"/><br><br>
                        <label>Thư ký:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" class="form-control" name="thuKy" size="103" class="form-control"/><br><br>
                        <label>Ưu khuyết điểm:</label><br>
                        <textarea name="noiDung" class="form-control" rows="4" cols="123"></textarea><br><br>
                        <label>Số tán thành:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="number" name="soTanThanh" class="form-control" style="width: 17em">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số không tán thành:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="number" name="soKhongTanThanh"  class="form-control" style="width: 17em"><br>
                        <label><br>Lý do không tán thành:</label><br>
                        <input type="text" class="form-control" name="lyDoKhongTanThanh" size="122"  class="form-control"/><br><br>
                        <label>Chức vụ người lập:</label>
                        <input type="text" name="chucVuNguoiLap"  class="form-control" size="35">
                        <label>Người lập:</label>
                        <input type="text" name="nguoiLap"  class="form-control" size="42"><br><Br>
                        <label>Nơi nhận:</label><br>
                        <textarea name="noiNhan" class="form-control" rows="4" cols="50"></textarea><br><br>
                        <div style="float:right">
                            <input type="submit" value="Tạo"  class="form-control">
                        </div>
                    </div>
            </div>
        </form>
    </div>

</div>
</body>
</html>

