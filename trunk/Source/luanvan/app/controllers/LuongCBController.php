<?php

class LuongCBController extends Controller{
    public function TrangLuongCB(){
        $list = LuongCB::all();
        return View::make('cap-nhat-danh-muc-luong-cb')->with('list', $list);
    }
        
    public function ThemLuongCB(){
               
        $sotien = Input::get("luong");
        $luong = new LuongCB();
        $luong -> LUONGCB = $sotien;
        $luong -> DAXOA = false;
        $luong -> save();
        
        return Redirect::to('cap-nhat-danh-muc-luong-cb');
         
    }
    
   
}
