<?php

class TheDangVienController extends Controller {

    public function TrangCapTheMoi() {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN not in (select MADANGVIEN from thedv)");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN not in (select MADANGVIEN from thedv)");
        }
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listChiBo = ChiBo::all();
        return View::make("trang-cap-the")
                        ->with("listDangVien", $listDangVien)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo);
    }

    public function LapDanhSachCapTheMoi(){
        $listChiBo = ChiBo::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $noiNhan = Input::get("noiNhan");
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        $dotCap = Input::get("dotNgay");
        
        $doiCapThe = new DanhSachCapTheDang();
        $doiCapThe-> LOAICAPTHE = 1;
        $doiCapThe-> DOTCAPTHE = date("Y-m-d",strtotime($dotCap));
        if (DanhSachCapTheDang::where("DOTCAPTHE", "=", $doiCapThe-> DOTCAPTHE)->where("LOAICAPTHE","=",1)->count() == 0) {
            $doiCapThe->save();
        }
        
        $newDotCapThe = DanhSachCapTheDang::where("DOTCAPTHE", "=", $doiCapThe-> DOTCAPTHE)->where("LOAICAPTHE","=",1)->first();
        if ($maChiBo == "0") {
            $listDangVienMoi = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN not in (select MADANGVIEN from thedv)");
        } else {
            $listDangVienMoi = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo." and dangvien.MADANGVIEN not in (select MADANGVIEN from thedv)");
        }


        foreach ($listDangVienMoi as $dangVien) {
            if (Input::has('chonDangVien' . $dangVien->MADANGVIEN)) {
                $capTheDang = new CapTheDang();
                $capTheDang->MADANGVIEN = $dangVien->MADANGVIEN;
                $capTheDang->STTCAPTHE = $newDotCapThe->STTCAPTHE;
                if(CapTheDang::where("MADANGVIEN","=",$dangVien->MADANGVIEN)->where("STTCAPTHE","=",$newDotCapThe->STTCAPTHE)->count()==0){
                    $capTheDang->save();
                }
            }
        }
        //return Redirect::to("trang-lap-danh-sach-boi-duong-dvm");
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-danh-sach-cap-the-dang-moi")
                        ->with("listDangVienMoi", $listDangVienMoi)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("doiNgay", date("d-m-Y", strtotime($doiCapThe-> DOTCAPTHE)))
                        ->with("dotCapThe", $doiCapThe-> DOTCAPTHE)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("noiNhan",$noiNhan)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }
    
    public function TrangCapTheLaiBiMat(){
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN  = thedv.MADANGVIEN");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN = thedv.MADANGVIEN");
        }
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listChiBo = ChiBo::all();
        return View::make("trang-cap-the-bi-mat")
                        ->with("listDangVien", $listDangVien)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo);
    }
    
    public function LapDanhSachCapTheBiMat(){
        $listChiBo = ChiBo::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $noiNhan = Input::get("noiNhan");
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        $dotCap = Input::get("dotNgay");
        
        $doiCapThe = new DanhSachCapTheDang();
        $doiCapThe-> LOAICAPTHE = 2;
        $doiCapThe-> DOTCAPTHE = date("Y-m-d",strtotime($dotCap));
        if (DanhSachCapTheDang::where("DOTCAPTHE", "=", $doiCapThe-> DOTCAPTHE)->where("LOAICAPTHE","=",2)->count() == 0) {
            $doiCapThe->save();
        }
        
        $newDotCapThe = DanhSachCapTheDang::where("DOTCAPTHE", "=", $doiCapThe-> DOTCAPTHE)->where("LOAICAPTHE","=",2)->first();
        if ($maChiBo == "0") {
            $listDangVienMoi = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = thedv.MADANGVIEN");
        } else {
            $listDangVienMoi = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo." and dangvien.MADANGVIEN = thedv.MADANGVIEN");
        }


        foreach ($listDangVienMoi as $dangVien) {
            if (Input::has('chonDangVien' . $dangVien->MADANGVIEN)) {
                $capTheDang = new CapTheDang();
                $capTheDang->MADANGVIEN = $dangVien->MADANGVIEN;
                $capTheDang->STTCAPTHE = $newDotCapThe->STTCAPTHE;
                if(CapTheDang::where("MADANGVIEN","=",$dangVien->MADANGVIEN)->where("STTCAPTHE","=",$newDotCapThe->STTCAPTHE)->count()==0){
                    $capTheDang->save();
                }
            }
        }
        
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv, dscapthedang, capthedang where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and capthedang.MADANGVIEN = dangvien.MADANGVIEN and capthedang.STTCAPTHE = dscapthedang.STTCAPTHE and dscapthedang.LOAICAPTHE = 2 and dscapthedang.DOTCAPTHE = ".date("Y-m-d",strtotime($dotCap)));
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo." and capthedang.MADANGVIEN = dangvien.MADANGVIEN and capthedang.STTCAPTHE = dscapthedang.STTCAPTHE and dscapthedang.LOAICAPTHE = 2 and dscapthedang.DOTCAPTHE = ".date("Y-m-d",strtotime($dotCap)));
        }
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-danh-sach-cap-the-dang-bi-mat")
                        ->with("listDangVienMoi", $listDangVienMoi)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("doiNgay", date("d-m-Y", strtotime($doiCapThe-> DOTCAPTHE)))
                        ->with("dotCapThe", $doiCapThe-> DOTCAPTHE)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("noiNhan",$noiNhan)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }
    
    public function TrangCapTheLaiBiHong(){
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN  = thedv.MADANGVIEN");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN = thedv.MADANGVIEN");
        }
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listChiBo = ChiBo::all();
        return View::make("trang-cap-the-bi-hong")
                        ->with("listDangVien", $listDangVien)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo);
    }
    
    public function LapDanhSachCapTheBiHong(){
        $listChiBo = ChiBo::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $noiNhan = Input::get("noiNhan");
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        $dotCap = Input::get("dotNgay");
        
        $doiCapThe = new DanhSachCapTheDang();
        $doiCapThe-> LOAICAPTHE = 3;
        $doiCapThe-> DOTCAPTHE = date("Y-m-d",strtotime($dotCap));
        if (DanhSachCapTheDang::where("DOTCAPTHE", "=", $doiCapThe-> DOTCAPTHE)->where("LOAICAPTHE","=",3)->count() == 0) {
            $doiCapThe->save();
        }
        
        $newDotCapThe = DanhSachCapTheDang::where("DOTCAPTHE", "=", $doiCapThe-> DOTCAPTHE)->where("LOAICAPTHE","=",3)->first();
        if ($maChiBo == "0") {
            $listDangVienMoi = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = thedv.MADANGVIEN");
        } else {
            $listDangVienMoi = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo." and dangvien.MADANGVIEN = thedv.MADANGVIEN");
        }


        foreach ($listDangVienMoi as $dangVien) {
            if (Input::has('chonDangVien' . $dangVien->MADANGVIEN)) {
                $capTheDang = new CapTheDang();
                $capTheDang->MADANGVIEN = $dangVien->MADANGVIEN;
                $capTheDang->STTCAPTHE = $newDotCapThe->STTCAPTHE;
                if(CapTheDang::where("MADANGVIEN","=",$dangVien->MADANGVIEN)->where("STTCAPTHE","=",$newDotCapThe->STTCAPTHE)->count()==0){
                    $capTheDang->save();
                }
            }
        }
        
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv, dscapthedang, capthedang where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and capthedang.MADANGVIEN = dangvien.MADANGVIEN and capthedang.STTCAPTHE = dscapthedang.STTCAPTHE and dscapthedang.LOAICAPTHE = 3 and dscapthedang.DOTCAPTHE = ".date("Y-m-d",strtotime($dotCap)));
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo." and capthedang.MADANGVIEN = dangvien.MADANGVIEN and capthedang.STTCAPTHE = dscapthedang.STTCAPTHE and dscapthedang.LOAICAPTHE = 3 and dscapthedang.DOTCAPTHE = ".date("Y-m-d",strtotime($dotCap)));
        }
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-danh-sach-cap-the-dang-bi-hong")
                        ->with("listDangVienMoi", $listDangVienMoi)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("doiNgay", date("d-m-Y", strtotime($doiCapThe-> DOTCAPTHE)))
                        ->with("dotCapThe", $doiCapThe-> DOTCAPTHE)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("noiNhan",$noiNhan)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }
}
