<?php

class DangVienMoiController extends Controller {

    public function TrangXinYKien() {
        $listDangVienMoi = DB::select('select * from dangvien, lylich '
                        . 'where dangvien.MADANGVIEN = lylich.MADANGVIEN '
                        . 'and dangvien.XOA = 0 '
                        . 'and NGAYVAODANGCHINHTHUC is null');
        return View::make("trang-xin-y-kien-dang-vien-moi")->with("listDangVienMoi", $listDangVienMoi);
    }

    public function InPhieuXinYKien() {
        $maDangVien = Input::get("dangVienMoi");
        $chiBo = ChiBo::where("MACB", "=", Input::get("maChiBo"))->first();
        $loaiPhieu = Input::get("loaiPhieu"); //0 hoac 1
        $listDangVienMoi = DB::select('select * from dangvien, lylich '
                        . 'where dangvien.MADANGVIEN = lylich.MADANGVIEN '
                        . 'and dangvien.XOA = 0 '
                        . 'and dangvien.MADANGVIEN = ' . $maDangVien);
        $dangVienMoi = new DangVien();
        foreach ($listDangVienMoi as $dvm) {
            $dangVienMoi = $dvm;
            break;
        }
        $cuTru = Input::get("cuTruTai");
        $soTanThanh = Input::get("soTanThanh");
        $soKhongTanThanh = Input::get("soKhongTanThanh");
        $lyDoKhongTanThanh = Input::get("lyDoKhongTanThanh");
        $chucVuNguoiLap = Input::get("chucVuNguoiLap");
        $nguoiLap = Input::get("nguoiLap");
        $noiGoiDen = Input::get("noiGoiDen");
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $queQuan = null;
        foreach ($listTinh as $tinh) {
            foreach ($listHuyen as $huyen) {
                foreach ($listXa as $xa) {
                    if (($xa->MAPX == $dangVienMoi->PHU_MAPX ) && ( $huyen->MAQH == $xa->MAQH ) && ( $huyen->MATT == $tinh->MATT)) {
                        $queQuan = $xa->TENPX . ", " . $huyen->TENQH . ", " . $tinh->TENTT;
                    }
                }
            }
        }

        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-phieu-xin-y-kien-dvm")
                        ->with("chiBo", $chiBo)
                        ->with("loaiPhieu", $loaiPhieu)
                        ->with("dangVienMoi", $dangVienMoi)
                        ->with("cuTru", $cuTru)
                        ->with("soTanThanh", $soTanThanh)
                        ->with("soKhongTanThanh", $soKhongTanThanh)
                        ->with("lyDoKhongTanThanh", $lyDoKhongTanThanh)
                        ->with("chucVuNguoiLap", $chucVuNguoiLap)
                        ->with("nguoiLap", $nguoiLap)
                        ->with("noiGoiDen", $noiGoiDen)
                        ->with("queQuan", $queQuan)
        );
        return $pdf->setPaper('a4')->stream();
    }

    public function TrangTongHopYKien() {
        $listDangVienMoi = DB::select('select * from dangvien, lylich '
                        . 'where dangvien.MADANGVIEN = lylich.MADANGVIEN '
                        . 'and dangvien.XOA = 0 '
                        . 'and NGAYVAODANGCHINHTHUC is null');
        return View::make("trang-tong-hop-y-kien-dang-vien-moi")->with("listDangVienMoi", $listDangVienMoi);
    }

    public function InPhieuTongHop() {
        $chiBo = ChiBo::where("MACB", "=", Input::get("maChiBo"))->first();
        $maDangVien = Input::get("dangVienMoi");
        $listDangVienMoi = DB::select('select * from dangvien, lylich '
                        . 'where dangvien.MADANGVIEN = lylich.MADANGVIEN '
                        . 'and dangvien.XOA = 0 '
                        . 'and dangvien.MADANGVIEN = ' . $maDangVien);
        $dangVienMoi = new DangVien();
        foreach ($listDangVienMoi as $dvm) {
            $dangVienMoi = $dvm;
            break;
        }
        $soTanThanh = Input::get("soTanThanh");
        $soKhongTanThanh = Input::get("soKhongTanThanh");
        $lyDoKhongTanThanh = Input::get("lyDoKhongTanThanh");
        $chucVuNguoiLap = Input::get("chucVuNguoiLap");
        $nguoiLap = Input::get("nguoiLap");
        $noiDung = Input::get("noiDung");
        $noiLamViec = Input::get("noiLamViec");
        $noiCuTru = Input::get("noiCuTru");
        $soLuongNoiLamViec = Input::get("soLuongNoiLamViec");
        $soLuongNoiCuTru = Input::get("soLuongNoiCuTru");
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-phieu-tong-hop-y-kien-dang-vien-moi")
                        ->with("chiBo", $chiBo)
                        ->with("dangVienMoi", $dangVienMoi)
                        ->with("soTanThanh", $soTanThanh)
                        ->with("soKhongTanThanh", $soKhongTanThanh)
                        ->with("lyDoKhongTanThanh", $lyDoKhongTanThanh)
                        ->with("chucVuNguoiLap", $chucVuNguoiLap)
                        ->with("nguoiLap", $nguoiLap)
                        ->with("noiDung", $noiDung)
                        ->with("noiLamViec", $noiLamViec)
                        ->with("noiCuTru", $noiCuTru)
                        ->with("soLuongNoiLamViec", $soLuongNoiLamViec)
                        ->with("soLuongNoiCuTru", $soLuongNoiCuTru)
        );
        return $pdf->setPaper('a4')->stream();
    }

    public function TrangLapDanhSachBoiDuong() {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listChiBo = ChiBo::all();
        if ($maChiBo == "0") {
            $listDangVienMoi = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.NGAYVAODANGCHINHTHUC is null");
        } else {
            $listDangVienMoi = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.NGAYVAODANGCHINHTHUC is null and lylich.MACB = " . $maChiBo);
        }
        return View::make("trang-lap-danh-sach-boi-duong")
                        ->with("listDangVienMoi", $listDangVienMoi)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
        ;
    }

    public function TaoDanhSachBoiDuong() {
        $listChiBo = ChiBo::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $khoaNgay = Input::get("khoangay");
        $nguoiLap = Input::get("nguoiLap");
        $chucVuNguoiLap = Input::get("chucVuNguoiLap");
        $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        $dotBoiDuong = new BoiDuongDVM();
        $dotBoiDuong->NGAYBD = date("Y-m-d", strtotime($khoaNgay));
        if (BoiDuongDVM::where("NGAYBD", "=", $dotBoiDuong->NGAYBD)->count() == 0) {
            $dotBoiDuong->save();
        }
        $newDotBD = BoiDuongDVM::where("NGAYBD", "=", date("Y-m-d", strtotime($khoaNgay)))->first();
        if ($maChiBo == "0") {
            $listDangVienMoi = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.NGAYVAODANGCHINHTHUC is null");
        } else {
            $listDangVienMoi = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.NGAYVAODANGCHINHTHUC is null and lylich.MACB = " . $maChiBo);
        }


        foreach ($listDangVienMoi as $dangVien) {
            if (Input::has('chonDangVien' . $dangVien->MADANGVIEN)) {
                LyLich::where("MADANGVIEN", "=", $dangVien->MADANGVIEN)->update(array(
                    'DOTBD' => $newDotBD->DOTBD
                ));
            }
        }
        //return Redirect::to("trang-lap-danh-sach-boi-duong-dvm");
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-danh-sach-boi-duong-dvm")
                        ->with("listDangVienMoi", $listDangVienMoi)
                        ->with("chiBo", $chiBo)
                        ->with("maChiBo", $maChiBo)
                        ->with("khoaNgay", date("d-m-Y", strtotime($dotBoiDuong->NGAYBD)))
                        ->with("dotBD", $newDotBD->DOTBD)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChiBo", $listChiBo)
                        ->with("nguoiLap",$nguoiLap)
                        ->with("chucVuNguoiLap",$chucVuNguoiLap)
        );
        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }

}
