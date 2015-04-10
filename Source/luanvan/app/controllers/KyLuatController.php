<?php

class KyLuatController extends Controller {

    public function TrangKyLuatDangVien() {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $listDangVien = DB::select("select * from dangvien, lylich where dangvien.XOA = 0 and dangvien.MADANGVIEN = lylich.MADANGVIEN and lylich.MACB = " . $maChiBo);
        $listNam = Nam::orderBy("NAM", "DESC")->get();
        $listHTKL = HinhThucKL::all();
        $namDuocChon = date("Y");
        $listKyLuat = KyLuatDV::where("NAM", "=", $namDuocChon)->get();
        $listChiBo = ChiBo::all();
        return View::make("trang-ky-luat-dang-vien")
                        ->with("listDangVien", $listDangVien)
                        ->with("listNam", $listNam)
                        ->with("listHTKL", $listHTKL)
                        ->with("namDuocChon", $namDuocChon)
                        ->with("listKyLuat", $listKyLuat)
                        ->with("listChiBo", $listChiBo)
        ;
    }

    public function LuuKyLuatDangVien() {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $listDangVien = DB::select("select * from dangvien, lylich where dangvien.XOA = 0 and dangvien.MADANGVIEN = lylich.MADANGVIEN and lylich.MACB = " . $maChiBo);
        $nam = Input::get("namIn");
        foreach ($listDangVien as $dangVien) {
            KyLuatDV::where("NAM","=",$nam)->where("MADANGVIEN","=",$dangVien->MADANGVIEN)->delete();
            $kyLuat = new KyLuatDV();
            $kyLuat->MADANGVIEN = $dangVien->MADANGVIEN;
            $kyLuat->MAHTKL = Input::get("hinhThucKL" . $dangVien->MADANGVIEN);
            $kyLuat->NAM = $nam;
            $kyLuat->LYDOKLDV = Input::get("lyDo" . $dangVien->MADANGVIEN);
            if ($kyLuat->MAHTKL != "0") {
                $kyLuat->save();
            }
        }
        return Redirect::to("trang-ky-luat-dang-vien");
    }

    
    public function LocDanhSachKyLuat(){
        $namDuocChon = Input::get("namKyLuat");
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $listDangVien = DB::select("select * from dangvien, lylich where dangvien.XOA = 0 and dangvien.MADANGVIEN = lylich.MADANGVIEN and lylich.MACB = " . $maChiBo);
        $listNam = Nam::orderBy("NAM", "DESC")->get();
        $listHTKL = HinhThucKL::all();
        $listKyLuat = KyLuatDV::where("NAM", "=", $namDuocChon)->get();
        $listChiBo = ChiBo::all();
        return View::make("trang-ky-luat-dang-vien")
                        ->with("listDangVien", $listDangVien)
                        ->with("listNam", $listNam)
                        ->with("listHTKL", $listHTKL)
                        ->with("namDuocChon", $namDuocChon)
                        ->with("listKyLuat", $listKyLuat)
                        ->with("listChiBo", $listChiBo)
        ;
    }
}
