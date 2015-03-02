<?php

class NgayController extends Controller{
    public function TrangNgay(){
        $list = Ngay::all();
        return View::make('cap-nhat-ngay')->with('list', $list);
    }
     
    public function check($ngay){
        $count = Ngay::where("NGAY","=",$ngay)->count();
        if($count==0){
            return false;
        } else{
            return true;
        }
    }
    
    public function ThemNgay(){
        $ten = Input::get("ngay");
        $tam = date("Y-m-d", strtotime($ten));
        $ngay = new Ngay();
        $ngay -> NGAY = $tam;
        $ngay->save();

        return Redirect::to('cap-nhat-ngay');
    }
}
