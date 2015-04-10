<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Trang lập quyết định Đảng ủy</title>
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
    height: 150,
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
                <form method="post" action="in-quyet-dinh">
                    <input type="hidden" name="maChiBo" value="{{Session::get("maChiBoTaiKhoan")}}">
                    <div class="col-md-12 form-group form-inline alert alert-success">
                        <center><h2>Trang lập quyết định Đảng ủy</h2></center><br>
                        <label>Tên quyết định:</label><br>
                        <textarea name="tenQuyetDinh" class="form-control" id="elm1" rows="4" cols="123"></textarea><br><br>
                        <label>Căn cứ vào:</label><br>
                        <textarea name="canCu" class="form-control" id="elm1" rows="4" cols="123"></textarea><br><br>
                        <label>Các điều quyết định:</label><br>
                        <textarea name="cacQuyetDinh" class="form-control" id="elm1" rows="4" cols="123"></textarea><br><br>
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

