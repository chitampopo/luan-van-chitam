<?php

class NhiemKyController extends Controller{
    public function TrangNhiemKy(){
        $list = NhiemKy::all();
        return View::make('cap-nhat-danh-muc-nhiem-ky')->with('list', $list);
    }
    
    public function ThemNhiemKy(){
        $tunam = Input::get("tunam");
        $dennam = Input::get("dennan");
        $nhiemky = new NhiemKy();
        $nhiemky -> TUNAM = $tunam;
        $nhiemky -> DENNAM = $dennam;
        $nhiemky->save();

        return Redirect::to('cap-nhat-danh-muc-nhiem-ky');
    }
}
