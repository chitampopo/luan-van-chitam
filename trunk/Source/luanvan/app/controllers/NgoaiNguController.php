<?php

class NgoaiNguController extends Controller{
    public function TrangNgoaiNgu(){
        $list = NgoaiNgu::all();
        return View::make('cap-nhat-danh-muc-ngoai-ngu')->with('list', $list);
    }
    
    public function ThemNgoaiNgu(){
        $ten = Input::get("ten");
        $ngoaingu = new NgoaiNgu();
        $ngoaingu -> TENNGOAINGU = $ten;
        $ngoaingu->save();

        return Redirect::to('cap-nhat-danh-muc-ngoai-ngu');
    }
}
