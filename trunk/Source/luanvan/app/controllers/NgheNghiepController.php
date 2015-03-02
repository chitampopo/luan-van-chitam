<?php

class NgheNghiepController extends Controller{
    public function TrangNgheNghiep(){
        $list = NgheNghiep::all();
        return View::make('cap-nhat-danh-muc-nghe-nghiep')->with('list', $list);
    }
    
    public function ThemNgheNghiep(){
        $ten = Input::get("tennghenghiep");
        $nghenghiep = new NgheNghiep();
        $nghenghiep -> TENNN = $ten;
        $nghenghiep->save();

        return Redirect::to('cap-nhat-danh-muc-nghe-nghiep');
    }
}
