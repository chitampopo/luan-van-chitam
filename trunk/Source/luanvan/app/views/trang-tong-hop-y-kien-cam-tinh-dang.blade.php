<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang tổng hợp ý kiến đánh giá cảm tình Đảng</title>
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
            <h2>Trang tổng hợp ý kiến đánh giá cảm tình Đảng</h2><br>
        </div>
        <div class="col-md-8">
            <div class="form-group col-md-9 container ">
                <form method="post" action="in-phieu-tong-hop-y-kien-cam-tinh-dang">
                    <input type="hidden" name="maChiBo" value="{{Session::get("maChiBoTaiKhoan")}}">
                    <div class="col-md-12">
                        <label>Cảm tình Đảng:</label><br>
                        <select name="camTinhDang" class="form-control">
                            @foreach( $listCamTinhDang as $camTinhDang )
                            <option value="{{$camTinhDang->STTCTD}}">{{$camTinhDang->HOVATEN}}</option>
                            @endforeach
                        </select><br>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6 form-inline">
                            <label>Tên tổ chức làm việc:</label>
                            <input type="text" class="form-control col-md-6" name="noiLamViec"/>
                            <label>Tên tổ chức nơi cư trú:</label>
                            <input type="text" class="form-control" name="noiCuTru"/>
                        </div>
                        <div class="col-md-6 form-inline">
                            <label>có:</label><br>
                            <input type="text" class="form-control" name="soLuongNoiLamViec" placeholder="số lượng đồng chí"/><br>
                            <label>có:</label><br>
                            <input type="text" class="form-control" name="soLuongNoiCuTru"  placeholder="số lượng đồng chí"/>
                        </div>
                    </div>
                    Nội dung:<br>
                    <textarea name="noiDung" class="form-control">
                        
                    </textarea>
                    <div class="col-xs-6"> 
                        <label>Số tán thành:</label><br>
                        <input type="number" name="soTanThanh" class="form-control">
                    </div>
                    <div class="col-xs-6"> 
                        <label>Số không tán thành:</label><br>
                        <input type="number" name="soKhongTanThanh"  class="form-control">
                    </div>
                    <label><br>Lý do không tán thành:</label><br>
                    <input type="text" class="form-control" name="lyDoKhongTanThanh"  class="form-control"/><br>
                    <div class="col-md-6"> 
                        <label>Chức vụ người lập:</label><br>
                        <input type="text" name="chucVuNguoiLap"  class="form-control">
                    </div>
                    <div class="col-md-6"> 
                        <label>Người lập:</label><br>
                        <input type="text" name="nguoiLap"  class="form-control">
                    </div>
                    <div class="col-md-3"> 
                        <br><input type="submit" value="Tạo"  class="form-control">
                    </div>

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
