<?php

class TaiKhoanController extends Controller{
    
    public function TrangDangNhap(){
        Session::forget('coDangNhap');
        Session::forget('loaiTaiKhoan');
        Session::forget('maChiBoTaiKhoan');
        return View::make('dang-nhap');
    }
    
    public function DangNhap(){
        $taiKhoan = Input::get("taiKhoan");
        $matKhau = Input::get("matKhau");
        if (TaiKhoan::check_login($taiKhoan, $matKhau) == TRUE) {
            Session::put('coDangNhap', 'true');
            if($taiKhoan == "admin"){
                Session::put('loaiTaiKhoan', 'Admin');
                Session::put('maChiBoTaiKhoan',"0");
            } else{
                Session::put('loaiTaiKhoan', 'Normal');
                $tk = TaiKhoan::where("TENTAIKHOAN","=",$taiKhoan)->first();
                Session::put('maChiBoTaiKhoan',$tk->MACB);
            }
            return View::make("trang-quan-tri");
        } else {
            return View::make('dang-nhap')->with('ThongBao', 
                    'Đăng nhập không thành công! Vui lòng làm lại<br>');
        }
    }
    
    public function DangXuat(){
        Session::forget('coDangNhap');
        Session::forget('loaiTaiKhoan');
        Session::forget('maChiBoTaiKhoan');
        //echo "Bạn đã đăng xuất";
        return Redirect::to("admin");
    }
}
