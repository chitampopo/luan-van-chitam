<?php

class HuyHieuDangController extends Controller {
    
    public function TrangCapHuyHieuDang(){
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN not in (select MADANGVIEN from huyhieudang)");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN not in (select MADANGVIEN from huyhieudang)");
        }
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listChiBo = ChiBo::all();
        return View::make("trang-cap-huy-hieu-dang")
                        ->with("listDangVien", $listDangVien)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo);
    }
    
    public function LapDanhSachCapHuyHieuDang(){
        $listChiBo = ChiBo::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $noiNhan = Input::get("noiNhan");
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        $dotCap = Input::get("dotNgay");
        $maHuyHieuDang = Input::get("maLoaiHuyHieu");
        if($maHuyHieuDang == 1){
            $tenHHD = "30 năm tuổi Đảng";
        } else if( $maHuyHieuDang == 2 ){
            $tenHHD = "40 năm tuổi Đảng";
        } else{
            $tenHHD = "50 năm tuổi Đảng";
        }
        $dotCapHHD = new DSCapHHD();
        $dotCapHHD-> LOAICAPHHD = $maHuyHieuDang;
        $dotCapHHD-> DOTCAPHHD = date("Y-m-d",strtotime($dotCap));
        if (DSCapHHD::where("DOTCAPHHD", "=", $dotCapHHD-> DOTCAPHHD)->where("LOAICAPHHD","=",$maHuyHieuDang)->count() == 0) {
            $dotCapHHD->save();
        }
        
        $newDotCapHHD = DSCapHHD::where("DOTCAPHHD", "=", $dotCapHHD-> DOTCAPHHD)->where("LOAICAPHHD","=",$maHuyHieuDang)->first();
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN not in (select MADANGVIEN from huyhieudang)");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo." and dangvien.MADANGVIEN not in (select MADANGVIEN from huyhieudang)");
        }


        foreach ($listDangVien as $dangVien) {
            if (Input::has('chonDangVien' . $dangVien->MADANGVIEN)) {
                $capHuyHieuDang = new CapHHD();
                $capHuyHieuDang->MADANGVIEN = $dangVien->MADANGVIEN;
                $capHuyHieuDang->STTCAPHHD = $newDotCapHHD->STTCAPHHD;
                if(CapHHD::where("MADANGVIEN","=",$dangVien->MADANGVIEN)->where("STTCAPHHD","=",$newDotCapHHD->STTCAPHHD)->count()==0){
                    $capHuyHieuDang->save();
                }
            }
        }
        if ($maChiBo == "0") {
            $listDV = DB::select("select * from dangvien, lylich, caphhd, dscaphhd where dangvien.MADANGVIEN = caphhd.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = lylich.MADANGVIEN and dscaphhd.STTCAPHHD = caphhd.STTCAPHHD and dscaphhd.LOAICAPHHD = ". $dotCapHHD-> LOAICAPHHD." and dscaphhd.DOTCAPHHD = '".$dotCapHHD->DOTCAPHHD."'");
        } else {
            $listDV = DB::select("select * from dangvien, lylich, dscaphhd, caphhd where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo." and caphhd.MADANGVIEN = dangvien.MADANGVIEN and caphhd.STTCAPHHD = dscaphhd.STTCAPHHD and dscaphhd.LOAICAPHHD = ". $dotCapHHD-> LOAICAPHHD." and dscaphhd.DOTCAPHHD = '".$dotCapHHD->DOTCAPHHD."'");
        }
        //return Redirect::to("trang-lap-danh-sach-boi-duong-dvm");
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-danh-sach-cap-huy-hieu-dang")
                        ->with("listDangVien", $listDV)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("doiNgay", date("d-m-Y", strtotime($dotCapHHD-> DOTCAPHHD)))
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("noiNhan",$noiNhan)
                        ->with("tenHHD", $tenHHD)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }
    
    public function TrangCapLaiHuyHieuDang(){
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich, huyhieudang where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = huyhieudang.MADANGVIEN and huyhieudang.TENHH = '30 năm tuổi đảng'");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich, huyhieudang where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN = huyhieudang.MADANGVIEN  and huyhieudang.TENHH = '30 năm tuổi đảng'");
        }
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listChiBo = ChiBo::all();
        
        return View::make("trang-cap-lai-huy-hieu-dang")
                        ->with("listDangVien", $listDangVien)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("maLoaiHH", 1);
    }
    
    public function LocTrangCapLaiHuyHieuDang(){
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $maHuyHieuDang = Input::get("maLoaiHuyHieu");
        
        if($maHuyHieuDang == 1){
            $tenHH = "30 năm tuổi đảng";
        } else if($maHuyHieuDang == 2){
            $tenHH = "40 năm tuổi đảng";
        } else{
            $tenHH = "50 năm tuổi đảng";
        }
        
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich, huyhieudang where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = huyhieudang.MADANGVIEN and huyhieudang.TENHH = '".$tenHH."'");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich, huyhieudang where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN = huyhieudang.MADANGVIEN and huyhieudang.TENHH = '".$tenHH."'");
        }
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listChiBo = ChiBo::all();
        return View::make("trang-cap-lai-huy-hieu-dang")
                        ->with("listDangVien", $listDangVien)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("maLoaiHH", $maHuyHieuDang);
    }
    public function LapDanhSachCapLaiHuyHieuDang(){
        $listChiBo = ChiBo::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $noiNhan = Input::get("noiNhan");
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        $dotCap = Input::get("dotNgay");
        $maHuyHieuDang = Input::get("maLoaiHuyHieu");
        if($maHuyHieuDang == 1){
            $tenHHD = "30 năm tuổi đảng";
        } else if( $maHuyHieuDang == 2 ){
            $tenHHD = "40 năm tuổi đảng";
        } else{
            $tenHHD = "50 năm tuổi đảng";
        }
        $dotCapHHD = new DSCapHHD();
        $dotCapHHD-> LOAICAPHHD = $maHuyHieuDang;
        $dotCapHHD-> DOTCAPHHD = date("Y-m-d",strtotime($dotCap));
        $dotCapHHD-> CAPLAI = 1;
        if (DSCapHHD::where("DOTCAPHHD", "=", $dotCapHHD->DOTCAPHHD)->where("LOAICAPHHD","=",$maHuyHieuDang)->where("CAPLAI","=",1)->count() == 0) {
            $dotCapHHD->save();
        }
        
        $newDotCapHHD = DSCapHHD::where("DOTCAPHHD", "=", $dotCapHHD->DOTCAPHHD)->where("LOAICAPHHD","=",$maHuyHieuDang)->where("CAPLAI","=",1)->first();
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich, huyhieudang where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = huyhieudang.MADANGVIEN");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich, huyhieudang where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo." and dangvien.MADANGVIEN = huyhieudang.MADANGVIEN");
        }

        foreach ($listDangVien as $dangVien) {
            if (Input::has('chonDangVien' . $dangVien->MADANGVIEN)) {
                $capHuyHieuDang = new CapHHD();
                $capHuyHieuDang->MADANGVIEN = $dangVien->MADANGVIEN;
                $capHuyHieuDang->STTCAPHHD = $newDotCapHHD->STTCAPHHD;
                if(CapHHD::where("MADANGVIEN","=",$dangVien->MADANGVIEN)->where("STTCAPHHD","=",$newDotCapHHD->STTCAPHHD)->count()==0){
                    $capHuyHieuDang->save();
                }
            }
        }
        if ($maChiBo == "0") {
            $listDV = DB::select("select * from dangvien, lylich, huyhieudang, caphhd, dscaphhd where dangvien.MADANGVIEN = caphhd.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = lylich.MADANGVIEN and dscaphhd.STTCAPHHD = caphhd.STTCAPHHD and dscaphhd.LOAICAPHHD = ". $dotCapHHD-> LOAICAPHHD." and dscaphhd.DOTCAPHHD = '".$dotCapHHD->DOTCAPHHD."' and dscaphhd.CAPLAI = 1 and dangvien.MADANGVIEN = huyhieudang.MADANGVIEN and huyhieudang.TENHH = '".$tenHHD."'");
        } else {
            $listDV = DB::select("select * from dangvien, lylich, huyhieudang, dscaphhd, caphhd where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo." and caphhd.MADANGVIEN = dangvien.MADANGVIEN and caphhd.STTCAPHHD = dscaphhd.STTCAPHHD and dscaphhd.LOAICAPHHD = ". $dotCapHHD-> LOAICAPHHD." and dscaphhd.DOTCAPHHD = '".$dotCapHHD->DOTCAPHHD."' and dscaphhd.CAPLAI = 1 and dangvien.MADANGVIEN = huyhieudang.MADANGVIEN and huyhieudang.TENHH = '".$tenHHD."'");
        }
        //return Redirect::to("trang-lap-danh-sach-boi-duong-dvm");
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-danh-sach-cap-lai-huy-hieu-dang")
                        ->with("listDangVien", $listDV)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("doiNgay", date("d-m-Y", strtotime($dotCapHHD-> DOTCAPHHD)))
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("noiNhan",$noiNhan)
                        ->with("tenHHD", $tenHHD)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }
}