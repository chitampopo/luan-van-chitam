<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Trang thêm thông báo</title>
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
    selector: "textarea", theme: "modern", width: 800, height: 300,
    plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
        "table contextmenu directionality emoticons paste textcolor responsivefilemanager"
    ],
    toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
    toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
    image_advtab: true,
    relative_urls: false,
    //external_filemanager_path: {{asset('filemanager')}},
    filemanager_title: "Filemanager",
    //external_plugins: {"filemanager": {{asset('filemanager/plugin.min.js')}} }
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
                <form method="post" action="luu-thong-bao">
                    <input type="hidden" name="maChiBo" value="{{Session::get("maChiBoTaiKhoan")}}">
                    <div class="col-md-12 form-group form-inline alert alert-success">
                        <center><h2>Trang thêm thông báo</h2></center><br>
                        <label>Tên thông báo:</label><br>
                        <input type="text" name="tenThongBao" class="form-control" size="100"><br><br>
                        <label>Nội dung thông báo:</label><br>
                        <textarea name="noiDung" id="elm2" class="form-control" rows="10" cols="123"></textarea><br><br>
                        <div style="float:right">
                            <input type="submit" value="Tạo" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script>


    </script>
</body>
</html>

