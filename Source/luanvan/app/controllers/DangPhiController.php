<?php

class DangPhiController extends Controller {

    public function TrangDangPhi() {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $thangNam = date("m-Y");
        $listThangArray = array($thangNam);
        if (ThangNam::where("THANGNAM", "=", $thangNam)->count() == 0) {
            $newThangNam = new ThangNam();
            $newThangNam->THANGNAM = $thangNam;
            $newThangNam->save();
        }
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo);
        }
        return View::make('trang-dang-phi')->with('listDangVien', $listDangVien)->with("thangNam", $thangNam)->with("listThang", $listThangArray);
    }

    public function InDangPhiThang() {
        $thangNam = Input::get("thangNam");
        $luongCoBan = LuongCB::orderBy("STTLUONGCB", "DESC")->first();
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select from dangvien, dangphi where dangvien.MADANGVIEN = dangphi.MADANGVIEN and dangvien.XOA = 0");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich, dangphi where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = dangphi.MADANGVIEN and lylich.MACB = " . $maChiBo);
        }
        if (ThangNam::where("THANGNAM", "=", $thangNam)->count() == 0) {
            $TN = new ThangNam();
            $TN->THANGNAM = $thangNam;
            $TN->save();
        }
        foreach ($listDangVien as $dangVien) {
            $dangPhi = new DangPhi();
            $luong = number_format($luongCoBan->LUONGCB * ( $dangVien->HSLUONG + $dangVien->HSCHUCVU ) * ( 1 + $dangVien->HSTHAMNIEN + $dangVien->HSVUOTKHUNG), 0);
            $dangPhi->THANGNAM = $thangNam;
            $dangPhi->MADANGVIEN = $dangVien->MADANGVIEN;
            $dangPhi->HSLUONGTHANG = number_format($dangVien->HSLUONG, 2);
            $dangPhi->HSPCCVTHANG = number_format($dangVien->HSCHUCVU, 2);
            $dangPhi->HSPCTNTHANG = number_format($dangVien->HSTHAMNIEN, 2);
            $dangPhi->HSVKTHANG = number_format($dangVien->HSVUOTKHUNG, 2);
            $dangPhi->TRUYTHUTHANG = Input::get("TRUYTHU" . $dangVien->MADANGVIEN);
            $dangPhi->SOTIEN = number_format(0.01 * ($luong + $dangPhi->TRUYTHUTHANG), 0);
            if (DangPhi::where("THANGNAM", "=", $thangNam)->where("MADANGVIEN", "=", $dangVien->MADANGVIEN)->count() == 0) {
                $dangPhi->save();
            }
        }

        if ($maChiBo == "0") {
            $list = DB::select("select * from dangvien, lylich, dangphi where lylich.MADANGVIEN = dangvien.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = dangphi.MADANGVIEN and dangphi.THANGNAM = '" . $thangNam . "'");
        } else {
            $list = DB::select("select * from dangvien, lylich, dangphi where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = dangphi.MADANGVIEN and dangphi.THANGNAM = '" . $thangNam . "' and lylich.MACB = " . $maChiBo);
        }
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();

        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-dang-phi")
                        ->with("listDangVien", $list)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("thangNam", $thangNam)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }

    public function TrangDangPhiTheoQuy($quy) {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $quyCuaNam = substr($quy, 0, 2);
        $nam = substr($quy, 3);
        if ($quyCuaNam == "01") {
            $listThang = "('01-" . $nam . "', '02-" . $nam . "', '03-" . $nam . "')";
            $listThangArray = array("01-" . $nam, "02-" . $nam, "03-" . $nam);
        } else if ($quyCuaNam == "02") {
            $listThang = "('04-" . $nam . "', '05-" . $nam . "', '06-" . $nam . "')";
            $listThangArray = array("04-" . $nam, "05-" . $nam, "06-" . $nam);
        } else if ($quyCuaNam == "03") {
            $listThang = "('07-" . $nam . "', '08-" . $nam . "', '09-" . $nam . "')";
            $listThangArray = array("07-" . $nam, "08-" . $nam, "09-" . $nam);
        } else {
            $listThang = "('10-" . $nam . "', '11-" . $nam . "', '12-" . $nam . "')";
            $listThangArray = array("10-" . $nam, "11-" . $nam, "12-" . $nam);
        }
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangphi, dangvien, lylich where dangvien.XOA = 0 and dangphi.MADANGVIEN = dangvien.MADANGVIEN and dangphi.THANGNAM in " . $listThang . " and dangvien.MADANGVIEN = lylich.MADANGVIEN");
        } else {
            $listDangVien = DB::select("select * from dangphi, dangvien, lylich where dangvien.XOA = 0 and dangphi.MADANGVIEN = dangvien.MADANGVIEN and dangphi.THANGNAM in " . $listThang . " and dangvien.MADANGVIEN = lylich.MADANGVIEN and lylich.MACB = " . $maChiBo);
        }
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-dang-phi-theo-quy")
                        ->with("listDangVien", $listDangVien)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("listThang", $listThangArray)
                        ->with("quy", $quy)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }

    public function TrangDangPhiTheoNam($nam) {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $listThang = "('01-" . $nam . "', '02-" . $nam . "', '03-" . $nam . "', '04-" . $nam . "', '05-" . $nam . "', '06-" . $nam . "', '07-" . $nam . "', '08-" . $nam . "', '09-" . $nam . "', '10-" . $nam . "', '11-" . $nam . "', '12-" . $nam . "')";
        $listThangArray = array("01-" . $nam, "02-" . $nam, "03-" . $nam, "04-" . $nam, "05-" . $nam, "06-" . $nam, "07-" . $nam, "08-" . $nam, "09-" . $nam, "10-" . $nam, "11-" . $nam, "12-" . $nam);
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangphi, dangvien, lylich where dangvien.XOA = 0 and dangphi.MADANGVIEN = dangvien.MADANGVIEN and dangphi.THANGNAM in " . $listThang . " and dangvien.MADANGVIEN = lylich.MADANGVIEN");
        } else {
            $listDangVien = DB::select("select * from dangphi, dangvien, lylich where dangvien.XOA = 0 and dangphi.MADANGVIEN = dangvien.MADANGVIEN and dangphi.THANGNAM in " . $listThang . " and dangvien.MADANGVIEN = lylich.MADANGVIEN and lylich.MACB = " . $maChiBo);
        }
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-dang-phi-theo-nam")
                        ->with("listDangVien", $listDangVien)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("listThang", $listThangArray)
                        ->with("nam", $nam)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }

    public function InDangPhiTheoDang($thang) {
        $thangNam = $thang;
        $maChiBo = Session::get("maChiBoTaiKhoan");

        if ($maChiBo == "0") {
            $list = DB::select("select * from dangvien, lylich, dangphi where lylich.MADANGVIEN = dangvien.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = dangphi.MADANGVIEN and dangphi.THANGNAM = '" . $thangNam . "'");
        } else {
            $list = DB::select("select * from dangvien, lylich, dangphi where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = dangphi.MADANGVIEN and dangphi.THANGNAM = '" . $thangNam . "' and lylich.MACB = " . $maChiBo);
        }
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();

        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-dang-phi")
                        ->with("listDangVien", $list)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("thangNam", $thangNam)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }

    public function TrangCapNhatHeSo() {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.XOA = 0 and dangvien.MADANGVIEN = lylich.MADANGVIEN");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo);
        }
        
        return View::make("trang-cap-nhat-he-so")->with("listDangVien",$listDangVien);
    }

    
    public function LuuCacHeSo(){
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.XOA = 0 and dangvien.MADANGVIEN = lylich.MADANGVIEN");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo);
        }
        
        foreach($listDangVien as $dangVien){
            LyLich::where("MADANGVIEN","=",$dangVien->MADANGVIEN)->update(
                    array(
                       'HSLUONG' => Input::get("hsLuong".$dangVien->MADANGVIEN),
                       'HSCHUCVU' => Input::get("hsChucVu".$dangVien->MADANGVIEN),
                       'HSTHAMNIEN' => Input::get("hsThamNien".$dangVien->MADANGVIEN),
                       'HSVUOTKHUNG' => Input::get("hsVuotKhung".$dangVien->MADANGVIEN)
                    ));
        }
        
        return Redirect::to("cap-nhat-cac-he-so");
    }
}
