<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật sổ công văn đến</title>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
    </head>
    <body>
        <div class="col-md-12">
            <br><br>
        </div>
        <div class="col-md-12">
            @include('header')
        </div>
        <div class="col-md-12">
            <br><br>
        </div>
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="col-md-9">
            <h2>Trang cập nhật sổ công văn đến</h2><br>
        </div>
        <form method="post" action="them-cong-van-di" class="form-group">
            <div class="form-group col-md-7 container">
                <div class="form-group">
                    Số công văn: <br>
                    <input type="text" name="soCongVan" class="form-control" required>
                    Tên công văn: <br>
                    <input type="text" name="tenCongVan" class="form-control" required>
                    Ngày gởi:<br>
                    <input type="text" name="ngayGoiCongVan" class="form-control" required>
                    Nơi gởi đến: <br>
                    <input type="text" name="noiGoiDi" class="form-control" required>
                    Người gởi:<br>
                    <input type="text" name="nguoiGoiCongVan" class="form-control" required>
                    Ghi chú: <br>
                    <input type="text" name="ghiChu" class="form-control"><br>
                </div>
            </div>
            <div class="col-md-2">
                <br>
                <input type="submit" class="form-control" value="Lưu">
                <br>
                <input type="button" id="button1" class="form-control" value="Kết xuất sổ">
            </div>
        </form>
        <div class="col-md-9 container">
            <table class="table" data-height="299">
                <thead>
                    <tr>
                        <th data-field="id">STT</th> 
                        <th data-field="id">Số CV</th> 
                        <th data-field="id">Tên CV</th> 
                        <th data-field="id">Ngày gởi</th> 
                        <th data-field="id">Nơi gởi đi</th> 
                        <th data-field="id">Người gởi</th> 
                        <th data-field="id">Ghi chú</th> 
                    </tr>
                </thead>
                <?php $count = 1; ?>
                @foreach( $listCongVan as $congVan )
                <tr>
                    <th data-field="id" class="col-md-1">{{$count++;}}</th> 
                    <th data-field="id" class="col-md-1">{{$congVan->SOCVDI}}</th> 
                    <th data-field="id"  class="col-md-3">{{$congVan->TENCVDI}}</th> 
                    <th data-field="id" class="col-md-2">{{date("d-m-Y", strtotime($congVan->NGAYGOI));}}</th> 
                    <th data-field="id" class="col-md-2">{{$congVan->NOIGOIDI}}</th> 
                    <th data-field="id" class="col-md-1">{{$congVan->NGUOIGOICV}}</th> 
                    <th data-field="id" class="col-md-2">{{$congVan->GHICHUCVDI}}</th> 
                </tr>
                @endforeach
            </table>
        </div>

        <script>
$('#button1').click(function () {
    window.location = "http://localhost/luanvan/index.php/ket-xuat-so-cong-van-di";
});
        </script>
    </body>
</html>
