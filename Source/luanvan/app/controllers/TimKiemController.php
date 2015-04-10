<?php

class TimKiemController extends Controller {

    public function TrangTimKiem() {
        return View::make("trang-tim-kiem");
    }

    public function autocomplete() {
        $term = Input::get('term');

        $results = array();

        $queries = DB::select("select * from tinhthanh, quanhuyen, phuongxa where (phuongxa.MAQH = quanhuyen.MAQH and quanhuyen.MATT = tinhthanh.MATT ) and (tinhthanh.TENTT like '%".$term."%' or quanhuyen.TENQH like '%".$term."%' or phuongxa.TENPX like '%".$term."%')");

        foreach ($queries as $query) {
            $results[] = [ 'id' => $query->MAPX, 'value' => $query->TENPX . ', ' . $query->TENQH.', '.$query->TENTT];
        }
        return Response::json($results);
    }

    public function TimKiemDangVien(){
        echo Input::get("loai");
        if(Input::get("loai")==null){
            echo "Địa chỉ mới";
        }
    }
}
