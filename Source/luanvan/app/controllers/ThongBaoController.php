<?php

//quib1204061@student.ctu.edu.vn gửi mẫu phát triển phần mềm

class ThongBaoController extends Controller {

    public function TrangThongBao() {
        $listThongBao = ThongBao::all();
        return View::make("trang-thong-bao")
                        ->with("listThongBao", $listThongBao);
    }

    public function TrangThemThongBao() {
        $listThongBao = ThongBao::all();
        return View::make("trang-them-thong-bao")
                        ->with("listThongBao", $listThongBao);
    }

    public function ThemThongBao() {
        $maChiBo = Session::get("maChiBoTaiKhoan");
        $tenThongBao = Input::get("tenThongBao");
        $noiDung = Input::get("noiDung");

        $thongBao = new ThongBao();
        $thongBao->NGAY = date("Y-m-d");
        if (Ngay::where("NGAY", "=", date("Y-m-d"))->count() == 0) {
            $ngay = new Ngay();
            $ngay->NGAY = date("Y-m-d");
            $ngay->save();
        }
        $thongBao->TENTB = $tenThongBao;
        $thongBao->NOIDUNG = $noiDung;
        $thongBao->MACB = $maChiBo;
        $thongBao->save();

        return Redirect::to("trang-them-thong-bao");
    }

    public function XemThongBao($sttTB){
        $thongBao = ThongBao::where("STTTB","=",$sttTB)->first();
        
        return View::make("xem-thong-bao")->with("thongBao",$thongBao);
    }
}
