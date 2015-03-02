<?php

class TrinhDoCTController extends Controller{
    public function TrangTrinhDoCT(){
        $list = TrinhDoCT::all();
        return View::make('cap-nhat-danh-muc-trinh-do-ct')->with('list', $list);
    }
    
    public function ThemTrinhDoCT(){
        $ten = Input::get("ten");
        $trinhdoct = new TrinhDoCT();
        $trinhdoct -> TENTRINHDOCT = $ten;
        $trinhdoct->save();

        return Redirect::to('cap-nhat-danh-muc-trinh-do-ct');
    }
}
