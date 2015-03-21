<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <title>Đăng nhập vào hệ thống</title>
    </head>
    <body>
        <div class="col-sm-2"></div>
        <div class="form-group col-sm-6">
            <form class="form-horizontal" method="post" action="dang-nhap-action">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Tài khoản</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="taiKhoan" placeholder="Nhập tài khoản">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Mật khẩu</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="matKhau" placeholder="Nhập mật khẩu">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox"><center>
                            <label style="color: red">
                                {{$ThongBao or ''}}
                            </label></center>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Đăng nhập</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
