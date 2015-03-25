<?php

Route::get('/', 'TaiKhoanController@TrangDangNhap');

Route::post('dang-nhap-action', 'TaiKhoanController@DangNhap');

Route::get('dang-xuat', 'TaiKhoanController@DangXuat');

Route::get('cap-nhat-danh-muc-chi-bo', array("before" => "filter.dangnhap", "uses" => "ChiBoController@TrangChiBo"));

Route::post('chi-bo-action', 'ChiBoController@ThemChiBo');

Route::get('cap-nhat-danh-muc-chuc-vu', array("before" => "filter.dangnhap", "uses" => 'ChucVuController@TrangChucVu'));

Route::post('chuc-vu-action', 'ChucVuController@ThemChucVu');

Route::get('cap-nhat-danh-muc-chuyen-mon', array("before" => "filter.dangnhap", "uses" => 'ChuyenMonController@TrangChuyenMon'));

Route::post('chuyen-mon-action', 'ChuyenMonController@ThemChuyenMon');

Route::get('cap-nhat-danh-muc-dan-toc', array("before" => "filter.dangnhap", "uses" => 'DanTocController@TrangDanToc'));

Route::post('dan-toc-action', 'DanTocController@ThemDanToc');

Route::get('cap-nhat-danh-muc-hinh-thuc-kl', array("before" => "filter.dangnhap", "uses" => 'HinhThucKLController@TrangHinhThucKL'));

Route::post('hinh-thuc-kl-action', 'HinhThucKLController@ThemHinhThucKL');

Route::get('cap-nhat-danh-muc-hinh-thuc-kt', array("before" => "filter.dangnhap", "uses" => 'HinhThucKTController@TrangHinhThucKT'));

Route::post('hinh-thuc-kt-action', 'HinhThucKTController@ThemHinhThucKT');

Route::get('cap-nhat-danh-muc-hoc-ham', array("before" => "filter.dangnhap", "uses" => 'HocHamController@TrangHocHam'));

Route::post('hoc-ham-action', 'HocHamController@ThemHocHam');

Route::get('cap-nhat-danh-muc-hoc-vi', array("before" => "filter.dangnhap", "uses" => 'HocViController@TrangHocVi'));

Route::post('hoc-vi-action', 'HocViController@ThemHocVi');

Route::get('cap-nhat-danh-muc-luong-cb', array("before" => "filter.dangnhap", "uses" => 'LuongCBController@TrangLuongCB'));

Route::post('them-luong-cb-action', 'LuongCBController@ThemLuongCB');

Route::get('cap-nhat-danh-muc-nghe-nghiep', array("before" => "filter.dangnhap", "uses" => 'NgheNghiepController@TrangNgheNghiep'));

Route::post('nghe-nghiep-action', 'NgheNghiepController@ThemNgheNghiep');

Route::get('cap-nhat-danh-muc-nghiep-vu', array("before" => "filter.dangnhap", "uses" => 'NghiepVuController@TrangNghiepVu'));

Route::post('nghiep-vu-action', 'NghiepVuController@ThemNghiepVu');

Route::get('cap-nhat-danh-muc-ngoai-ngu', array("before" => "filter.dangnhap", "uses" => 'NgoaiNguController@TrangNgoaiNgu'));

Route::post('ngoai-ngu-action', 'NgoaiNguController@ThemNgoaiNgu');

Route::get('cap-nhat-danh-muc-ton-giao', array("before" => "filter.dangnhap", "uses" => 'TonGiaoController@TrangTonGiao'));

Route::post('ton-giao-action', 'TonGiaoController@ThemTonGiao');

Route::get('cap-nhat-danh-muc-dia-chi', array("before" => "filter.dangnhap", "uses" => 'PhuongXaController@TrangDiaChi'));

Route::post('dia-chi-action', 'TinhThanhController@ThemDiaChi');

Route::get('cap-nhat-danh-muc-nhiem-ky', array("before" => "filter.dangnhap", "uses" => 'NhiemKyController@TrangNhiemKy'));

Route::post('nhiem-ky-action', 'NhiemKyController@ThemNhiemKy');

Route::get('cap-nhat-danh-muc-trinh-do-vh', array("before" => "filter.dangnhap", "uses" => 'TrinhDoVHController@TrangTrinhDoVH'));

Route::post('trinh-do-vh-action', 'TrinhDoVHController@ThemTrinhDoVH');

Route::get('cap-nhat-danh-muc-trinh-do-ct', array("before" => "filter.dangnhap", "uses" => 'TrinhDoCTController@TrangTrinhDoCT'));

Route::post('trinh-do-ct-action', 'TrinhDoCTController@ThemTrinhDoCT');

Route::get('cap-nhat-ngay', 'NgayController@TrangNgay');

Route::post('ngay-action', 'NgayController@ThemNgay');

Route::get('cap-nhat-dang-vien', array("before" => "filter.dangnhap", "uses" => 'DangVienController@TrangCapNhatDangVien'));

