<?php

class HinhThucKTController extends Controller{
    public function TrangHinhThucKT(){
        $list = HinhThucKT::all();
        return View::make('cap-nhat-danh-muc-hinh-thuc-kt')->with('list', $list);
    }
    
    public function ThemHinhThucKT(){
        $ten = Input::get("ten");
        $htkt = new HinhThucKT();
        $htkt -> TENHTKt = $ten;
        $htkt->save();

        return Redirect::to('cap-nhat-danh-muc-hinh-thuc-kt');
    }
}

