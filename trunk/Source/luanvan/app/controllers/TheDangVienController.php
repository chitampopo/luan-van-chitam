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
        $dsCapThe = DangVien::take(0);
        return View::make("trang-cap-the")
                        ->with("listDangVien", $listDangVien)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("dsCapThe", $dsCapThe)
                        ->with("dotNgay", date("d-m-Y"));
    }

    public function LocTrangCapTheMoi() {
        $dotNgay = date("Y-m-d", strtotime(Input::get("dotNgay")));
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
        $dsCapThe = DB::select("select * from dscapthedang, capthedang where dscapthedang.DOTCAPTHE = '" . $dotNgay . "' and dscapthedang.STTCAPTHE = capthedang.STTCAPTHE  and dscapthedang.LOAICAPTHE = 1");
        return View::make("trang-cap-the")
                        ->with("listDangVien", $listDangVien)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("dotNgay", $dotNgay)
                        ->with("dsCapThe", $dsCapThe);
    }

    public function LapDanhSachCapTheMoi() {
        $listChiBo = ChiBo::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $noiNhan = Input::get("noiNhan");
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        $dotCap = Input::get("dotNgay");

        $doiCapThe = new DanhSachCapTheDang();
        $doiCapThe->LOAICAPTHE = 1;
        $doiCapThe->DOTCAPTHE = date("Y-m-d", strtotime($dotCap));
        if (DanhSachCapTheDang::where("DOTCAPTHE", "=", $doiCapThe->DOTCAPTHE)->where("LOAICAPTHE", "=", 1)->count() == 0) {
            $doiCapThe->save();
        }

        $newDotCapThe = DanhSachCapTheDang::where("DOTCAPTHE", "=", $doiCapThe->DOTCAPTHE)->where("LOAICAPTHE", "=", 1)->first();
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN not in (select MADANGVIEN from thedv)");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN not in (select MADANGVIEN from thedv)");
        }

        CapTheDang::where("STTCAPTHE", "=", $newDotCapThe->STTCAPTHE)->delete();
        foreach ($listDangVien as $dangVien) {
            if (Input::has('chonDangVien' . $dangVien->MADANGVIEN)) {
                $capTheDang = new CapTheDang();
                $capTheDang->MADANGVIEN = $dangVien->MADANGVIEN;
                $capTheDang->STTCAPTHE = $newDotCapThe->STTCAPTHE;
                if (Input::has("chonDangVien" . $dangVien->MADANGVIEN)) {
                    if (CapTheDang::where("MADANGVIEN", "=", $dangVien->MADANGVIEN)->where("STTCAPTHE", "=", $newDotCapThe->STTCAPTHE)->count() == 0) {
                        $capTheDang->save();
                    }
                }
            }
        }
        if ($maChiBo == "0") {
            $listDangVienMoi = DB::select("select * from dangvien, lylich, capthedang where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = capthedang.MADANGVIEN and capthedang.STTCAPTHE =" . $newDotCapThe->STTCAPTHE);
        } else {
            $listDangVienMoi = DB::select("select * from dangvien, lylich, capthedang where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN = capthedang.MADANGVIEN and capthedang.STTCAPTHE = " . $newDotCapThe->STTCAPTHE);
        }

        //return Redirect::to("trang-lap-danh-sach-boi-duong-dvm");
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-danh-sach-cap-the-dang-moi")
                        ->with("listDangVienMoi", $listDangVienMoi)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("doiNgay", date("d-m-Y", strtotime($doiCapThe->DOTCAPTHE)))
                        ->with("dotCapThe", $doiCapThe->DOTCAPTHE)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("noiNhan", $noiNhan)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }

    public function TrangCapTheLaiBiMat() {
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
        $dsCapThe = DangVien::take(0);
        return View::make("trang-cap-the-bi-mat")
                        ->with("listDangVien", $listDangVien)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("dsCapThe", $dsCapThe)
                        ->with("dotNgay", date("d-m-Y"));
    }

    public function LocTrangCapTheBiMat() {
        $dotNgay = date("Y-m-d", strtotime(Input::get("dotNgay")));
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
        $dsCapThe = DB::select("select * from dscapthedang, capthedang where dscapthedang.DOTCAPTHE = '" . $dotNgay . "' and dscapthedang.STTCAPTHE = capthedang.STTCAPTHE  and dscapthedang.LOAICAPTHE = 2");
        return View::make("trang-cap-the-bi-mat")
                        ->with("listDangVien", $listDangVien)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("dsCapThe", $dsCapThe)
                        ->with("dotNgay", $dotNgay);
    }

    public function LapDanhSachCapTheBiMat() {
        $listChiBo = ChiBo::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $noiNhan = Input::get("noiNhan");
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        $dotCap = Input::get("dotNgay");

        $doiCapThe = new DanhSachCapTheDang();
        $doiCapThe->LOAICAPTHE = 2;
        $doiCapThe->DOTCAPTHE = date("Y-m-d", strtotime($dotCap));
        if (DanhSachCapTheDang::where("DOTCAPTHE", "=", $doiCapThe->DOTCAPTHE)->where("LOAICAPTHE", "=", 2)->count() == 0) {
            $doiCapThe->save();
        }

        $newDotCapThe = DanhSachCapTheDang::where("DOTCAPTHE", "=", $doiCapThe->DOTCAPTHE)->where("LOAICAPTHE", "=", 2)->first();
        if ($maChiBo == "0") {
            $listDangVienMoi = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = thedv.MADANGVIEN");
        } else {
            $listDangVienMoi = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN = thedv.MADANGVIEN");
        }

        foreach ($listDangVienMoi as $dangVien) {
            if (Input::has('chonDangVien' . $dangVien->MADANGVIEN)) {
                $capTheDang = new CapTheDang();
                $capTheDang->MADANGVIEN = $dangVien->MADANGVIEN;
                $capTheDang->STTCAPTHE = $newDotCapThe->STTCAPTHE;
                if (Input::has("chonDangVien" . $dangVien->MADANGVIEN)) {
                    if (CapTheDang::where("MADANGVIEN", "=", $dangVien->MADANGVIEN)->where("STTCAPTHE", "=", $newDotCapThe->STTCAPTHE)->count() == 0) {
                        $capTheDang->save();
                    }
                }
            }
        }

        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv, capthedang where dangvien.MADANGVIEN = thedv.MADANGVIEN and dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = capthedang.MADANGVIEN and capthedang.STTCAPTHE = " . $newDotCapThe->STTCAPTHE);
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv, capthedang where dangvien.MADANGVIEN = thedv.MADANGVIEN and dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN = capthedang.MADANGVIEN and capthedang.STTCAPTHE = " . $newDotCapThe->STTCAPTHE);
        }
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-danh-sach-cap-the-dang-bi-mat")
                        ->with("listDangVien", $listDangVien)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("doiNgay", date("d-m-Y", strtotime($doiCapThe->DOTCAPTHE)))
                        ->with("dotCapThe", $doiCapThe->DOTCAPTHE)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("noiNhan", $noiNhan)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }

    public function TrangCapTheLaiBiHong() {
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
        $dsCapThe = DangVien::take(0);
        return View::make("trang-cap-the-bi-hong")
                        ->with("listDangVien", $listDangVien)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("dsCapThe", $dsCapThe)
                        ->with("dotNgay", date("m-d-Y"));
    }

    public function LocDanhSachCapTheBiHong() {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $dotNgay = date("Y-m-d", strtotime(Input::get("dotNgay")));
        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN  = thedv.MADANGVIEN");
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN = thedv.MADANGVIEN");
        }
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listChiBo = ChiBo::all();
        $dsCapThe = DB::select("select * from dscapthedang, capthedang where dscapthedang.DOTCAPTHE = '" . $dotNgay . "' and dscapthedang.STTCAPTHE = capthedang.STTCAPTHE and dscapthedang.LOAICAPTHE = 3");
        return View::make("trang-cap-the-bi-hong")
                        ->with("listDangVien", $listDangVien)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("dsCapThe", $dsCapThe)
                        ->with("dotNgay", date("d-m-Y",strtotime($dotNgay)));
    }

    public function LapDanhSachCapTheBiHong() {
        $listChiBo = ChiBo::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $noiNhan = Input::get("noiNhan");
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        $dotCap = Input::get("dotNgay1");

        $doiCapThe = new DanhSachCapTheDang();
        $doiCapThe->LOAICAPTHE = 3;
        $doiCapThe->DOTCAPTHE = date("Y-m-d", strtotime($dotCap));
        if (DanhSachCapTheDang::where("DOTCAPTHE", "=", $doiCapThe->DOTCAPTHE)->where("LOAICAPTHE", "=", 3)->count() == 0) {
            $doiCapThe->save();
        }

        $newDotCapThe = DanhSachCapTheDang::where("DOTCAPTHE", "=", $doiCapThe->DOTCAPTHE)->where("LOAICAPTHE", "=", 3)->first();
        if ($maChiBo == "0") {
            $listDangVienMoi = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = thedv.MADANGVIEN");
        } else {
            $listDangVienMoi = DB::select("select * from dangvien, lylich, thedv where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN = thedv.MADANGVIEN");
        }


        foreach ($listDangVienMoi as $dangVien) {
            if (Input::has('chonDangVien' . $dangVien->MADANGVIEN)) {
                $capTheDang = new CapTheDang();
                $capTheDang->MADANGVIEN = $dangVien->MADANGVIEN;
                $capTheDang->STTCAPTHE = $newDotCapThe->STTCAPTHE;
                if (Input::has("chonDangVien" . $dangVien->MADANGVIEN)) {
                    if (CapTheDang::where("MADANGVIEN", "=", $dangVien->MADANGVIEN)->where("STTCAPTHE", "=", $newDotCapThe->STTCAPTHE)->count() == 0) {
                        $capTheDang->save();
                    }
                }
            }
        }

        if ($maChiBo == "0") {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv, capthedang where dangvien.MADANGVIEN = thedv.MADANGVIEN and dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and dangvien.MADANGVIEN = capthedang.MADANGVIEN and capthedang.STTCAPTHE = " . $newDotCapThe->STTCAPTHE);
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich, thedv, capthedang where dangvien.MADANGVIEN = thedv.MADANGVIEN and dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo . " and dangvien.MADANGVIEN = capthedang.MADANGVIEN and capthedang.STTCAPTHE = " . $newDotCapThe->STTCAPTHE);
        }
        
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-danh-sach-cap-the-dang-bi-hong")
                        ->with("listDangVienMoi", $listDangVien)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("doiNgay", $dotCap)
                        ->with("dotCapThe", $doiCapThe->DOTCAPTHE)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("noiNhan", $noiNhan)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }

}
