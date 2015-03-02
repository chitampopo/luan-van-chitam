<?php

class PhuongXa extends Eloquent{
    public $table="PHUONGXA";
    public $timestamps = false;
    
    
    public function quanhuyen(){
        $quanHuyen = QuanHuyen::where("MAQH","=",$this->MAQH)->firstOrFail();
        return $quanHuyen;
    }
    
    public function themnoisinh($madangvien, $maphuongxa){
        $dangvien = DangVien::where("MADANGVIEN","=",$madangvien);
        $dangvien -> MAPX = $maphuongxa;
        $dangvien->save();
    }
    
    public function themquequan($madangvien, $maphuongxa){
        $dangvien = DangVien::where("MADANGVIEN","=",$madangvien);
        $dangvien -> PHU_MAPX = $maphuongxa;
        $dangvien->save();
    }
    
    public function themnoithuongtru($madangvien, $maphuongxa){
        $dangvien = DangVien::where("MADANGVIEN","=",$madangvien);
        $dangvien -> PHU_MAPX2 = $maphuongxa;
        $dangvien->save();
    }
    
    public function themnoitamtru($madangvien, $maphuongxa){
        $dangvien = DangVien::where("MADANGVIEN","=",$madangvien);
        $dangvien -> PHU_MAPX3 = $maphuongxa;
        $dangvien->save();
    }
}


