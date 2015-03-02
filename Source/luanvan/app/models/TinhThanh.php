<?php

class TinhThanh extends Eloquent{
    public $table="TINHTHANH";
    public $timestamps = false;
    
    public function quanhuyen(){
        return $this->hasMany('QuanHuyen', 'MATT');
    }
    
}