Route::post('dang-vien-action', 'DangVienController@CapNhatDangVien');

Route::get('trang-chinh-sua-dang-vien/{maDangVien}', array("before" => "filter.dangnhap", "uses" => 'DangVienController@TrangCapNhatThongTinDangVien'))->where('maDangVien', '[0-9]+');

Route::post('cap-nhat-dang-vien-action', 'DangVienController@CapNhatThongTinDangVien');

Route::get('xoa-dang-vien/{maDangVien}', array("before" => "filter.dangnhap", "uses" => 'DangVienController@XoaDangVien'))->where("maDangVien", '[0-9]+');

Route::get('trang-bao-loi', function() {
    return View::make("trang-bao-loi");
});

Route::get('danh-sach-dang-vien', array("before" => "filter.dangnhap", "uses" => 'DangVienController@TrangDanhSachDangVien'));

Route::post('danh-sach-dang-vien', 'DangVienController@LietKeDangVien');

Route::get('in-so-dang-tich/{maChiBo}', array("before" => "filter.dangnhap", "uses" => 'DangVienController@InSoDangTich'))->where("maChiBo", '[0-9]+');

Route::get('danh-sach-dang-vien-pdf/{maChiBo}', array("before" => "filter.dangnhap", "uses" => 'DangVienController@InDanhSachDangVienPDF'))->where("maChiBo", '[0-9]+');

Route::get('trang-in-so-dang-tich', function() {
    return View::make("in-so-dang-tich");
});

Route::get('in-danh-sach-dang-vien/{maChiBo}', array("before" => "filter.dangnhap", "uses" => 'DangVienController@xuatFileWord'))->where("maChiBo", '[0-9]+');

Route::get('cap-nhat-chuc-vu', array("before" => "filter.dangnhap", "uses" => 'ChucVuController@TrangCapNhatChucVu'));

Route::get('cap-nhat-chuc-vu1/{maChiBo}/{maNhiemKy}', 'ChucVuController@TrangCapNhatChucVu1')->where("maChiBo", '[0-9]+')->where("maNhiemKy", '[0-9]+');

Route::post('filter-cap-nhat-chuc-vu', 'ChucVuController@LocTrangCapNhatChucVu');

Route::post('cap-nhat-chuc-vu-action', 'ChucVuController@ThemCapNhatChucVu');

Route::post('in-ly-lich-trich-ngang', 'ChucVuController@InLyLichTrichNgangPDF');

Route::get('danh-sach-ly-lich-pdf/', array("before" => "filter.dangnhap", "uses" => 'ChucVuController@InLyLichTrichNgangPDF'));

Route::get("trang-so-cong-van-den", array("before" => "filter.dangnhap", "uses" => "CongVanDenController@TrangCongVanDen"));

Route::post("them-cong-van-den", "CongVanDenController@ThemCongVanDen");

Route::get("ket-xuat-so-cong-van-den", array("before" => "filter.dangnhap", "uses" => "CongVanDenController@KetXuatSo"));

Route::get("trang-so-cong-van-di", array("before" => "filter.dangnhap", "uses" => "CongVanDiController@TrangCongVanDi"));

Route::post("them-cong-van-di", "CongVanDiController@ThemCongVanDi");

Route::get("ket-xuat-so-cong-van-di", array("before" => "filter.dangnhap", "uses" => "CongVanDiController@KetXuatSo"));

Route::get("trang-dang-phi", array("before" => "filter.dangnhap", "uses" => "DangPhiController@TrangDangPhi"));

Route::get("danh-sach-cam-tinh-dang", array("before" => "filter.dangnhap", "uses" => "CamTinhDangController@TrangDanhSachCamTinhDang"));

Route::get("trang-them-cam-tinh-dang", array("before" => "filter.dangnhap", "uses" => "CamTinhDangController@TrangThemCamTinhDang"));

Route::post("them-cam-tinh-dang-action", "CamTinhDangController@ThemCamTinhDang");

Route::get("trang-sua-cam-tinh-dang/{maCamTinhDang}", array("before" => "filter.dangnhap", "uses" => "CamTinhDangController@TrangSuaCamTinhDang"))->where("camTinhDang", "[0-9]+");

Route::post("chinh-sua-cam-tinh-dang-action", "CamTinhDangController@ChinhSuaCamTinhDang");

Route::post("filter-cam-tinh-dang", "CamTinhDangController@LocCamTinhDang");

Route::get("in-danh-sach-cam-tinh-dang/{maChiBo}/{thangNam}", 
        array("before" => "filter.dangnhap", "uses" => "CamTinhDangController@InDanhSachCamTinhDang"))
        ->where("camTinhDang", "[0-9]+")
        ->where("thangNam","[0-9]{2}-[0-9]{4}");

Route::get("lap-danh-sach-di-hoc/{maChiBo}", array("before" => "filter.dangnhap", "uses" => "CamTinhDangController@TrangLapDanhSachDiHoc"))->where("maChiBo", "[0-9]+");

