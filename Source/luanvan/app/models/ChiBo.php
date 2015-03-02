<?php
class ChiBo extends Eloquent{
    public $table="CHIBO";
    public $timestamps = false;
    
     public function TaiKhoan()
    {
        return $this->hasOne('TaiKhoan');
    }
}
