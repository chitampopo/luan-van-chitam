<?php

class DangPhiController extends Controller{
    
    public function TrangDangPhi(){
        $listDangVien = DB::table('dangvien')
                    ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
                    ->where("dangvien.XOA", "=", "0")
                    ->get();
        return View::make('trang-dang-phi')->with('listDangVien', $listDangVien);
    }
    
}