Route::post("in-danh-sach-hoc-cam-tinh-dang", "CamTinhDangController@InDanhSachDiHoc");

Route::get("trang-xin-y-kien-cam-tinh-dang", array("before" => "filter.dangnhap", "uses" => "CamTinhDangController@TrangXinYKien"));

Route::post("in-phieu-xin-y-kien-cam-tinh-dang","CamTinhDangController@InPhieuXinYKien");

Route::get("trang-tong-hop-y-kien-cam-tinh-dang", array("before" => "filter.dangnhap", "uses" => "CamTinhDangController@TrangTongHopYKien"));

Route::post("in-phieu-tong-hop-y-kien-cam-tinh-dang", "CamTinhDangController@InPhieuTongHop");

Route::get("trang-xin-y-kien-dang-vien-moi", array("before" => "filter.dangnhap", "uses" => "DangVienMoiController@TrangXinYKien"));

Route::post("in-phieu-xin-y-kien-dang-vien-moi","DangVienMoiController@InPhieuXinYKien");

Route::get("trang-tong-hop-y-kien-dang-vien-moi", array("before" => "filter.dangnhap", "uses" => "DangVienMoiController@TrangTongHopYKien"));

Route::post("in-phieu-tong-hop-y-kien-dang-vien-moi", "DangVienMoiController@InPhieuTongHop");

Route::get("trang-nghi-quyet-ket-nap", array("before" => "filter.dangnhap", "uses" => "NQQDController@TrangNQKetNap"));

Route::post("in-nghi-quyet-ket-nap", "NQQDController@InNQKetNap");

Route::get("trang-nghi-quyet-cong-nhan", array("before" => "filter.dangnhap", "uses" => "NQQDController@TrangNQCongNhan"));

Route::post("in-nghi-quyet-cong-nhan", "NQQDController@InNQCongNhan");

Route::get("trang-lap-quyet-dinh", array("before" => "filter.dangnhap", "uses" => "NQQDController@TrangLapQD"));

Route::post("in-quyet-dinh", "NQQDController@InQD");

Route::get("trang-danh-gia-dang-vien", array("before" => "filter.dangnhap", "uses" => "DanhGiaXepLoaiController@TrangDanhGia"));

Route::post("filter-danh-gia", "DanhGiaXepLoaiController@LocDanhSach");

Route::post("luu-danh-gia", "DanhGiaXepLoaiController@LuuDanhGia");

Route::get("trang-danh-gia-chi-bo", array("before" => "filter.dangnhap", "uses" => "DanhGiaXepLoaiController@TrangDanhGiaChiBo"));

Route::post("luu-danh-gia-chi-bo", "DanhGiaXepLoaiController@LuuDanhGiaChiBo");

Route::post("filter-danh-gia-chi-bo", "DanhGiaXepLoaiController@LocDanhSachChiBo");

Route::get("trang-lap-danh-sach-boi-duong-dvm", array("before" => "filter.dangnhap", "uses" => "DangVienMoiController@TrangLapDanhSachBoiDuong"));

Route::post("in-danh-sach-boi-duong-dvm", "DangVienMoiController@TaoDanhSachBoiDuong");

Route::get("trang-cap-the-moi", array("before" => "filter.dangnhap", "uses" => "TheDangVienController@TrangCapTheMoi"));

Route::post("in-danh-sach-cap-the-moi", "TheDangVienController@LapDanhSachCapTheMoi");

Route::get("trang-cap-lai-the-bi-mat", array("before" => "filter.dangnhap", "uses" => "TheDangVienController@TrangCapTheLaiBiMat"));

Route::post("in-danh-sach-cap-the-bi-mat", "TheDangVienController@LapDanhSachCapTheBiMat");

Route::get("trang-cap-lai-the-bi-hong", array("before" => "filter.dangnhap", "uses" => "TheDangVienController@TrangCapTheLaiBiHong"));

Route::post("in-danh-sach-cap-the-bi-hong", "TheDangVienController@LapDanhSachCapTheBiHong");

Route::get("trang-cap-huy-hieu-dang", array("before" => "filter.dangnhap", "uses" => "HuyHieuDangController@TrangCapHuyHieuDang"));

Route::post("in-danh-sach-cap-the-huy-hieu-dang", "HuyHieuDangController@LapDanhSachCapHuyHieuDang");

Route::get("trang-cap-lai-huy-hieu-dang", array("before" => "filter.dangnhap", "uses" => "HuyHieuDangController@TrangCapLaiHuyHieuDang"));

Route::post("in-danh-sach-cap-lai-the-huy-hieu-dang", "HuyHieuDangController@LapDanhSachCapLaiHuyHieuDang");

Route::post("filter-trang-cap-lai-huy-hieu-dang", "HuyHieuDangController@LocTrangCapLaiHuyHieuDang");
