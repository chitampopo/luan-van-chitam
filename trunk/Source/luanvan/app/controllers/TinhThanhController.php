<?php

class TinhThanhController extends Controller {

    public function TrangDiaChi() {
        $list = PhuongXa::all();
        return View::make('cap-nhat-danh-muc-dia-chi')->with('list', $list);
    }

    public function ThemTinhThanh($tentinhthanh) {
        $tinhthanh = new TinhThanh();
        $tinhthanh->TENTT = $tentinhthanh;
        $tinhthanh->save();
    }

    public function ThemDiaChi() {
        $tentinhthanh = Input::get("tinhthanh");
        $tenquanhuyen = Input::get("quanhuyen");
        $tenphuongxa = Input::get("phuongxa");

        $countTinhThanh = TinhThanh::where("TENTT", "=", $tentinhthanh)->count();
        if ($countTinhThanh == 0){
            $tinhThanh = new TinhThanh;
            $tinhThanh->TENTT = $tentinhthanh;
            $tinhThanh->save();
            $tinhThanh = TinhThanh::where("TENTT","=",$tentinhthanh)->firstOrFail();
        } else{
            $tinhThanh = TinhThanh::where("TENTT","=",$tentinhthanh)->firstOrFail();
        }
        
        $countQuanHuyen = Quanhuyen::where("TENQH",'=',$tenquanhuyen)->count();
        if($countQuanHuyen==0){
            $quanHuyen = new QuanHuyen;
            $quanHuyen->TENQH = $tenquanhuyen;
            $quanHuyen->MATT = $tinhThanh->MATT;
            $quanHuyen->save();
            $quanHuyen = QuanHuyen::where("TENQH",'=',$tenquanhuyen)->firstOrFail();
        } else{
            $quanHuyen = QuanHuyen::where("TENQH",'=',$tenquanhuyen)->firstOrFail();
        }

        $phuongxa = new PhuongXa;
        $phuongxa->TENPX = $tenphuongxa;
        $phuongxa->MAQH = $quanHuyen->MAQH;
        $phuongxa->save();

        return Redirect::to('cap-nhat-danh-muc-dia-chi');
    }

}
