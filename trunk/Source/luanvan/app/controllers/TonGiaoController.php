<?php

class TonGiaoController extends Controller{
    public function TrangTonGiao(){
        $list = TonGiao::all();
        return View::make('cap-nhat-danh-muc-ton-giao')->with('list', $list);
    }
    
    public function ThemTonGiao(){
        $ten = Input::get("ten");
        $ngoaingu = new TonGiao();
        $ngoaingu -> TENTONGIAO = $ten;
        $ngoaingu->save();

        return Redirect::to('cap-nhat-danh-muc-ton-giao');
    }
}
