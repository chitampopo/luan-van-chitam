<?php

class PhuongXaController extends Controller{
    public function TrangDiaChi(){
        $list = PhuongXa::all();
        return View::make('cap-nhat-danh-muc-dia-chi')->with('list', $list);
    }
    
    
}
