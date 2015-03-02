<?php

class ChiBoController extends Controller{
    
    public function TrangChiBo(){
        $listChiBo = ChiBo::all();
        return View::make('cap-nhat-danh-muc-chi-bo')->with('listChiBo', $listChiBo);
    }
    
    public function ThemChiBo(){
        $tenchibo = Input::get("tenchibo");
        $tentaikhoan = Input::get("tentaikhoan");
        $matkhau = Input::get("matkhau");

        $taikhoan = new TaiKhoan();
        $taikhoan->TENTAIKHOAN = $tentaikhoan;
        $taikhoan->MATKHAU = $matkhau;
        $taikhoan->save();

        $chibo = new ChiBo();
        $chibo->TENCB = $tenchibo;
        $chibo->save();

        $chibo1 = ChiBo::where('TENCB', '=', $tenchibo)->firstOrFail();
        TaiKhoan::where('TENTAIKHOAN', '=', $tentaikhoan)->update(array('MACB' => $chibo1->MACB));

        return Redirect::to('cap-nhat-danh-muc-chi-bo');
    }
}
