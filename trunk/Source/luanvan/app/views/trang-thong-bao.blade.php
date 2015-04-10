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
                <div class="list-group">
                    <a href="{{URL::to("/")."/trang-them-thong-bao"}}" class="list-group-item active">Thêm thông báo</a>
                    @foreach($listThongBao as $thongBao)
                    <a href="{{URL::to("/")."/xem-thong-bao/".$thongBao->STTTB}}" role="button" class="list-group-item">{{$thongBao->TENTB}}</a>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</body>
</html>

