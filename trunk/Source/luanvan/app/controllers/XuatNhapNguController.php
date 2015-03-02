<?php

class XuatNhapNguController extends Controller{
    public function TrangXuatNhapNgu(){
        $list = XuatNhapNgu::all();
        return View::make('cap-nhat-xuat-nhap-ngu')->with('list', $list);
    }
    
    public function ThemXuatNhapNgu($maDangVien){
        $ngaynhapngu = Input::get("ngaynhapngu");
        $ngayxuatngu = Input::get("ngayxuatngu");
        $xuatnhapngu = new XuatNhapNgu();
        $xuatnhapngu -> NGAYNHAPNGU = $ngaynhapngu;
        $xuatnhapngu -> NGAYXUATNGU = $ngayxuatngu;
        $xuatnhapngu -> MADANGVIEN = $maDangVien;
        $xuatnhapngu->save();
    }
}
