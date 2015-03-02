<?php

class TrinhDoVHController extends Controller{
    public function TrangTrinhDoVH(){
        $list = TrinhDoVH::all();
        return View::make('cap-nhat-danh-muc-trinh-do-vh')->with('list', $list);
    }
    
    public function ThemTrinhDoVH(){
        $ten = Input::get("ten");
        $trinhdovh = new TrinhDoVH();
        $trinhdovh -> TENTRINHDOVH = $ten;
        $trinhdovh->save();

        return Redirect::to('cap-nhat-danh-muc-trinh-do-vh');
    }
}
