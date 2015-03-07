<?php

Route::get('/', function() {
    return View::make('menu');
});

Route::get('dang-nhap', 'TaiKhoanController@TrangDangNhap');

Route::post('dang-nhap-action', 'TaiKhoanController@DangNhap');

Route::get('cap-nhat-danh-muc-chi-bo', 'ChiBoController@TrangChiBo');

Route::post('chi-bo-action', 'ChiBoController@ThemChiBo');
                                        
Route::get('cap-nhat-danh-muc-chuc-vu', 'ChucVuController@TrangChucVu');

Route::post('chuc-vu-action', 'ChucVuController@ThemChucVu');

Route::get('cap-nhat-danh-muc-chuyen-mon', 'ChuyenMonController@TrangChuyenMon');

Route::post('chuyen-mon-action', 'ChuyenMonController@ThemChuyenMon');

Route::get('cap-nhat-danh-muc-dan-toc', 'DanTocController@TrangDanToc');

Route::post('dan-toc-action', 'DanTocController@ThemDanToc');

Route::get('cap-nhat-danh-muc-hinh-thuc-kl', 'HinhThucKLController@TrangHinhThucKL');

Route::post('hinh-thuc-kl-action', 'HinhThucKLController@ThemHinhThucKL');

Route::get('cap-nhat-danh-muc-hinh-thuc-kt', 'HinhThucKTController@TrangHinhThucKT');

Route::post('hinh-thuc-kt-action', 'HinhThucKTController@ThemHinhThucKT');

Route::get('cap-nhat-danh-muc-hoc-ham', 'HocHamController@TrangHocHam');

Route::post('hoc-ham-action', 'HocHamController@ThemHocHam');

Route::get('cap-nhat-danh-muc-hoc-vi', 'HocViController@TrangHocVi');

Route::post('hoc-vi-action', 'HocViController@ThemHocVi');

Route::get('cap-nhat-danh-muc-luong-cb', 'LuongCBController@TrangLuongCB');

Route::post('them-luong-cb-action', 'LuongCBController@ThemLuongCB');

Route::get('cap-nhat-danh-muc-nghe-nghiep', 'NgheNghiepController@TrangNgheNghiep');

Route::post('nghe-nghiep-action', 'NgheNghiepController@ThemNgheNghiep');

Route::get('cap-nhat-danh-muc-nghiep-vu', 'NghiepVuController@TrangNghiepVu');

Route::post('nghiep-vu-action', 'NghiepVuController@ThemNghiepVu');

Route::get('cap-nhat-danh-muc-ngoai-ngu', 'NgoaiNguController@TrangNgoaiNgu');

Route::post('ngoai-ngu-action', 'NgoaiNguController@ThemNgoaiNgu');

Route::get('cap-nhat-danh-muc-ton-giao', 'TonGiaoController@TrangTonGiao');

Route::post('ton-giao-action', 'TonGiaoController@ThemTonGiao');

Route::get('cap-nhat-danh-muc-dia-chi', 'PhuongXaController@TrangDiaChi');

Route::post('dia-chi-action', 'TinhThanhController@ThemDiaChi');

Route::get('cap-nhat-danh-muc-nhiem-ky', 'NhiemKyController@TrangNhiemKy');

Route::post('nhiem-ky-action', 'NhiemKyController@ThemNhiemKy');

Route::get('cap-nhat-danh-muc-trinh-do-vh', 'TrinhDoVHController@TrangTrinhDoVH');

Route::post('trinh-do-vh-action', 'TrinhDoVHController@ThemTrinhDoVH');

Route::get('cap-nhat-danh-muc-trinh-do-ct', 'TrinhDoCTController@TrangTrinhDoCT');

Route::post('trinh-do-ct-action', 'TrinhDoCTController@ThemTrinhDoCT');

Route::get('cap-nhat-ngay', 'NgayController@TrangNgay');

Route::post('ngay-action', 'NgayController@ThemNgay');

Route::get('cap-nhat-dang-vien', 'DangVienController@TrangCapNhatDangVien');

Route::post('dang-vien-action', 'DangVienController@CapNhatDangVien');

Route::get('trang-chinh-sua-dang-vien/{maDangVien}', 'DangVienController@TrangCapNhatThongTinDangVien')->where('maDangVien', '[0-9]+');

Route::post('cap-nhat-dang-vien-action', 'DangVienController@CapNhatThongTinDangVien');

Route::get('xoa-dang-vien/{maDangVien}', 'DangVienController@XoaDangVien')->where("maDangVien", '[0-9]+');

Route::get('trang-bao-loi', function(){
    return View::make("trang-bao-loi");
});

Route::get('danh-sach-dang-vien', 'DangVienController@TrangDanhSachDangVien');

Route::post('danh-sach-dang-vien-action', 'DangVienController@LietKeDangVien');

Route::get('in-so-dang-tich', 'DangVienController@InSoDangTich');

Route::get('trang-in-so-dang-tich', function(){
    return View::make("in-so-dang-tich");
});

