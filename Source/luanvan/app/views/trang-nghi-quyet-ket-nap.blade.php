<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Trang nghị quyết kết nạp</title>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script2.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script2.js')}}" type="text/javascript"></script>
        <!-- Tích hợp editor -->
        <script type="text/javascript" src="{{asset('vendor/tinymce/tinymce/tinymce.min.js')}}"></script>
        <script>
tinymce.init({
    selector: "textarea#elm1",
    theme: "modern",
    width: 800,
    height: 100,
    plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor"
    ],
    content_css: "css/content.css",
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
    style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
});
tinymce.init({
    selector: "textarea#elm2",
    theme: "modern",
    width: 600,
    height: 100,
    plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor"
    ],
    content_css: "css/content.css",
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
    style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
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
                <form method="post" action="in-nghi-quyet-ket-nap">
                    <input type="hidden" name="maChiBo" value="{{Session::get("maChiBoTaiKhoan")}}">
                    <div class="col-md-12 form-group form-inline alert alert-info">
                        <center><h2>Trang lập nghị quyết kết nạp cảm tình Đảng</h2></center><br>
                        <div class="form-group">
                            <label>Cảm tình Đảng:&nbsp;&nbsp;&nbsp;</label>
                            <select name="camTinhDang" class="form-control" style="width:300px">
                                @foreach( $listCamTinhDang as $camTinhDang )
                                <option value="{{$camTinhDang->STTCTD}}">{{$camTinhDang->HOVATEN}}</option>
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
                        <input type="text" class="form-control" name="lyDoVangMat"  class="form-control" size="102"/><br><br>
                        @endif
                        <label>Chủ trì&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" class="form-control" name="chuTri" size="40" class="form-control"/>
                        <label>Chức vụ:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" class="form-control" name="chucVuChuTri"  size="37"  class="form-control"/><br><br>
                        <label>Thư ký:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" class="form-control" name="thuKy" size="60" class="form-control"/><br><br>
                        <label>Ưu khuyết điểm:</label><br>
                        <textarea name="noiDung" class="form-control" id="elm1" rows="4" cols="123"></textarea><br><br>
                        <label>Số tán thành:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="number" name="soTanThanh" class="form-control" size="40">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số không tán thành:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="number" name="soKhongTanThanh"  class="form-control" size="35"><br>
                        <label><br>Lý do không tán thành:</label><br>
                        <input type="text" class="form-control" name="lyDoKhongTanThanh" size="122"  class="form-control"/><br><br>
                        <label>Chức vụ người lập:</label>
                        <input type="text" name="chucVuNguoiLap"  class="form-control" size="35">
                        <label>Người lập:</label>
                        <input type="text" name="nguoiLap"  class="form-control" size="40"><br><Br>
                        <label>Nơi nhận:</label><br>
                        <textarea name="noiNhan" id="elm2" class="form-control" rows="4" cols="50"></textarea><br><br>
                        <div style="float:right">
                            <input type="submit" value="Tạo"  class="form-control">
                        </div>
                    </div>
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

