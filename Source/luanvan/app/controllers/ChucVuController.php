<?php

class ChucVuController extends Controller{
    public function TrangChucVu(){
        $listChucVu = ChucVu::all();
        return View::make('cap-nhat-danh-muc-chuc-vu')->with('listChucVu', $listChucVu);
    }
    
    public function ThemChucVu(){
        $tenchucvu = Input::get("tenchucvu");
        $chucvu = new ChucVu();
        $chucvu -> TENCV = $tenchucvu;
        $chucvu->save();

        return Redirect::to('cap-nhat-danh-muc-chuc-vu');
    }
}

