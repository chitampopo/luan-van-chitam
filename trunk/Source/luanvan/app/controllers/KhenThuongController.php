<?php

class KhenThuongController extends Controller {

    public function TrangKhenThuongChiBo() {
        $listChiBo = ChiBo::all();
        $listNam = Nam::orderBy("NAM", "DESC")->get();
        $listHTKT = HinhThucKT::all();
        $namDuocChon = date("Y");
        $listKhenThuong = KhenThuongCB::where("NAM", "=", $namDuocChon)->get();
        return View::make("trang-khen-thuong-chi-bo")
                        ->with("listChiBo", $listChiBo)
                        ->with("listNam", $listNam)
                        ->with("listHTKT", $listHTKT)
                        ->with("namDuocChon", $namDuocChon)
                        ->with("listKhenThuong", $listKhenThuong)
        ;
    }

    public function LocKhenThuongChiBo(){
        $listChiBo = ChiBo::all();
        $listNam = Nam::orderBy("NAM", "DESC")->get();
        $listHTKT = HinhThucKT::all();
        $namDuocChon = Input::get("namKhenThuong");
        $listKhenThuong = KhenThuongCB::where("NAM", "=", $namDuocChon)->get();
        return View::make("trang-khen-thuong-chi-bo")
                        ->with("listChiBo", $listChiBo)
                        ->with("listNam", $listNam)
                        ->with("listHTKT", $listHTKT)
                        ->with("namDuocChon", $namDuocChon)
                        ->with("listKhenThuong", $listKhenThuong)
        ;
    }
    
    public function LuuKhenThuongChiBo() {
        $listChiBo = ChiBo::all();
        $nam = Input::get("namIn");

        foreach ($listChiBo as $chiBo) {
            $khenThuongCB = new KhenThuongCB();
            $khenThuongCB->MAHTKT = Input::get("hinhThucKT" . $chiBo->MACB);
            $khenThuongCB->MACB = $chiBo->MACB;
            $khenThuongCB->NAM = $nam;
            $khenThuongCB->LYDOKTCB = Input::get("lyDoKhenThuong" . $chiBo->MACB);
            if ($khenThuongCB->MAHTKT != "0") {
                if (KhenThuongCB::where("MACB", "=", $chiBo->MACB)->where("MAHTKT", "=", $khenThuongCB->MAHTKT)->where("NAM", "=", $nam)->count() == 0) {
                    $khenThuongCB->save();
                } else {
                    KhenThuongCB::where("MACB", "=", $chiBo->MACB)->where("NAM", "=", $nam)->update(array(
                        "MAHTKT" => $khenThuongCB->MAHTKT,
                        "LYDOKTCB" => $khenThuongCB->LYDOKTCB
                    ));
                }
            }
        }
        return Redirect::to("trang-khen-thuong-chi-bo");
    }

    public function TrangKhenThuongDangVien() {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $listDangVien = DB::select("select * from dangvien, lylich where dangvien.XOA = 0 and dangvien.MADANGVIEN = lylich.MADANGVIEN and lylich.MACB = " . $maChiBo);
        $listNam = Nam::orderBy("NAM", "DESC")->get();
        $listHTKT = HinhThucKT::all();
        $namDuocChon = date("Y");
        $listChiBo = ChiBo::all();
        $listKhenThuong = KhenThuongDV::where("NAM", "=", $namDuocChon)->get();
        return View::make("trang-khen-thuong-dang-vien")
                        ->with("listDangVien", $listDangVien)
                        ->with("listNam", $listNam)
                        ->with("listHTKT", $listHTKT)
                        ->with("namDuocChon", $namDuocChon)
                        ->with("listChiBo", $listChiBo)
                        ->with("listKhenThuong", $listKhenThuong)
        ;
    }

    
    public function LocKhenThuongDangVien(){
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $namDuocChon = Input::get("namKhenThuong");
        $listDangVien = DB::select("select * from dangvien, lylich where dangvien.XOA = 0 and dangvien.MADANGVIEN = lylich.MADANGVIEN and lylich.MACB = " . $maChiBo);
        $listNam = Nam::orderBy("NAM", "DESC")->get();
        $listHTKT = HinhThucKT::all();
        $listChiBo = ChiBo::all();
        $listKhenThuong = KhenThuongDV::where("NAM", "=", $namDuocChon)->get();
        return View::make("trang-khen-thuong-dang-vien")
                        ->with("listDangVien", $listDangVien)
                        ->with("listNam", $listNam)
                        ->with("listHTKT", $listHTKT)
                        ->with("namDuocChon", $namDuocChon)
                        ->with("listChiBo", $listChiBo)
                        ->with("listKhenThuong", $listKhenThuong)
        ;
    }
    public function LuuKhenThuongDangVien() {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $listDangVien = DB::select("select * from dangvien, lylich where dangvien.XOA = 0 and dangvien.MADANGVIEN = lylich.MADANGVIEN and lylich.MACB = " . $maChiBo);
        $nam = Input::get("namIn");

        foreach ($listDangVien as $dangVien) {
            KhenThuongDV::where("NAM","=",$nam)->where("MADANGVIEN","=",$dangVien->MADANGVIEN)->delete();
            $khenThuongDV = new KhenThuongDV();
            $khenThuongDV->MADANGVIEN = $dangVien->MADANGVIEN;
            $khenThuongDV->MAHTKT = Input::get("hinhThucKT" . $dangVien->MADANGVIEN);
            $khenThuongDV->NAM = $nam;
            $khenThuongDV->NGAYLAPKT = date("Y-m-d", strtotime(Input::get("ngayKT".$dangVien->MADANGVIEN)));
            $khenThuongDV->CAPQUYETDINH = Input::get("capQD".$dangVien->MADANGVIEN);
            if($khenThuongDV->MAHTKT!="0"){
                    $khenThuongDV->save();
            }
        }
        return Redirect::to("trang-khen-thuong-dang-vien");
    }

}
