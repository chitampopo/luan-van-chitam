<?php

class HocHamController extends Controller{
    public function TrangHocHam(){
        $list = HocHam::all();
        return View::make('cap-nhat-danh-muc-hoc-ham')->with('list', $list);
    }
    
    public function ThemHocHam(){
        $ten = Input::get("tenhocham");
        $hocham = new HocHam();
        $hocham -> TENHOCHAM = $ten;
        $hocham->save();

        return Redirect::to('cap-nhat-danh-muc-hoc-ham');
    }
}

