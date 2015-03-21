<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật danh mục chi bộ</title>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery.validate.min')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div >
            <div class="col-md-9 container alert alert-success" style="padding: 0 30px 0 30px">
                <center><h2>Danh sách Đảng viên</h2></center><br>
                <form action="danh-sach-dang-vien" method="post" class="form-group">
                    <div class="col-md-3">
                        <select name="maChiBo" class="form-control" id="maChiBo">
                            <option value="0">Toàn Đảng bộ</option>
                            @foreach( $listChiBo as $chiBo )
                            <option value="{{$chiBo->MACB}}" class="form-control"
                                    <?php
                                        if( $maChiBoChon == $chiBo->MACB )
                                            echo "selected";
                                    ?>
                                    >{{$chiBo->TENCB}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-9">
                        <input class="btn btn-default"  type="submit" value="Liệt kê">
                        <input class="btn btn-default"  type="button" id="button1" value="Tạo sổ Đảng tịch">
                        <input class="btn btn-default"  type="button" id="button2" value="Tạo danh sách Đảng viên">
                        <input class="btn btn-default"  type="button" id="button3" value="Thêm Đảng viên">
                    </div>
                </form>
                <br><br>
            <table class="table col-md-8">
                <thead>
                    <tr>
                        <th data-field="id">Tên Đảng viên</th> 
                        <th data-field="id">Giới tính</th> 
                        <th data-field="id">Ngày sinh</th> 
                        <th data-field="id">Chi bộ</th> 
                    </tr>
                </thead>
                @foreach ($listDangVien as $item)
                <tr>
                    <th data-field="id"><a href="{{URL()."/trang-chinh-sua-dang-vien/".$item->MADANGVIEN }}" target="_blank"> {{ $item->HOTENSUDUNG }} </a></th> 
                    <th data-field="id">@if ($item->GIOITINH == "1") {{"Nam" }} @else {{"Nữ"}} @endif</th> 
                    <th data-field="id">{{ date("d-m-Y", strtotime($item->NGAYSINH)) }}</th> 
                    <th data-field="id">
                        @foreach( $listChiBo as $chiBo )
                            @foreach( $listLyLich as $lyLich )
                                @if ( ($lyLich-> MACB == $chiBo->MACB ) && ( $lyLich->MADANGVIEN == $item->MADANGVIEN ) )
                                {{ $chiBo -> TENCB }}
                                @endif
                            @endforeach
                        @endforeach
                    </th> 
                </tr>
                @endforeach
            </table>
            <?php echo $listDangVien->links(); ?>
            
        </div>
        </div>
        <script>
            var value = $('#maChiBo').val()
            $('#button3').click(function() {
                window.location = "http://localhost/luanvan/index.php/cap-nhat-dang-vien";
            });
            $('#button1').click(function() {
                window.open("http://localhost/luanvan/index.php/in-so-dang-tich/" + value, '_blank')
            });
            $('#button2').click(function() {
                window.open("http://localhost/luanvan/index.php/danh-sach-dang-vien-pdf/" + value, '_blank');
                //$(this).attr("http://localhost/luanvan/index.php/in-danh-sach-dang-vien/" + value, '_blank');
                //window.open(link.attr('href'));
            });
        </script>
    </body>
</html>
