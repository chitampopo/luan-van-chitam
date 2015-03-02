<?php

class QuanHuyen extends Eloquent{
    public $table="QUANHUYEN";
    public $timestamps = false;
    
    public function phuongxa(){
        return $this->hasMany('PhuongXa', 'MAQH');
    }
    
    public function tinhthanh(){
        $tinhThanh = TinhThanh::where("MATT","=",$this->MATT)->firstOrFail();
        return $tinhThanh;
    }
}
