<?php

class CamTinhDangController extends Controller {

    public function TrangDanhSachCamTinhDang() {
        $listThangNam = ThangNam::all();
        $listCamTinhDang = CamTinhDang::all();
        $listChiBo = ChiBo::all();
        return View::make('danh-sach-cam-tinh-dang')
                        ->with("listThangNam", $listThangNam)
                        ->with('listCamTinhDang', $listCamTinhDang)
                        ->with("listChiBo", $listChiBo);
    }

    public function TrangThemCamTinhDang() {
        $listChiBo = ChiBo::all();
        $listDanToc = DanToc::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listTonGiao = TonGiao::all();
        $listChuyenMon = ChuyenMon::all();

        return View::make("trang-them-cam-tinh-dang")
                        ->with("listChiBo", $listChiBo)
                        ->with("listDanToc", $listDanToc)
                        ->with("listTonGiao", $listTonGiao)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChuyenMon", $listChuyenMon)
        ;
    }

    public function ThemCamTinhDang() {
        $thangNam = date("m-Y");
        if (ThangNam::where("THANGNAM", "=", $thangNam)->count() == 0) {
            $newThangNam = new ThangNam();
            $newThangNam->THANGNAM = $thangNam;
            $newThangNam->save();
        }
        $tinhTrangLyLich = Input::get("lylich");
        if ($tinhTrangLyLich == "1") {
            $lyLichNhap = true;
            $thongQuaLyLich = false;
            $vietLyLichChinh = false;
            $xacMinhLyLich = false;
        } else if ($tinhTrangLyLich == "2") {
            $lyLichNhap = true;
            $thongQuaLyLich = true;
            $vietLyLichChinh = false;
            $xacMinhLyLich = false;
        } else if ($tinhTrangLyLich == "3") {
            $lyLichNhap = true;
            $thongQuaLyLich = true;
            $vietLyLichChinh = true;
            $xacMinhLyLich = false;
        } else {
            $lyLichNhap = true;
            $thongQuaLyLich = true;
            $vietLyLichChinh = true;
            $xacMinhLyLich = true;
        }
        if (Input::has('ykiennoicutru')) {
            $ykiennoicutru = 1;
        } else {
            $ykiennoicutru = 0;
        }
        if (Input::has('ykiendoanthe')) {
            $ykiendoanthe = 1;
        } else {
            $ykiendoanthe = 0;
        }
        if (Input::has('giaygtdvhd')) {
            $giaygtdvhd = 1;
        } else {
            $giaygtdvhd = 0;
        }
        if (Input::has('giaygtdoanthe')) {
            $giaygtdoanthe = 1;
        } else {
            $giaygtdoanthe = 0;
        }
        if (Input::has('xetketnap')) {
            $xetketnap = 1;
        } else {
            $xetketnap = 0;
        }
        if (Input::has('lamdonxinvaodang')) {
            $lamdon = 1;
        } else {
            $lamdon = 0;
        }
        if (Input::has('chuyenhoso')) {
            $chuyenhoso = 1;
        } else {
            $chuyenhoso = 0;
        }
        if (Input::has('doanVien')) {
            $doanVien = 1;
        } else {
            $doanVien = 0;
        }
        $maTonGiao = Input::get("tongiao");
        if ($maTonGiao == "0") {
            $maTonGiao = null;
        }


        $camTinhDang = new CamTinhDang();
        $camTinhDang->MACB = Input::get("chiBo");
        $camTinhDang->THANGNAM = $thangNam;
        $camTinhDang->HOVATEN = Input::get("hovaten");
        $camTinhDang->DOANVIEN = $doanVien;
        $camTinhDang->NGAYCONGNHANCTD = date("Y-m-d", strtotime(Input::get("ngaycongnhan")));
        $camTinhDang->CHUNGNHANCTD = date("Y-m-d", strtotime(Input::get("ngaychungnhan")));
        $camTinhDang->LLNHAP = $lyLichNhap;
        $camTinhDang->CBTHONGQUA = $thongQuaLyLich;
        $camTinhDang->LLCHINH = $vietLyLichChinh;
        $camTinhDang->XACMINH = $xacMinhLyLich;
        $camTinhDang->YKIENCUTRU = $ykiennoicutru;
        $camTinhDang->YKIENDOANTHE = $ykiendoanthe;
        $camTinhDang->GIAYGTDANGVIEN = $giaygtdvhd;
        $camTinhDang->GIAYGTDOANTHE = $giaygtdoanthe;
        $camTinhDang->XETKETNAP = $xetketnap;
        $camTinhDang->CHUYENDANGUY = $chuyenhoso;
        $camTinhDang->NGUOIHD = Input::get("nguoihuongdan");
        $camTinhDang->VIETDON = $lamdon;
        $camTinhDang->NGAYSINH = date("Y-m-d", strtotime(Input::get("ngaysinh")));
        $camTinhDang->MADT = Input::get("dantoc");
        $camTinhDang->MATONGIAO = $maTonGiao;
        $camTinhDang->MAQUEQUAN = Input::get("quequan");
        $camTinhDang->MANOIO = Input::get("noio");
        $camTinhDang->GIOITINH = Input::get("gioitinh");
        $camTinhDang->CVCQ = Input::get("cvchinhquyen");
        $camTinhDang->CVDT = Input::get("cvdoanthe");
        $camTinhDang->save();
        return Redirect::to("trang-them-cam-tinh-dang");
    }

