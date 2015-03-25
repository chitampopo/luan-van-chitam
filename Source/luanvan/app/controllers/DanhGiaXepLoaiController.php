<?php

class DanhGiaXepLoaiController extends Controller {

    public function TrangDanhGia() {
        $namDuocChon = date("Y");
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $listChiBo = ChiBo::all();
        $listLyLich = LyLich::all();
        if ($maChiBo == "0") {
            $listDangVien = DangVien::where("XOA", "=", "0")->paginate(15);
        } else {
            $perpage = 15;
            $pageNumber = Input::get('page', 1);
            $array = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN"
                            . " and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo);
            $slice = array_slice($array, $perpage * ($pageNumber - 1), $perpage);
            $listDangVien = Paginator::make($slice, count($array), $perpage);
        }

        $listNam = Nam::all();
        return View::make("trang-danh-gia-dang-vien")
                        ->with("listChiBo", $listChiBo)
                        ->with("listDangVien", $listDangVien)
                        ->with("listLyLich", $listLyLich)
                        ->with("listNam", $listNam)
                        ->with("namDuocChon",$namDuocChon);
    }

    public function LocDanhSach() {
        $maChiBo = Input::get("maChiBo");
        $nam = Input::get("namChon");
        $listChiBo = ChiBo::all();
        $listLyLich = LyLich::all();

        if ($maChiBo == "0") {
            $listDangVien = DangVien::where("XOA", "=", "0")->paginate(15);
        } else {
            $perpage = 15;
            $pageNumber = Input::get('page', 1);
            $array = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN"
                            . " and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo);
            $slice = array_slice($array, $perpage * ($pageNumber - 1), $perpage);
            $listDangVien = Paginator::make($slice, count($array), $perpage);
        }
        $listNam = Nam::all();
        return View::make("trang-danh-gia-dang-vien")
                        ->with("listChiBo", $listChiBo)
                        ->with("listDangVien", $listDangVien)
                        ->with("listLyLich", $listLyLich)
                        ->with("listNam", $listNam)
                        ->with("namDuocChon",$nam);
    }

    public function LuuDanhGia() {
        $namDuocChon = Input::get("namChon");
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if ($maChiBo == "0") {
            $listDangVien = DangVien::where("XOA", "=", "0")->get();
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN"
                            . " and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo);
        }
        foreach ($listDangVien as $dangVien) {
            $phanLoaiDangVien = new PhanLoaiDangVien();
            $phanLoaiDangVien->MADANGVIEN = $dangVien->MADANGVIEN;
            $phanLoaiDangVien->NAM = $namDuocChon;
            $phanLoaiDangVien->MUCPLDV = Input::get("mucPhanLoai" . $dangVien->MADANGVIEN);
            if ($phanLoaiDangVien->MUCPLDV != null && PhanLoaiDangVien::where("MADANGVIEN", "=", $dangVien->MADANGVIEN)->where("NAM", "=", $namDuocChon)->count() == 0) { //trang hien tai
                $phanLoaiDangVien->save();
            }
            if ($phanLoaiDangVien->MUCPLDV != null && PhanLoaiDangVien::where("MADANGVIEN", "=", $dangVien->MADANGVIEN)->where("NAM", "=", $namDuocChon)->count() == 1) { //trang hien tai
                PhanLoaiDangVien::where("MADANGVIEN", "=", $dangVien->MADANGVIEN)->where("NAM","=",$namDuocChon)->update(array(
                    'MUCPLDV' => $phanLoaiDangVien->MUCPLDV
                ));
            }
        }

        return Redirect::to("trang-danh-gia-dang-vien");
    }

    public function TrangDanhGiaChiBo() {
        $listChiBo = ChiBo::all();
        $listNam = Nam::all();
        $namDuocChon = date("Y");
        $listPhanLoai = PhanLoaiChiBo::where("NAM", "=", $namDuocChon)->get();
        return View::make("trang-danh-gia-chi-bo")
                        ->with("listChiBo", $listChiBo)
                        ->with("listNam", $listNam)
                        ->with("namDuocChon", $namDuocChon)
                        ->with("listPhanLoai", $listPhanLoai);
    }

    public function LocDanhSachChiBo() {
        $namDuocChon = Input::get("namChon");
        $listChiBo = ChiBo::all();
        $listNam = Nam::all();
        $listPhanLoai = PhanLoaiChiBo::where("NAM", "=", $namDuocChon)->get();
        return View::make("trang-danh-gia-chi-bo")
                        ->with("listChiBo", $listChiBo)
                        ->with("listNam", $listNam)
                        ->with("namDuocChon", $namDuocChon)
                        ->with("listPhanLoai", $listPhanLoai);
    }

    public function LuuDanhGiaChiBo() {
        $listChiBo = ChiBo::all();
        $nam = Input::get("namChon");
        foreach ($listChiBo as $chiBo) {
            $phanLoai = new PhanLoaiChiBo();
            $phanLoai->MACB = $chiBo->MACB;
            $phanLoai->NAM = $nam;
            $phanLoai->MUCPLCB = Input::get("mucPhanLoai" . $chiBo->MACB);
            if ($phanLoai->MUCPLCB != 0 && PhanLoaiChiBo::where("MACB","=",$chiBo->MACB)->where("NAM","=",$nam)->count()==0) {
                $phanLoai->save();
            }
            if ($phanLoai->MUCPLCB != 0 && PhanLoaiChiBo::where("MACB","=",$chiBo->MACB)->where("NAM","=",$nam)->count()==1 ){
                PhanLoaiChiBo::where("MACB","=",$chiBo->MACB)->where("NAM","=",$nam)->update(array(
                    'MUCPLCB' => $phanLoai->MUCPLCB
                ));
            }
        }
        return Redirect::to("trang-danh-gia-chi-bo");
    }

}
