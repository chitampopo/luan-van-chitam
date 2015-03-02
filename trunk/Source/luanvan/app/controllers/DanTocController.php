<?php

class DanTocController extends Controller{
    public function TrangDanToc(){
        $list = DanToc::all();
        return View::make('cap-nhat-danh-muc-dan-toc')->with('list', $list);
    }
    
    public function ThemDanToc(){
        $tendantoc = Input::get("tendantoc");

        $dantoc = new DanToc();
        $dantoc->TENDT = $tendantoc;
        $dantoc->save();

        return Redirect::to('cap-nhat-danh-muc-dan-toc');
    }
}