    public function TrangSuaCamTinhDang($maCamTinhDang) {
        $camTinhDang = CamTinhDang::where("STTCTD", "=", $maCamTinhDang)->first();
        $listChiBo = ChiBo::all();
        $listDanToc = DanToc::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listTonGiao = TonGiao::all();
        $listChuyenMon = ChuyenMon::all();
        return View::make('trang-chinh-sua-cam-tinh-dang')
                        ->with('camTinhDang', $camTinhDang)
                        ->with("listChiBo", $listChiBo)
                        ->with("listDanToc", $listDanToc)
                        ->with("listTonGiao", $listTonGiao)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChuyenMon", $listChuyenMon)
        ;
    }

    public function ChinhSuaCamTinhDang() {
        $maCamTinhDang = Input::get("maCamTinhDang");
        $tinhTrangLyLich = Input::get("lylich");
        if ($tinhTrangLyLich == "1") {
            $lyLichNhap = true;
            $thongQuaLyLich = false;
            $vietLyLichChinh = false;
            $xacMinhLyLich = false;
        } else if ($tinhTrangLyLich == "2") {
            $lyLichNhap = true;
            $thongQuaLyLich = true;
            $vietLyLichChinh = false;
            $xacMinhLyLich = false;
        } else if ($tinhTrangLyLich == "3") {
            $lyLichNhap = true;
            $thongQuaLyLich = true;
            $vietLyLichChinh = true;
            $xacMinhLyLich = false;
        } else {
            $lyLichNhap = true;
            $thongQuaLyLich = true;
            $vietLyLichChinh = true;
            $xacMinhLyLich = true;
        }
        if (Input::has('ykiennoicutru')) {
            $ykiennoicutru = 1;
        } else {
            $ykiennoicutru = 0;
        }
        if (Input::has('ykiendoanthe')) {
            $ykiendoanthe = 1;
        } else {
            $ykiendoanthe = 0;
        }
        if (Input::has('giaygtdvhd')) {
            $giaygtdvhd = 1;
        } else {
            $giaygtdvhd = 0;
        }
        if (Input::has('giaygtdoanthe')) {
            $giaygtdoanthe = 1;
        } else {
            $giaygtdoanthe = 0;
        }
        if (Input::has('xetketnap')) {
            $xetketnap = 1;
        } else {
            $xetketnap = 0;
        }
        if (Input::has('lamdonxinvaodang')) {
            $lamdon = 1;
        } else {
            $lamdon = 0;
        }
        if (Input::has('chuyenhoso')) {
            $chuyenhoso = 1;
        } else {
            $chuyenhoso = 0;
        }
        if (Input::has('doanVien')) {
            $doanVien = 1;
        } else {
            $doanVien = 0;
        }
        $maTonGiao = Input::get("tongiao");
        if ($maTonGiao == "0") {
            $maTonGiao = null;
        }
        CamTinhDang::where("STTCTD", "=", $maCamTinhDang)->update(array(
            'MACB' => Input::get("chiBo"),
            'HOVATEN' => Input::get("hovaten"),
            'DOANVIEN' => $doanVien,
            'NGAYCONGNHANCTD' => date("Y-m-d", strtotime(Input::get("ngaycongnhan"))),
            'CHUNGNHANCTD' => date("Y-m-d", strtotime(Input::get("ngaychungnhan"))),
            'LLNHAP' => $lyLichNhap,
            'CBTHONGQUA' => $thongQuaLyLich,
            'LLCHINH' => $vietLyLichChinh,
            'XACMINH' => $xacMinhLyLich,
            'YKIENCUTRU' => $ykiennoicutru,
            'YKIENDOANTHE' => $ykiendoanthe,
            'GIAYGTDANGVIEN' => $giaygtdvhd,
            'GIAYGTDOANTHE' => $giaygtdoanthe,
            'XETKETNAP' => $xetketnap,
            'CHUYENDANGUY' => $chuyenhoso,
            'NGUOIHD' => Input::get("nguoihuongdan"),
            'VIETDON' => $lamdon,
            'NGAYSINH' => date("Y-m-d", strtotime(Input::get("ngaysinh"))),
            'MADT' => Input::get("dantoc"),
            'MATONGIAO' => $maTonGiao,
            'MAQUEQUAN' => Input::get("quequan"),
            'MANOIO' => Input::get("noio"),
            'GIOITINH' => Input::get("gioitinh"),
            'CVCQ' => Input::get("cvchinhquyen"),
            'CVDT' => Input::get("cvdoanthe")
        ));
        return Redirect::to("danh-sach-cam-tinh-dang");
    }

