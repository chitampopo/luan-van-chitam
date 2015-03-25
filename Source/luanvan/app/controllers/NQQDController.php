<?php

class NQQDController extends Controller {

    public function TrangNQKetNap() {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if ($maChiBo == "0") {
            $listCamTinhDang = CamTinhDang::all();
        } else {
            $listCamTinhDang = CamTinhDang::where("MACB", "=", $maChiBo)->get();
        }
        return View::make("trang-nghi-quyet-ket-nap")->with("listCamTinhDang", $listCamTinhDang);
    }

    public function InNQKetNap() {
        $maChiBo = Input::get("maChiBo");
        $maCamTinhDang = Input::get("camTinhDang");
        $soUyVienBanChapHanh = Input::get("soUVBCH");
        $soUyVienBanChapHanhCoMat = Input::get("soUVBCHCoMat");
        $soUyVienBanChapHanhVangMat = Input::get("soUVBCHVangMat");
        $lyDoUyVienBanChapHanhVangMat = Input::get("lyDoVangUVBCH");
        $soDangVien = Input::get("soDangVien");
        $soDangVienChinhThuc = Input::get("soChinhThuc");
        $soDangVienDuBi = Input::get("soDuBi");
        $soDangVienCoMat = Input::get("soCoMat");
        $soDangVienChinhThucCoMat = Input::get("soCoMatChinhThuc");
        $soDangVienDuBiCoMat = Input::get("soCoMatDuBi");
        $soDangVienVangMat = Input::get("soVangMat");
        $soDangVienChinhThucVangMat = Input::get("soVangMatChinhThuc");
        $soDangVienDuBiVangMat = Input::get("soVangMatDuBi");
        $lyDoDangVienVangMat = Input::get("lyDoVangMat");
        $chuTri = Input::get("chuTri");
        $chucVuNguoiChuTri = Input::get("chucVuChuTri");
        $thuKy = Input::get("thuKy");
        $uuKhuyetDiem = Input::get("noiDung");
        $soTanThanh = Input::get("soTanThanh");
        $soKhongTanThanh = Input::get("soKhongTanThanh");
        $lyDoKhongTanThanh = Input::get("lyDoKhongTanThanh");
        $chucVuNguoiLap = Input::get("chucVuNguoiLap");
        $nguoiLap = Input::get("nguoiLap");
        $noiNhan = Input::get("noiNhan");
        $camTinhDang = CamTinhDang::where("STTCTD", "=", $maCamTinhDang)->first();
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        if ($maChiBo == "0") {
            $maChiBo = null;
            $NQDU = true;
        } else {
            $NQDU = false;
        }

        if (Ngay::where("NGAY", "=", date('Y-m-d'))->count() == 0) {
            $ngay = new Ngay();
            $ngay->NGAY = date('Y-m-d');
            $ngay->save();
        }
        $nghiQuyet = new NghiQuyet();
        $nghiQuyet->STTCTD = $maCamTinhDang;
        $nghiQuyet->NGAY = date('Y-m-d');
        $nghiQuyet->MACB = $maChiBo;
        $nghiQuyet->TONGSOUVBCH = $soUyVienBanChapHanh;
        $nghiQuyet->SLCOMAT = $soUyVienBanChapHanhCoMat;
        $nghiQuyet->SLVANGMAT = $soUyVienBanChapHanhVangMat;
        $nghiQuyet->LYDOVANG = $lyDoUyVienBanChapHanhVangMat;
        $nghiQuyet->CHUTRI = $chuTri;
        $nghiQuyet->CVCHUTRI = $chucVuNguoiChuTri;
        $nghiQuyet->THUKY = $thuKy;
        $nghiQuyet->UUKHUYETDIEM = $uuKhuyetDiem;
        $nghiQuyet->SLTANTHANH = $soTanThanh;
        $nghiQuyet->SLKTANTHANH = $soKhongTanThanh;
        $nghiQuyet->LYDOKTANTHANH = $lyDoKhongTanThanh;
        $nghiQuyet->NQDU = $NQDU;
        $nghiQuyet->SODANGVIEN = $soDangVien;
        $nghiQuyet->SODVCT = $soDangVienChinhThuc;
        $nghiQuyet->SODVDB = $soDangVienDuBi;
        $nghiQuyet->SODVCO = $soDangVienCoMat;
        $nghiQuyet->SODVCTCO = $soDangVienChinhThucCoMat;
        $nghiQuyet->SODVDBCO = $soDangVienDuBiCoMat;
        $nghiQuyet->SODVVANG = $soDangVienVangMat;
        $nghiQuyet->SODVCTVANG = $soDangVienChinhThucVangMat;
        $nghiQuyet->SODVDBVANG = $soDangVienDuBiVangMat;
        $nghiQuyet->NOINHAN = $noiNhan;
        $nghiQuyet->NGUOILAP = $nguoiLap;
        $nghiQuyet->CVNGUOILAP = $chucVuNguoiLap;
        $nghiQuyet->LYDODVVANG = $lyDoDangVienVangMat;
        $nghiQuyet->LOAINQ = 0;
        $nghiQuyet->save();

        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-nghi-quyet-ket-nap-dang")
                        ->with("camTinhDang", $camTinhDang)
                        ->with("chiBo", $chiBo)
                        ->with("camTinhDang", $camTinhDang)
                        ->with("maChiBo", $maChiBo)
                        ->with("chiBo", $chiBo)
                        ->with("soUyVienBanChapHanh", $soUyVienBanChapHanh)
                        ->with("soUyVienBanChapHanhCoMat", $soUyVienBanChapHanhCoMat)
                        ->with("soUyVienBanChapHanhVangMat", $soUyVienBanChapHanhVangMat)
                        ->with("lyDoUyVienBanChapHanhVangMat", $lyDoUyVienBanChapHanhVangMat)
                        ->with("soDangVien", $soDangVien)
                        ->with("soDangVienChinhThuc", $soDangVienChinhThuc)
                        ->with("soDangVienDuBi", $soDangVienDuBi)
                        ->with("soDangVienCoMat", $soDangVienCoMat)
                        ->with("soDangVienChinhThucCoMat", $soDangVienChinhThucCoMat)
                        ->with("soDangVienDuBiCoMat", $soDangVienDuBiCoMat)
                        ->with("soDangVienVangMat", $soDangVienVangMat)
                        ->with("soDangVienChinhThucVangMat", $soDangVienChinhThucVangMat)
                        ->with("soDangVienDuBiVangMat", $soDangVienDuBiVangMat)
                        ->with("lyDoDangVienVangMat", $lyDoDangVienVangMat)
                        ->with("chuTri", $chuTri)
                        ->with("chucVuNguoiChuTri", $chucVuNguoiChuTri)
                        ->with("thuKy", $thuKy)
                        ->with("uuKhuyetDiem", $uuKhuyetDiem)
                        ->with("soTanThanh", $soTanThanh)
                        ->with("soKhongTanThanh", $soKhongTanThanh)
                        ->with("lyDoKhongTanThanh", $lyDoKhongTanThanh)
                        ->with("chucVuNguoiLap", $chucVuNguoiLap)
                        ->with("nguoiLap", $nguoiLap)
                        ->with("noiNhan", $noiNhan)
        );
        return $pdf->setPaper('a4')->stream();
    }

    public function TrangNQCongNhan() {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if ($maChiBo == "0") {
            $listDangVien = DangVien::all();
        } else {
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = " . $maChiBo);
        }
        return View::make("trang-nghi-quyet-cong-nhan")->with("listDangVien", $listDangVien);
    }

    public function InNQCongNhan() {
        $maChiBo = Input::get("maChiBo");
        $maDangVien = Input::get("maDangVien");
        $soUyVienBanChapHanh = Input::get("soUVBCH");
        $soUyVienBanChapHanhCoMat = Input::get("soUVBCHCoMat");
        $soUyVienBanChapHanhVangMat = Input::get("soUVBCHVangMat");
        $lyDoUyVienBanChapHanhVangMat = Input::get("lyDoVangUVBCH");
        $soDangVien = Input::get("soDangVien");
        $soDangVienChinhThuc = Input::get("soChinhThuc");
        $soDangVienDuBi = Input::get("soDuBi");
        $soDangVienCoMat = Input::get("soCoMat");
        $soDangVienChinhThucCoMat = Input::get("soCoMatChinhThuc");
        $soDangVienDuBiCoMat = Input::get("soCoMatDuBi");
        $soDangVienVangMat = Input::get("soVangMat");
        $soDangVienChinhThucVangMat = Input::get("soVangMatChinhThuc");
        $soDangVienDuBiVangMat = Input::get("soVangMatDuBi");
        $lyDoDangVienVangMat = Input::get("lyDoVangMat");
        $chuTri = Input::get("chuTri");
        $chucVuNguoiChuTri = Input::get("chucVuChuTri");
        $thuKy = Input::get("thuKy");
        $uuKhuyetDiem = Input::get("noiDung");
        $soTanThanh = Input::get("soTanThanh");
        $soKhongTanThanh = Input::get("soKhongTanThanh");
        $lyDoKhongTanThanh = Input::get("lyDoKhongTanThanh");
        $chucVuNguoiLap = Input::get("chucVuNguoiLap");
        $nguoiLap = Input::get("nguoiLap");
        $noiNhan = Input::get("noiNhan");
        $dangVien = DangVien::where("MADANGVIEN", "=", $maDangVien)->first();
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        if ($maChiBo == "0") {
            $maChiBo = null;
            $NQDU = true;
        } else {
            $NQDU = false;
        }
        if (Ngay::where("NGAY", "=", date('Y-m-d'))->count() == 0) {
            $ngay = new Ngay();
            $ngay->NGAY = date('Y-m-d');
            $ngay->save();
        }
        $nghiQuyet = new NghiQuyet();
        $nghiQuyet->MADANGVIEN = $maDangVien;
        $nghiQuyet->NGAY = date('Y-m-d');
        $nghiQuyet->MACB = $maChiBo;
        $nghiQuyet->TONGSOUVBCH = $soUyVienBanChapHanh;
        $nghiQuyet->SLCOMAT = $soUyVienBanChapHanhCoMat;
        $nghiQuyet->SLVANGMAT = $soUyVienBanChapHanhVangMat;
        $nghiQuyet->LYDOVANG = $lyDoUyVienBanChapHanhVangMat;
        $nghiQuyet->CHUTRI = $chuTri;
        $nghiQuyet->CVCHUTRI = $chucVuNguoiChuTri;
        $nghiQuyet->THUKY = $thuKy;
        $nghiQuyet->UUKHUYETDIEM = $uuKhuyetDiem;
        $nghiQuyet->SLTANTHANH = $soTanThanh;
        $nghiQuyet->SLKTANTHANH = $soKhongTanThanh;
        $nghiQuyet->LYDOKTANTHANH = $lyDoKhongTanThanh;
        $nghiQuyet->NQDU = $NQDU;
        $nghiQuyet->SODANGVIEN = $soDangVien;
        $nghiQuyet->SODVCT = $soDangVienChinhThuc;
        $nghiQuyet->SODVDB = $soDangVienDuBi;
        $nghiQuyet->SODVCO = $soDangVienCoMat;
        $nghiQuyet->SODVCTCO = $soDangVienChinhThucCoMat;
        $nghiQuyet->SODVDBCO = $soDangVienDuBiCoMat;
        $nghiQuyet->SODVVANG = $soDangVienVangMat;
        $nghiQuyet->SODVCTVANG = $soDangVienChinhThucVangMat;
        $nghiQuyet->SODVDBVANG = $soDangVienDuBiVangMat;
        $nghiQuyet->NOINHAN = $noiNhan;
        $nghiQuyet->NGUOILAP = $nguoiLap;
        $nghiQuyet->CVNGUOILAP = $chucVuNguoiLap;
        $nghiQuyet->LYDODVVANG = $lyDoDangVienVangMat;
        $nghiQuyet->LOAINQ = 1;
        $nghiQuyet->save();

        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-nghi-quyet-cong-nhan")
                        ->with("dangVien", $dangVien)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("chiBo", $chiBo)
                        ->with("soUyVienBanChapHanh", $soUyVienBanChapHanh)
                        ->with("soUyVienBanChapHanhCoMat", $soUyVienBanChapHanhCoMat)
                        ->with("soUyVienBanChapHanhVangMat", $soUyVienBanChapHanhVangMat)
                        ->with("lyDoUyVienBanChapHanhVangMat", $lyDoUyVienBanChapHanhVangMat)
                        ->with("soDangVien", $soDangVien)
                        ->with("soDangVienChinhThuc", $soDangVienChinhThuc)
                        ->with("soDangVienDuBi", $soDangVienDuBi)
                        ->with("soDangVienCoMat", $soDangVienCoMat)
                        ->with("soDangVienChinhThucCoMat", $soDangVienChinhThucCoMat)
                        ->with("soDangVienDuBiCoMat", $soDangVienDuBiCoMat)
                        ->with("soDangVienVangMat", $soDangVienVangMat)
                        ->with("soDangVienChinhThucVangMat", $soDangVienChinhThucVangMat)
                        ->with("soDangVienDuBiVangMat", $soDangVienDuBiVangMat)
                        ->with("lyDoDangVienVangMat", $lyDoDangVienVangMat)
                        ->with("chuTri", $chuTri)
                        ->with("chucVuNguoiChuTri", $chucVuNguoiChuTri)
                        ->with("thuKy", $thuKy)
                        ->with("uuKhuyetDiem", $uuKhuyetDiem)
                        ->with("soTanThanh", $soTanThanh)
                        ->with("soKhongTanThanh", $soKhongTanThanh)
                        ->with("lyDoKhongTanThanh", $lyDoKhongTanThanh)
                        ->with("chucVuNguoiLap", $chucVuNguoiLap)
                        ->with("nguoiLap", $nguoiLap)
                        ->with("noiNhan", $noiNhan)
        );
        return $pdf->setPaper('a4')->stream();
    }

    public function TrangLapQD() {
        return View::make("trang-lap-quyet-dinh");
    }

    public function InQD() {

        $tenQuyetDinh = Input::get("tenQuyetDinh");
        $cacQuyetDinh = Input::get("cacQuyetDinh");
        $cacCanCu = Input::get("canCu");
        $noiNhan = Input::get("noiNhan");
        $nguoiLap = Input::get("nguoiLap");
        $chucVuNguoiLap = Input::get("chucVuNguoiLap");
        $maChiBo = Input::get("maChiBo");
        if (Ngay::where("NGAY", "=", date('Y-m-d'))->count() == 0) {
            $ngay = new Ngay();
            $ngay->NGAY = date('Y-m-d');
            $ngay->save();
        }
        $quyetDinh = new QuyetDinh();
        $quyetDinh->NGAY = date('Y-m-d');
        $quyetDinh->TENQD = $tenQuyetDinh;
        $quyetDinh->CACQD = $cacQuyetDinh;
        $quyetDinh->CACCANCU = $cacCanCu;
        $quyetDinh->NOINHAN = $noiNhan;
        $quyetDinh->NGUOIKYQD = $nguoiLap;
        $quyetDinh->CVNGUOIKYQD = $chucVuNguoiLap;
        $quyetDinh->save();
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-quyet-dinh")
                        ->with("tenQuyetDinh", $tenQuyetDinh)
                        ->with("cacQuyetDinh", $cacQuyetDinh)
                        ->with("cacCanCu", $cacCanCu)
                        ->with("chucVuNguoiLap", $chucVuNguoiLap)
                        ->with("nguoiLap", $nguoiLap)
                        ->with("noiNhan", $noiNhan)
        );
        return $pdf->setPaper('a4')->stream();
    }

}
