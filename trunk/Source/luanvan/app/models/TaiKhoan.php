<?php
class TaiKhoan extends Eloquent{
    public $table="TAIKHOAN";
    public $timestamps = false;
    
    public function ChiBo()
    {
        return $this->belongsTo('ChiBo');
    }
    
    public static function check_login($username, $password){
        $check = TaiKhoan::where("TENTAIKHOAN","=",$username)->where("MATKHAU","=",$password)->count();
        if($check==1){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
}
