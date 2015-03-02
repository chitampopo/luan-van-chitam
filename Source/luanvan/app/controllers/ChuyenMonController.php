<?php
class ChuyenMonController extends Controller{
    
    public function TrangChuyenMon(){
        $listChuyenMon = ChuyenMon::all();
        return View::make('cap-nhat-danh-muc-chuyen-mon')->with('listChuyenMon', $listChuyenMon);
    }
    
    public function ThemChuyenMon(){
        $tenchuyenmon = Input::get("tenchuyenmon");
        $chuyenmon = new ChuyenMon();
        $chuyenmon -> TENCM = $tenchuyenmon;
        $chuyenmon->save();
        return Redirect::to('cap-nhat-danh-muc-chuyen-mon');
    }
}