    public function InDanhSachCamTinhDang($maChiBo, $thangNam) {
        $listCamTinhDang = CamTinhDang::where("MACB", "=", $maChiBo)
                ->where("THANGNAM", "<=", $thangNam)
                ->get();

        $listChiBo = ChiBo::all();
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-danh-sach-cam-tinh-dang")
                        ->with("listCamTinhDang", $listCamTinhDang)
                        ->with("listChiBo", $listChiBo)
                        ->with("maChiBoChon", $maChiBo)
                        ->with("thangNamChon", $thangNam)
        );
        return $pdf->setPaper('a3')->setOrientation('landscape')->stream();
    }

    public function LocCamTinhDang() {
        $maChiBo = Input::get("maChiBo");
        $thangNam = Input::get("thangNam");
        $listCamTinhDang = CamTinhDang::where("MACB", "=", $maChiBo)
                ->where("THANGNAM", "<=", $thangNam)
                ->get();
        $listThangNam = ThangNam::all();
        $listChiBo = ChiBo::all();
        return View::make('danh-sach-cam-tinh-dang')
                        ->with("listThangNam", $listThangNam)
                        ->with('listCamTinhDang', $listCamTinhDang)
                        ->with("listChiBo", $listChiBo)
                        ->with("maChiBoChon", $maChiBo)
                        ->with("thangNamChon", $thangNam);
    }

    public function TrangLapDanhSachDiHoc($maChiBo) {
        if ($maChiBo == "0") {
            $listCamTinhDang = CamTinhDang::all();
            $chiBo = new ChiBo();
        } else {
            $listCamTinhDang = CamTinhDang::where("MACB", "=", $maChiBo)->get();
            $chiBo = ChiBo::where("MACB", "=", $maChiBo)->first();
        }
        return View::make("trang-lap-danh-sach-di-hoc")
                        ->with("listCamTinhDang", $listCamTinhDang)
                        ->with("chiBo", $chiBo)
        ;
    }

    public function InDanhSachDiHoc() {
        $maChiBo = Input::get("maChiBo");
        $listChiBo = ChiBo::all();
        $listDanToc = DanToc::all();
        $listTonGiao = TonGiao::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $khoaNgay = date("d-m-Y", strtotime(Input::get("khoangay")));
        if($maChiBo == 0){
            $listCamTinhDang = CamTinhDang::all();
        } else {
            $listCamTinhDang = CamTinhDang::where("MACB", "=", $maChiBo)->get();
        }
        $listCTD = CamTinhDang::all()->take(0);
        $listChuyenMon = ChuyenMon::all();
        foreach ($listCamTinhDang as $camTinhDang) {
            if (Input::has($camTinhDang->STTCTD)) {
                $listCTD->push($camTinhDang);
            }
        }

        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-danh-sach-ctd-cu-di-hoc")
                        ->with("listCamTinhDang", $listCTD)
                        ->with("listChiBo", $listChiBo)
                        ->with("khoaNgay", $khoaNgay)
                        ->with("maChiBoChon", $maChiBo)
                        ->with("listDanToc", $listDanToc)
                        ->with("listTonGiao", $listTonGiao)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listChuyenMon", $listChuyenMon)
        );
        return $pdf->setPaper('a3')->setOrientation('landscape')->stream();
    }

    public function TrangXinYKien(){
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $listCamTinhDang = CamTinhDang::where("MACB","=",$maChiBo)->get();
        return View::make("trang-xin-y-kien-cam-tinh-dang")->with("listCamTinhDang",$listCamTinhDang);
    }
    
    public function InPhieuXinYKien(){
        $chiBo = ChiBo::where("MACB","=",Input::get("maChiBo"))->first();
        $loaiPhieu = Input::get("loaiPhieu"); //0 hoac 1
        $camTinhDang = CamTinhDang::where("STTCTD","=",Input::get("camTinhDang"))->first();
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
        foreach($listTinh as $tinh){
            foreach($listHuyen as $huyen){
                foreach ($listXa as $xa){
                    if ( $xa->MAPX == $camTinhDang->maquequan && $huyen->MAQH == $xa->MAQH && $huyen->MATT == $tinh->MATT ){
                        $queQuan = $xa->TENPX.", ".$huyen->TENQH.", ".$tinh->TENTT;
                    }
                }
            }
        }
        
        $pdf = App::make('dompdf');
        $pdf->loadHTML(
                View::make("in-phieu-xin-y-kien-ctd")
                        ->with("chiBo", $chiBo)
                        ->with("loaiPhieu", $loaiPhieu)
                        ->with("camTinhDang", $camTinhDang)
                        ->with("cuTru", $cuTru)
                        ->with("soTanThanh", $soTanThanh)
                        ->with("soKhongTanThanh", $soKhongTanThanh)
                        ->with("lyDoKhongTanThanh",$lyDoKhongTanThanh)
                        ->with("chucVuNguoiLap", $chucVuNguoiLap)
                        ->with("nguoiLap", $nguoiLap)
                        ->with("noiGoiDen",$noiGoiDen)
                        ->with("queQuan",$queQuan)
        );
        return $pdf->setPaper('a4')->stream();
    }
    
    
    public function TrangTongHopYKien(){
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $listCamTinhDang = CamTinhDang::where("MACB","=",$maChiBo)->get();
        return View::make("trang-tong-hop-y-kien-cam-tinh-dang")->with("listCamTinhDang",$listCamTinhDang);
    }
    
    public function InPhieuTongHop(){
        $chiBo = ChiBo::where("MACB","=",Input::get("maChiBo"))->first();
        $camTinhDang = CamTinhDang::where("STTCTD","=",Input::get("camTinhDang"))->first();
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
                View::make("in-phieu-tong-hop-y-kien-cam-tinh-dang")
                        ->with("chiBo", $chiBo)
                        ->with("camTinhDang", $camTinhDang)
                        ->with("soTanThanh", $soTanThanh)
                        ->with("soKhongTanThanh", $soKhongTanThanh)
                        ->with("lyDoKhongTanThanh",$lyDoKhongTanThanh)
                        ->with("chucVuNguoiLap", $chucVuNguoiLap)
                        ->with("nguoiLap", $nguoiLap)
                        ->with("noiDung",$noiDung)
                        ->with("noiLamViec",$noiLamViec)
                        ->with("noiCuTru",$noiCuTru)
                        ->with("soLuongNoiLamViec",$soLuongNoiLamViec)
                        ->with("soLuongNoiCuTru",$soLuongNoiCuTru)
        );
        return $pdf->setPaper('a4')->stream();
    }
}
