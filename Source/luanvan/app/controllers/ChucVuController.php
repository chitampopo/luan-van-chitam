<?php

class ChucVuController extends Controller {

    public function TrangChucVu() {
        $listChucVu = ChucVu::all();
        return View::make('cap-nhat-danh-muc-chuc-vu')->with('listChucVu', $listChucVu);
    }

    public function ThemChucVu() {
        $tenchucvu = Input::get("tenchucvu");
        $chucvu = new ChucVu();
        $chucvu->TENCV = $tenchucvu;
        $chucvu->save();

        return Redirect::to('cap-nhat-danh-muc-chuc-vu');
    }

    public function TrangCapNhatChucVu() {
        $listChiBo = ChiBo::all();
        $listNhiemKy = NhiemKy::all();
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if ($maChiBo == "0") {
            $listDangVien = DB::table('dangvien')
                    ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
                    ->where("dangvien.XOA", "=", "0")
                    ->get();
        } else{
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = ".$maChiBo);
        }
        $listChucVu = ChucVu::all();
        return View::make("cap-nhat-chuc-vu")
                        ->with("listChiBo", $listChiBo)
                        ->with('listNhiemKy', $listNhiemKy)
                        ->with('listDangVien', $listDangVien)
                        ->with("listChucVu", $listChucVu)
                        ->with("maChiBoChon", "0")
                        ->with("maNhiemKy", "1")
                        ->with("listGiuChucVu", GiuChucVu::all())
        ;
    }

    public function LocTrangCapNhatChucVu() {
        $maChiBo = Input::get("maChiBoChon");
        $maNhiemKy = Input::get("maNhiemKy");
        $listChucVu = ChucVu::all();
        $listChiBo = ChiBo::all();
        $listNhiemKy = NhiemKy::all();
        $listGiuCV = GiuChucVu::all();
        if ($maChiBo == "0") {
            $listDangVien = DB::table('dangvien')
                    ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
                    ->where("dangvien.XOA", "=", "0")
                    ->get();
        } else {
            $listDangVien = DB::table('dangvien')
                    ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
                    ->where("dangvien.XOA", "=", "0")
                    ->where("lylich.MACB", "=", $maChiBo)
                    ->get();
        }
        return View::make("cap-nhat-chuc-vu")
                        ->with("maChiBoChon", $maChiBo)
                        ->with("maNhiemKy", $maNhiemKy)
                        ->with("listChiBo", $listChiBo)
                        ->with('listNhiemKy', $listNhiemKy)
                        ->with('listDangVien', $listDangVien)
                        ->with("listChucVu", $listChucVu)
                        ->with("listGiuChucVu", $listGiuCV)
        ;
    }

    public function ThemCapNhatChucVu() {
        $maChiBo = Input::get("maChiBoDuocChon");
        $maNhiemKy = Input::get("maNhiemKyDuocChon");
        $listMaDangVien = Input::get("listSubmit");
        $listMaDangVienNew = substr($listMaDangVien, 1);
        $array = explode(",", $listMaDangVienNew);
        $listChucVu = ChucVu::all();
        
        foreach ($array as $item) {
            $giucv = new GiuChucVu();
            $giucv->MANHIEMKY = $maNhiemKy;
            $giucv->MACV = Input::get("maChucVu" . $item);
            $giucv->MADANGVIEN = $item;
            if ($giucv->MACV != "0" && $giucv->MACV != null && count(DB::select("select * from giucv where MANHIEMKY = ".$giucv->MANHIEMKY." and MACV = ".$giucv->MACV." and MADANGVIEN = ".$giucv->MADANGVIEN))==0) {
                $giucv->save();
            } 
        }
        return Redirect::to("cap-nhat-chuc-vu");
    }


    public function InLyLichTrichNgangPDF() {
        $maNhiemKy = Input::get("maNhiemKyDuocChon");
        $nhiemKy = NhiemKy::where("MANHIEMKY", "=", $maNhiemKy)->first();
        $chucVuNguoiLap = Input::get("chucVuNguoiLap");
        $nguoiLap = Input::get("nguoiLap");
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listTheDang = TheDang::all();
        
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if($maChiBo == "0"){
            $listChiBo = ChiBo::all();
        } else{
            $listChiBo = ChiBo::where("MACB","=",$maChiBo)->get();
        }

        //$listDangVien = DB::select('select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0');
        $pdf = App::make('dompdf');
        $pdf->loadHTML(View::make("in-danh-sach-ly-lich")
                        ->with("listChiBo", $listChiBo)
                        ->with("nhiemKy", $nhiemKy)
                        ->with("chucVuNguoiLap", $chucVuNguoiLap)
                        ->with("nguoiLap", $nguoiLap)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listTheDang", $listTheDang)
        );
        return $pdf->setPaper('a3')->setOrientation('landscape')->stream();
    }

}
