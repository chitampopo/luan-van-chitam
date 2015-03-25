<div class="col-md-12">
    <br><br>
</div>
<div class="col-md-12" style="background-image: url({{asset('public/images/header.png')}}); width: 1150px; height: 150px; margin-left: 30px">
    <div style="float:right">
        <?php
        if(Session::get("maChiBoTaiKhoan")=="0"){
            $tenChiBo = "Đảng bộ";
        } else{
            $chiBo = ChiBo::where("MACB","=",Session::get("maChiBoTaiKhoan"))->first();
            $tenChiBo = $chiBo->TENCB;
        }
        ?>
        <span class="label label-warning">Xin chào Admin {{$tenChiBo}}</span>
    <span class="label label-warning"><a href="http://localhost/luanvan/dang-xuat">Đăng xuất</a></span>
    </div>
</div>
<div class="col-md-12">
    <br><br>
</div>