<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đảng phí</title>
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
            <h2>Đảng phí</h2><br>
        </div>
        <div class="col-md-9 container">
            <table class="table" data-height="299">
                <thead>
                    <tr>
                        <th data-field="id" class="col-md-1">STT</th> 
                        <th data-field="id" class="col-md-2">Họ và tên</th> 
                        <th data-field="id" class="col-md-2">Chi bộ</th> 
                        <th data-field="id" class="col-md-1">Hệ số lương</th> 
                        <th data-field="id" class="col-md-1">Phụ cấp chức vụ</th> 
                        <th data-field="id" class="col-md-1">Phụ cấp thâm niên</th> 
                        <th data-field="id" class="col-md-1">Phụ cấp vượt khung</th> 
                        <th data-field="id" class="col-md-2">Tổng lương</th> 
                        <th data-field="id" class="col-md-1">Đảng phí</th> 
                    </tr>
                </thead>
                <?php $count = 1; 
                    $listChiBo = ChiBo::all();
                    $luongCoBan = LuongCB::orderBy("STTLUONGCB", "DESC")->first();
                ?>
                @foreach( $listDangVien as $dangVien )
                <tr>
                    <th data-field="id" >{{$count++;}}</th> 
                    <th data-field="id" >{{$dangVien->HOTENSUDUNG}}</th> 
                    <th data-field="id"  >
                        @foreach( $listChiBo as $chiBo )
                          @if ($chiBo->MACB == $dangVien->MACB)
                          {{$chiBo->TENCB}}
                          @endif
                        @endforeach
                        
                    </th> 
                    <th data-field="id" >{{number_format($dangVien->HSLUONG, 2)}}</th> 
                    <th data-field="id" >{{number_format($dangVien->HSCHUCVU ,2 )}}</th> 
                    <th data-field="id" >{{number_format($dangVien->HSTHAMNIEN, 2)}}</th> 
                    <th data-field="id" >{{number_format($dangVien->HSVUOTKHUNG, 2)}}</th> 
                    <th data-field="id" >
                        <?php
                        $luong = number_format($luongCoBan -> LUONGCB * ( $dangVien -> HSLUONG + $dangVien->HSCHUCVU ) * ( 1 + $dangVien->HSTHAMNIEN  + $dangVien->HSVUOTKHUNG) , 1 );
                        ?>
                        {{$luong;}}
                    </th> 
                    <th data-field="id" >
                         <?php
                        $dangPhi = ($luongCoBan -> LUONGCB * ( $dangVien -> HSLUONG + $dangVien->HSCHUCVU ) * ( 1 + $dangVien->HSTHAMNIEN  + $dangVien->HSVUOTKHUNG))*0.01;
                        ?>
                        {{number_format($dangPhi,1)}}</th> 
                </tr>
                @endforeach
            </table>
        </div>

        <script>
$('#button1').click(function () {
    window.location = "http://localhost/luanvan/index.php/ket-xuat-so-cong-van-den";
});
        </script>
    </body>
</html>
