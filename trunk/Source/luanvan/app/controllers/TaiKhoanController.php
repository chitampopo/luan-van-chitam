<?php

class TaiKhoanController extends Controller{
    
    public function TrangDangNhap(){
        return View::make('dang-nhap');
    }
    
    public function DangNhap(){
        $taiKhoan = Input::get("taiKhoan");
        $matKhau = Input::get("matKhau");
        if (TaiKhoan::check_login($taiKhoan, $matKhau) == TRUE) {
            return View::make("menu");
        } else {
            return View::make('dang-nhap')->with('ThongBao', 
                    'Đăng nhập không thành công! Vui lòng làm lại<br>');
        }
    }
}
