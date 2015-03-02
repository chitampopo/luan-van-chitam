<?php

class HinhThucKLController extends Controller{
    public function TrangHinhThucKL(){
        $list = HinhThucKL::all();
        return View::make('cap-nhat-danh-muc-hinh-thuc-kl')->with('list', $list);
    }
    
    public function ThemHinhThucKL(){
        $ten = Input::get("ten");
        $htkl = new HinhThucKL();
        $htkl -> TENHTKL = $ten;
        $htkl->save();

        return Redirect::to('cap-nhat-danh-muc-hinh-thuc-kl');
    }
}

