<div class="col-md-12">
    <br>
</div>

<div class="col-md-12" style="background-image: url({{asset('public/images/header.png')}}); width: 99%; height: 150px; margin-left: 12px">
    <div style="float:right">
        <div style="float: right">
            <?php
            if (Session::get("maChiBoTaiKhoan") == "0") {
                $tenChiBo = "Đảng bộ";
            } else {
                $chiBo = ChiBo::where("MACB", "=", Session::get("maChiBoTaiKhoan"))->first();
                $tenChiBo = $chiBo->TENCB;
            }
            ?>
            <span class="label label-warning">Xin chào Admin {{$tenChiBo}}</span>
            <span class="label label-warning"><a href="http://localhost/luanvan/dang-xuat">Đăng xuất</a></span><br>
        </div><br><br>
        
    </div>
</div>
<div class="col-md-12">
    <br>
</div>