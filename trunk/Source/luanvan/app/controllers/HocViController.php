<?php

class HocViController extends Controller{
    public function TrangHocVi(){
        $list = HocVi::all();
        return View::make('cap-nhat-danh-muc-hoc-vi')->with('list', $list);
    }
    
    public function ThemHocVi(){
        $ten = Input::get("tenhocvi");
        $hocvi = new HocVi();
        $hocvi -> TENHOCVI = $ten;
        $hocvi->save();

        return Redirect::to('cap-nhat-danh-muc-hoc-vi');
    }
}
