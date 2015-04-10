<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Trang tổng hợp ý kiến đánh giá Đảng viên mới</title>
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
            selector: "textarea",
            width: 660
         });
        </script>
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="form-inline col-md-9 container alert alert-info">
            <center><h2>Trang tổng hợp ý kiến đánh giá Đảng viên mới</h2><br></center>
            <form method="post" action="in-phieu-tong-hop-y-kien-dang-vien-moi"style="padding-left: 100px">
                <input type="hidden" name="maChiBo" value="{{Session::get("maChiBoTaiKhoan")}}">
                <label>Cảm tình Đảng:</label>
                <select name="dangVienMoi" class="form-control">
                    @foreach( $listDangVienMoi as $dangVienMoi )
                    <option value="{{$dangVienMoi->MADANGVIEN}}">{{$dangVienMoi->HOTENSUDUNG}}</option>
                    @endforeach
                </select><br><br>

                <label>Tên tổ chức làm việc:&nbsp;&nbsp;&nbsp;</label>
                <input type="text" class="form-control" name="noiLamViec"/>
                <label>có:</label>
                <input type="text" class="form-control" name="soLuongNoiLamViec" placeholder="số lượng đồng chí"/><br><br>
                <label>Tên tổ chức nơi cư trú:</label>
                <input type="text" class="form-control" name="noiCuTru"/>
                <label>có:</label>
                <input type="text" class="form-control" name="soLuongNoiCuTru"  placeholder="số lượng đồng chí"/><br><br>
                <label>Nội dung:</label><br>
                <textarea name="noiDung" class="form-control"></textarea><br>
                <label>Số tán thành:</label>
                <input type="number" name="soTanThanh" style="width: 10em" class="form-control">
                <label>Số không tán thành:</label>
                <input type="number" name="soKhongTanThanh" style="width: 10em" class="form-control"><br><br>
                <label>Lý do không tán thành:</label><br>
                <input type="text" class="form-control" name="lyDoKhongTanThanh"  size="80" class="form-control"/><br>
                <label>Chức vụ người lập:</label><br>
                <input type="text" name="chucVuNguoiLap" size="80"  class="form-control"><br>
                <label>Người lập:</label><br>
                <input type="text" name="nguoiLap" size="80"  class="form-control">
                <br><input type="submit" value="Tạo"  class="form-control">

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

