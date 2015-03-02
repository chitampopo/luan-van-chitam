<?php

class NghiepVuController extends Controller{
    public function TrangNghiepVu(){
        $list = NghiepVu::all();
        return View::make('cap-nhat-danh-muc-nghiep-vu')->with('list', $list);
    }
    
    public function ThemNghiepVu(){
        $ten = Input::get("ten");
        $nghiepvu = new NghiepVu();
        $nghiepvu -> TENNV = $ten;
        $nghiepvu->save();

        return Redirect::to('cap-nhat-danh-muc-nghiep-vu');
    }
}
