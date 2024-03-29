<?php

class DangVienController extends Controller {

    public function TrangCapNhatDangVien() {
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listTonGiao = TonGiao::all();
        $listNgheNghiep = NgheNghiep::all();
        $listDanToc = DanToc::all();
        $listHocHam = HocHam::all();
        $listHocVi = HocVi::all();
        $listNgoaiNgu = NgoaiNgu::all();
        $listTrinhDoVH = TrinhDoVH::all();
        $listTrinhDoCT = TrinhDoCT::all();
        $listChuyenMon = ChuyenMon::all();
        $listNghiepVu = NghiepVu::all();
        $listChiBo = ChiBo::all();
        $listHTKT = HinhThucKT::all();
        $listHTKL = HinhThucKL::all();

        return View::make('cap-nhat-dang-vien')
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listTonGiao", $listTonGiao)
                        ->with("listNgheNghiep", $listNgheNghiep)
                        ->with("listDanToc", $listDanToc)
                        ->with("listHocHam", $listHocHam)
                        ->with("listHocVi", $listHocVi)
                        ->with("listNgoaiNgu", $listNgoaiNgu)
                        ->with("listTrinhDoVH", $listTrinhDoVH)
                        ->with("listTrinhDoCT", $listTrinhDoCT)
                        ->with("listChuyenMon", $listChuyenMon)
                        ->with("listNghiepVu", $listNghiepVu)
                        ->with("listChiBo", $listChiBo)
                        ->with("listHTKT", $listHTKT)
                        ->with("listHTKL", $listHTKL);
    }

    public function CapNhatDangVien() {
        //////////////////////////
        //////Bảng Đảng viên//////
        $dangVien = new DangVien();
        //Họ tên khai sinh
        $tenKhaiSinh = Input::get("hotenkhaisinh");
        $dangVien->HOTENKHAISINH = $tenKhaiSinh;
        //Họ tên đang sử dụng
        $tenSuDung = Input::get("hotensudung");
        $dangVien->HOTENSUDUNG = $tenSuDung;
        //Bí danh
        $biDanh = Input::get("bidanh");
        $dangVien->BIDANH = $biDanh;
        //Upload hình ảnh Đảng viên
        if (Input::file('hinhanh') != null) {
            //Input::file('hinhanh')->getClientOriginalName()
            $hinhAnh = Input::file('hinhanh')->getClientOriginalName();
            Input::file('hinhanh')->move(base_path() . '/storage/directory', $hinhAnh);
            $dangVien->HINHANH = $hinhAnh;
        } else {
            $dangVien->HINHANH = null;
        }
        
        //Giới tính
        $gioiTinh = Input::get("gioitinh");
        $dangVien->GIOITINH = $gioiTinh;
        //Ngày sinh
        $ngaySinh = date("Y-m-d", strtotime(Input::get("ngaysinh")));
        $dangVien->NGAYSINH = $ngaySinh;
        //Nơi sinh MAPX
        $noiSinh = Input::get("noisinh");
        $dangVien->MAPX = $noiSinh;
        //Quê quán PHU_MAPX
        $queQuan = Input::get("quequan");
        $dangVien->PHU_MAPX = $queQuan;
        //Thường trú PHU_MAPX3
        $thuongTru = Input::get("thuongtru");
        $dangVien->PHU_MAPX3 = $thuongTru;
        //Tạm trú PHU_MAPX2
        $tamTru = Input::get("tamtru");
        if ($tamTru != "0") {
            $dangVien->PHU_MAPX2 = $tamTru;
        }
        //Dân tộc
        $maDanToc = Input::get("dantoc");
        $dangVien->MADT = $maDanToc;
        //Tôn giáo
        $maTonGiao = Input::get("tongiao");
        if ($maTonGiao != "0") {
            $dangVien->MATONGIAO = $maTonGiao;
        }
        //Nghề nghiệp
        $maNgheNghiepDangLam = Input::get("nghenghiepdanglam");
        $dangVien->MANN = $maNgheNghiepDangLam;
        //Người giới thiệu 1
        $nguoiGioiThieu1 = Input::get("nguoigioithieu1");
        $dangVien->NGUOIGT1 = $nguoiGioiThieu1;
        //Chức vụ người giới thiệu 2
        $chucVuNguoiGioiThieu1 = Input::get("cvnguoigioithieu1");
        $dangVien->CVNGUOIGT1 = $chucVuNguoiGioiThieu1;
        //Người giới thiệu 2
        $nguoiGioiThieu2 = Input::get("nguoigioithieu2");
        $dangVien->NGUOIGT2 = $nguoiGioiThieu2;
        //Chức vụ người giới thiệu 2
        $chucVuNguoiGioiThieu2 = Input::get("cvnguoigioithieu2");
        $dangVien->CVNGUOIGT2 = $chucVuNguoiGioiThieu2;
        //Trình độ văn hóa
        $trinhDoVH = Input::get("trinhdovh");
        $dangVien->MATRINHDOVH = $trinhDoVH;
        //Chuyên môn
        $chuyenMon = Input::get("chuyenmon");
        if ($chuyenMon != "0") {
            $dangVien->MACM = $chuyenMon;
        }
        //Nghiệp vụ
        $nghiepVu = Input::get("nghiepvu");
        if ($nghiepVu != "0") {
            $dangVien->MANV = $nghiepVu;
        }
        //Học vị
        $hocVi = Input::get("hocvi");
        if ($hocVi != "0") {
            $dangVien->MAHOCVI = $hocVi;
        }
        //Học hàm
        $hocHam = Input::get("hocham");
        if ($hocHam != "0") {
            $dangVien->MAHOCHAM = $hocHam;
        }
        //Sức khỏe
        $sucKhoe = Input::get("suckhoe");
        $dangVien->SUCKHOE = $sucKhoe;
        //Thương binh
        $thuongBinh = new ThuongBinh();
        $maLoaiTB = Input::get("thuongbinh");
        $thuongBinh->LOAITB = $maLoaiTB;
        //Liệt sĩ
        if (Input::has("lietsi")) {
            $giaDinhLietSi = 1;
        } else {
            $giaDinhLietSi = 0;
        }
        $dangVien->GDLIETSI = $giaDinhLietSi;
        //Cách mạng
        if (Input::has("giadinhcm")) {
            $giaDinhCM = 1;
        } else {
            $giaDinhCM = 0;
        }
        $dangVien->COCONGCM = $giaDinhCM;

        //Chứng minh nhân dân
        $soCMND = Input::get("cmnd");
        $dangVien->CMND = $soCMND;
        //Số điện thoại
        $sdt = Input::get("dienthoai");
        $dangVien->SDT = $sdt;
        //Email
        $email = Input::get("email");
        $dangVien->EMAIL = $email;
        //Save Đảng viên
        $dangVien->XOA = false;
        $dangVien->save();

        //////////////////////////
        //////Bảng lý lịch///////
        $lylich = new LyLich();
        //Chi bộ
        $maChiBo = Input::get("chibo");
        $lylich->MACB = $maChiBo;
        //Nghề nghiệp khi vào Đảng
        $maNgheNghiepVaoDang = Input::get("nghenghiepkhivaodang");
        $lylich->NGHENGHIEPTRUOCKHIVAODANG = $maNgheNghiepVaoDang;
        //Ngày vào Đảng
        $ngayVaoDang = date("Y-m-d", strtotime(Input::get("ngayvaodang")));
        $lylich->NGAYVAODANG = $ngayVaoDang;
        //Chi bộ vào Đảng
        $chiBoVaoDang = Input::get("noivaodang");
        $lylich->CBVAODANG = $chiBoVaoDang;
        //Ngày vào Đảng chính thức
        $ngayVaoDangChinhThuc = date("Y-m-d", strtotime(Input::get("ngaychinhthuc")));
        //Chi bộ vào Đảng vào Đảng chính thức
        $chiBoVaoDangChinhThuc = Input::get("taichibochinhthuc");
        if ($ngayVaoDangChinhThuc != null && $chiBoVaoDangChinhThuc != null) {
            $lylich->CBVAODANGCHINHTHUC = $chiBoVaoDangChinhThuc;
            $lylich->NGAYVAODANGCHINHTHUC = $ngayVaoDangChinhThuc;
        }
        //Vào Đoàn
        $vaoDoan = new DoanTNCSHCM();
        $ngayVaoDoan = date("Y-m-d", strtotime(Input::get("ngayvaodoan")));
        $vaoDoan->NGAYVAODOAN = $ngayVaoDoan;
        $noiVaoDoan = Input::get("noivaodoan");
        $vaoDoan->NOIVAODOAN = $noiVaoDoan;
        //Trình độ chính trị
        $trinhDoCT = Input::get("trinhdoct");
        $lylich->MATRINHDOCT = $trinhDoCT;
        //Miễn công tác và sinh hoạt Đảng
        $mienCT = date("Y-m-d", strtotime(Input::get("mienct")));
        $lylich->MIENCT_SHD = $mienCT;
        //Thẻ Đảng viên
        $maTheDV = Input::get("thedang");
        $theDang = new TheDang();
        $theDang->SOTHE = $maTheDV;
        $theDang->NGAYCAPTHE = date("Y-m-d", strtotime(Input::get("ngaycapthedang")));
        //Số lý lịch
        $soLyLich = Input::get("lylich");
        $lylich->SOLL = $soLyLich;
        //Hệ số lương
        $heSoLuong = Input::get("hsluong");
        $lylich->HSLUONG = $heSoLuong;
        //Phụ cấp chức vụ
        $phuCapCV = Input::get("pcchucvu");
        $lylich->HSCHUCVU = $phuCapCV;
        //Phụ cấp thâm niên
        $phuCapThamNien = Input::get("thamnien");
        $lylich->HSTHAMNIEN = $phuCapThamNien;
        //Phụ cấp vượt khung
        $phuCapVuotKhung = Input::get("vuotkhung");
        $lylich->HSVUOTKHUNG = $phuCapVuotKhung;
        //Save lý lịch Đảng viên
        $dangVienTemp = DangVien::where('CMND', '=', $soCMND)->firstOrFail();
        $maDangVien = $dangVienTemp->MADANGVIEN;
        $lylich->MADANGVIEN = $maDangVien;
        $lylich->save();
        //Xuất nhập ngũ
        $ngayNhapNgu = date("Y-m-d", strtotime(Input::get("nhapngu")));
        $ngayXuatNgu = date("Y-m-d", strtotime(Input::get("xuatngu")));
        if ($ngayNhapNgu != null && $ngayXuatNgu != null) {
            $xuatNhapNgu = new XuatNhapNgu();
            $xuatNhapNgu->NGAYNHAPNGU = $ngayNhapNgu;
            $xuatNhapNgu->NGAYXUATNGU = $ngayXuatNgu;
        }
        //Từ trần
        $ngayTuTran = date("Y-m-d", strtotime(Input::get("ngaytutran")));
        $lyDoTuTran = Input::get("lydotutran");
        if ($ngayTuTran != null && $lyDoTuTran != null) {
            $tuTran = new TuTran();
            $tuTran->NGAYTUTRAN = $ngayTuTran;
            $tuTran->LYDOTUTRAN = $lyDoTuTran;
        }
        //Khen thưởng
        $dsKhenThuong = Input::get("ktkhenthuong");
        $dsKhenThuongNew = substr($dsKhenThuong, 1);
        $array = explode("+", $dsKhenThuongNew);
        foreach ($array as $item) {
            $khenthuong = new KhenThuongDV();
            $khenthuong->MADANGVIEN = $maDangVien;
            $maHinhThucKhenThuong = Input::get("khenthuong" . $item);
            $khenthuong->MAHTKT = $maHinhThucKhenThuong;
            $ngayLapKhenThuong = date("Y-m-d", strtotime(Input::get("ngaykt" . $item)));
            $khenthuong->NGAYLAPKT = $ngayLapKhenThuong;
            $khenthuong->NAM = date("Y", strtotime(Input::get("ngaykt" . $item)));
            $nam = new Nam();
            $nam->NAM = date("Y", strtotime(Input::get("ngaykt" . $item)));
            if (Nam::where("NAM", "=", $nam->NAM)->count() == 0) {
                $nam->save();
            }
            $khenthuong->CAPQUYETDINH = Input::get("capkt" . $item);

            if (Input::get("khenthuong" . $item) != "0") {
                $khenthuong->save();
            }
        }
        
        //Kỷ luật
        $kyLuat = substr(Input::get("ktkyluat"), 1);
        $dsKyLuat = explode("+", $kyLuat);
        foreach ($dsKyLuat as $item) {
            $kl = new KyLuatDV();
            $kl->MADANGVIEN = $maDangVien;
            $maHinhThucKyLuat = Input::get("kyluat" . $item);
            $kl->MAHTKL = $maHinhThucKyLuat;
            $kl->NAM = Input::get("ngaykl" . $item);
            $nam = new Nam();
            $nam->NAM = Input::get("ngaykl" . $item);
            if (Nam::where("NAM", "=", $nam)->count() == 0) {
                $nam->save();
            }
            $kl->LYDOKLDV = Input::get("lydokl" . $item);
            if (Input::get("kyluat" . $item) != "0") {
                $kl->save();
            }
        }
        //Huy hiệu Đảng
        $huyHieu = substr(Input::get("kthuyhieu"), 1);
        $dsHuyHieu = explode("+", $huyHieu);
        foreach ($dsHuyHieu as $item) {
            $hh = new HuyHieuDang();
            $hh->MADANGVIEN = $maDangVien;
            $hh->TENHH = Input::get("huyhieu" . $item);
            $hh->NGAYCAPHH = date("Y-m-d", strtotime(Input::get("ngayhh" . $item)));
            if (Input::get("huyhieu" . $item) != null && Input::get("ngayhh" . $item) != null) {
                $hh->save();
            }
        }
        //Ngoại ngữ
        $ngoaiNgu = substr(Input::get("ktngoaingu"), 1);
        $dsNgoaiNgu = explode("+", $ngoaiNgu);
        foreach ($dsNgoaiNgu as $item) {
            $nn = new CoTrinhDoNN();
            $nn->MADANGVIEN = $maDangVien;
            $nn->MANGOAINGU = Input::get("trinhdongoaingu" . $item);
            if (Input::get("trinhdongoaingu" . $item) != "0") {
                $nn->save();
            }
        }

        //Quá trình công tác
        $congTac = substr(Input::get("ktcongtac"), 1);
        $dsCongTac = explode("+", $congTac);
        foreach ($dsCongTac as $item) {
            $ct = new QuaTrinhCT();
            $ct->MADANGVIEN = $maDangVien;
            $ct->LAMCV = Input::get("ctchucvu" . $item);
            $ct->DONVI = Input::get("ctdonvi" . $item);
            $ct->NGAYNHANCV = date("Y-m-d", strtotime(Input::get("cttungay" . $item)));
            $ct->NGAYHETCV = date("Y-m-d", strtotime(Input::get("ctdenngay" . $item)));
            if (Input::get("ctchucvu" . $item) != null &&
                    Input::get("ctdonvi" . $item) != null &&
                    Input::get("cttungay" . $item) != null &&
                    Input::get("ctdenngay" . $item) != null) {
                $ct->save();
            }
        }
        //Quá trình đào tạo
        $daoTao = substr(Input::get("ktdaotao"), 1);
        $dsDaoTao = explode("+", $daoTao);
        foreach ($dsDaoTao as $item) {
            $dt = new QuaTrinhDT();
            $dt->MADANGVIEN = $maDangVien;
            $dt->TENTRUONG = Input::get("dttruong" . $item);
            $dt->NGANHHOC = Input::get("dtnganh" . $item);
            $dt->NAMDB = Input::get("dttu" . $item);
            $dt->NAMKT = Input::get("dtden" . $item);
            $dt->HINHTHUCHOC = Input::get("dthinhthuc" . $item);
            $dt->VB_CC = Input::get("dtvanbang" . $item);
            if (Input::get("dttruong" . $item) != null &&
                    Input::get("dtnganh" . $item) != null &&
                    Input::get("dttu" . $item) != null &&
                    Input::get("dtden" . $item) != null &&
                    Input::get("dthinhthuc" . $item) != null &&
                    Input::get("dtvanbang" . $item) != null) {
                $dt->save();
            }
        }
        //Đi nước ngoài
        $nuocNgoai = substr(Input::get("ktnuocngoai"), 1);
        $dsDiNuocNgoai = explode("+", $nuocNgoai);
        foreach ($dsDiNuocNgoai as $item) {
            $dnn = new DiNuocNgoai();
            $dnn->MADANGVIEN = $maDangVien;
            $dnn->QUOCGIA = Input::get("nnquocgia" . $item);
            $dnn->LYDODI = Input::get("nnlido" . $item);
            $dnn->NGAYDI = date("Y-m-d", strtotime(Input::get("nntungay" . $item)));
            $dnn->NGAYVE = date("Y-m-d", strtotime(Input::get("nndenngay" . $item)));
            if (Input::get("nnquocgia" . $item) != null &&
                    Input::get("nnlido" . $item) != null &&
                    Input::get("nntungay" . $item) != null &&
                    Input::get("nndenngay" . $item) != null) {
                $dnn->save();
            }
        }
        //Người thân
        $nguoiThan = substr(Input::get("ktnguoithan"), 1);
        $dsNguoiThan = explode("+", $nguoiThan);
        foreach ($dsNguoiThan as $item) {
            $nt = new NguoiThanNT();
            $nt->MADANGVIEN = $maDangVien;
            $nt->STTNT = $item;
            $nt->TENNT = Input::get("nthoten" . $item);
            $nt->NOICUTRU = Input::get("ntcutru" . $item);
            $nt->QUANHE = Input::get("ntquanhe" . $item);
            $nt->NGHENGHIEP = Input::get("ntnghenghiep" . $item);
            $nt->DACDIEMCT = Input::get("ntddct" . $item);
            $nt->NGAYSINHNT = date("Y-m-d", strtotime(Input::get("ntnamsinh" . $item)));

            if (Input::get("nthoten" . $item) != null &&
                    Input::get("ntcutru" . $item) != null &&
                    Input::get("ntnghenghiep" . $item) != null &&
                    Input::get("ntquanhe" . $item) != null &&
                    Input::get("ntnamsinh" . $item) != null &&
                    Input::get("ntddct" . $item) != null) {
                $nt->save();
            }
        }
        //Save Đảng viên rồi mới save vào Đoàn
        if (Input::get("ngayvaodoan") != null && Input::get("noivaodoan") != null) {
            $vaoDoan->MADANGVIEN = $maDangVien;
            $vaoDoan->save();
        }
        //Save Thương binh
        if ($maLoaiTB != "0") {
            $thuongBinh->MADANGVIEN = $maDangVien;
            $thuongBinh->save();
        }
        //Save thẻ Đảng
        if ($maTheDV != null) {
            $theDang->MADANGVIEN = $maDangVien;
            $theDang->save();
        }
        //Save xuat nhap ngu
        if ($ngayNhapNgu != null && $ngayXuatNgu != null) {
            $xuatNhapNgu->MADANGVIEN = $maDangVien;
            $xuatNhapNgu->save();
        }
        //Save từ trần
        if ($ngayTuTran != null && $lyDoTuTran != null) {
            $tuTran->MADANGVIEN = $maDangVien;
            $tuTran->save();
        }
        return Redirect::to('trang-chinh-sua-dang-vien/' . $maDangVien);
    }

    public function TrangCapNhatThongTinDangVien($maDangVien) {
        $daXoa = DangVien::where("MADANGVIEN", "=", $maDangVien)->first()->XOA;
        if ($daXoa == 1) {
            return Redirect::to('trang-bao-loi');
        }

        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listTonGiao = TonGiao::all();
        $listNgheNghiep = NgheNghiep::all();
        $listDanToc = DanToc::all();
        $listHocHam = HocHam::all();
        $listHocVi = HocVi::all();
        $listNgoaiNgu = NgoaiNgu::all();
        $listTrinhDoVH = TrinhDoVH::all();
        $listTrinhDoCT = TrinhDoCT::all();
        $listChuyenMon = ChuyenMon::all();
        $listNghiepVu = NghiepVu::all();
        $listChiBo = ChiBo::all();
        $listHTKT = HinhThucKT::all();
        $listHTKL = HinhThucKL::all();
        $dangVien = DangVien::where("MADANGVIEN", "=", $maDangVien)->first();
        $dangVien->NGAYSINH = date("d-m-Y", strtotime($dangVien->NGAYSINH));
        $lyLich = LyLich::where("MADANGVIEN", "=", $maDangVien)->first();
        if ($lyLich->MIENCT_SHD == "1970-01-01") {
            $lyLich->MIENCT_SHD = null;
        } else {
            $lyLich->MIENCT_SHD = date("d-m-Y", strtotime($lyLich->MIENCT_SHD));
        }
        $lyLich->NGAYVAODANG = date("d-m-Y", strtotime($lyLich->NGAYVAODANG));

        $vaoDoan = DOANTNCSHCM::where("MADANGVIEN", "=", $maDangVien)->first();
        if ($vaoDoan == null) {
            $vaoDoan = new DOANTNCSHCM();
            $vaoDoan->NGAYVAODOAN = null;
            $vaoDoan->NOIVAODOAN = null;
        }
        $theDang = TheDang::where("MADANGVIEN", "=", $maDangVien)->first();
        if ($theDang == null) {
            $theDang = new TheDang();
            $theDang->SOTHE = null;
            $theDang->NGAYCAPTHE = date("d-m-Y", strtotime($theDang->NGAYCAPTHE));
        } else {
            $theDang->NGAYCAPTHE = date("d-m-Y", strtotime($theDang->NGAYCAPTHE));
        }
        $xuatNhapNgu = XuatNhapNgu::where("MADANGVIEN", "=", $maDangVien)->first();

        if ($xuatNhapNgu == null) {
            $xuatNhapNgu = new XuatNhapNgu;
            $xuatNhapNgu->NGAYNHAPNGU = null;
            $xuatNhapNgu->NGAYXUATNGU = null;
        } else {
            $xuatNhapNgu->NGAYNHAPNGU = date("d-m-Y", strtotime($xuatNhapNgu->NGAYNHAPNGU));
            $xuatNhapNgu->NGAYXUATNGU = date("d-m-Y", strtotime($xuatNhapNgu->NGAYXUATNGU));
        }
        $tuTran = TuTran::where("MADANGVIEN", "=", $maDangVien)->first();

        if ($tuTran == null) {
            $tuTran = new TuTran();
            $tuTran->NGAYTUTRAN = null;
            $tuTran->LYDOTUTRAN = null;
        } else {
            $tuTran->NGAYTUTRAN = date("d-m-Y", strtotime($tuTran->NGAYTUTRAN));
        }
        $thuongBinh = ThuongBinh::where("MADANGVIEN", "=", $maDangVien)->first();
        if ($thuongBinh == null) {
            $thuongBinh = new ThuongBinh;
            $thuongBinh->LOAITB = "0";
        }

        $khenThuongDangVien = KhenThuongDV::where("MADANGVIEN", "=", $maDangVien)->get();
        $dsKhenThuong = KhenThuongDV::where("MADANGVIEN", "=", $maDangVien)->get()->count();

        if (KhenThuongDV::where("MADANGVIEN", "=", $maDangVien)->get()->count() == 0) {
            $khenThuong = new KhenThuongDV();
            $khenThuong->MADANGVIEN = $maDangVien;
            $khenThuong->MAHTKT = "0";
            $khenThuong->NGAYLAPKT = "";
            $khenThuong->NAM = "";
            $khenThuong->CAPQUYETDINH = "";
            $khenThuongDangVien->push($khenThuong);
        }

        $kyLuatDangVien = KyLuatDV::where("MADANGVIEN", "=", $maDangVien)->get();
        $dsKyLuat = KyLuatDV::where("MADANGVIEN", "=", $maDangVien)->get()->count();
        if (KyLuatDV::where("MADANGVIEN", "=", $maDangVien)->get()->count() == 0) {
            $kyLuat = new KyLuatDV();
            $kyLuat->MADANGVIEN = $maDangVien;
            $kyLuat->MAHTKL = "0";
            $kyLuat->NAM = "";
            $kyLuatDangVien->LYDOKLDV = "";
            $kyLuatDangVien->push($kyLuat);
        }

        $huyHieuDang = HuyHieuDang::where("MADANGVIEN", "=", $maDangVien)->get();
        $dsHuyHieu = HuyHieuDang::where("MADANGVIEN", "=", $maDangVien)->get()->count();
        if (HuyHieuDang::where("MADANGVIEN", "=", $maDangVien)->get()->count() == 0) {
            $huyHieu = new HuyHieuDang();
            $huyHieu->MADANGVIEN = $maDangVien;
            $huyHieu->TENHH = "";
            $huyHieu->NGAYCAPHH = "";
            $huyHieuDang->push($huyHieu);
        }

        $danhSachNgoaiNgu = CoTrinhDoNN::where("MADANGVIEN", "=", $maDangVien)->get();
        $dsNgoaiNgu = CoTrinhDoNN::where("MADANGVIEN", "=", $maDangVien)->get()->count();
        if (CoTrinhDoNN::where("MADANGVIEN", "=", $maDangVien)->get()->count() == 0) {
            $trinhDoNN = new CoTrinhDoNN();
            $trinhDoNN->MADANGVIEN = $maDangVien;
            $trinhDoNN->MANN = "0";
            $danhSachNgoaiNgu->push($trinhDoNN);
        }

        $quaTrinhCongTac = QuaTrinhCT::where("MADANGVIEN", "=", $maDangVien)->get();
        $dsCongTac = QuaTrinhCT::where("MADANGVIEN", "=", $maDangVien)->get()->count();
        if (QuaTrinhCT::where("MADANGVIEN", "=", $maDangVien)->get()->count() == 0) {
            $quaTrinhCT = new QuaTrinhCT();
            $quaTrinhCT->MADANGVIEN = $maDangVien;
            $quaTrinhCT->LAMCV = "";
            $quaTrinhCT->DONVI = "";
            $quaTrinhCT->NGAYNHANCV = "";
            $quaTrinhCT->NGAYHETCV = "";
            $quaTrinhCongTac->push($quaTrinhCT);
        }

        $quaTrinhDaoTao = QuaTrinhDT::where("MADANGVIEN", "=", $maDangVien)->get();
        $dsDaoTao = QuaTrinhDT::where("MADANGVIEN", "=", $maDangVien)->get()->count();
        if (QuaTrinhDT::where("MADANGVIEN", "=", $maDangVien)->get()->count() == 0) {
            $quaTrinhDT = new QuaTrinhDT();
            $quaTrinhDT->MADANGVIEN = $maDangVien;
            $quaTrinhDT->TENTRUONG = "";
            $quaTrinhDT->NGANHHOC = "";
            $quaTrinhDT->NAMDB = "";
            $quaTrinhDT->NAMKT = "";
            $quaTrinhDT->HINHTHUCHOC = "";
            $quaTrinhDT->VB_CC = "";
            $quaTrinhDaoTao->push($quaTrinhDT);
        }

        $diNuocNgoai = DiNuocNgoai::where("MADANGVIEN", "=", $maDangVien)->get();
        $dsNuocNgoai = DiNuocNgoai::where("MADANGVIEN", "=", $maDangVien)->get()->count();
        if (DiNuocNgoai::where("MADANGVIEN", "=", $maDangVien)->get()->count() == 0) {
            $diNN = new DiNuocNgoai();
            $diNN->MADANGVIEN = $maDangVien;
            $diNN->QUOCGIA = "";
            $diNN->LYDODI = "";
            $diNN->NGAYDI = "";
            $diNN->NGAYVE = "";
            $diNuocNgoai->push($diNN);
        }

        $danhSachNguoiThan = NguoiThanNT::where("MADANGVIEN", "=", $maDangVien)->get();
        $dsNguoiThan = NguoiThanNT::where("MADANGVIEN", "=", $maDangVien)->get()->count();
        if (NguoiThanNT::where("MADANGVIEN", "=", $maDangVien)->get()->count() == 0) {
            $nguoiThan = new NguoiThanNT();
            $nguoiThan->MADANGVIEN = $maDangVien;
            $nguoiThan->TENNT = "";
            $nguoiThan->NOICUTRU = "";
            $nguoiThan->QUANHE = "";
            $nguoiThan->NGHENGHIEP = "";
            $nguoiThan->DACDIEMCT = "";
            $nguoiThan->NGAYSINHNT = "";
            $danhSachNguoiThan->push($nguoiThan);
        }
        return View::make("chinh-sua-dang-vien")
                        ->with("dangVien", $dangVien)
                        ->with("lyLich", $lyLich)
                        ->with("listTinh", $listTinh)
                        ->with("listHuyen", $listHuyen)
                        ->with("listXa", $listXa)
                        ->with("listTonGiao", $listTonGiao)
                        ->with("listNgheNghiep", $listNgheNghiep)
                        ->with("listDanToc", $listDanToc)
                        ->with("listHocHam", $listHocHam)
                        ->with("listHocVi", $listHocVi)
                        ->with("listNgoaiNgu", $listNgoaiNgu)
                        ->with("listTrinhDoVH", $listTrinhDoVH)
                        ->with("listTrinhDoCT", $listTrinhDoCT)
                        ->with("listChuyenMon", $listChuyenMon)
                        ->with("listNghiepVu", $listNghiepVu)
                        ->with("listChiBo", $listChiBo)
                        ->with("listHTKT", $listHTKT)
                        ->with("listHTKL", $listHTKL)
                        ->with("vaoDoan", $vaoDoan)
                        ->with("theDang", $theDang)
                        ->with("xuatNhapNgu", $xuatNhapNgu)
                        ->with("tuTran", $tuTran)
                        ->with("thuongBinh", $thuongBinh)
                        ->with("khenThuongDangVien", $khenThuongDangVien)
                        ->with("kyLuatDangVien", $kyLuatDangVien)
                        ->with("huyHieuDang", $huyHieuDang)
                        ->with("danhSachNgoaiNgu", $danhSachNgoaiNgu)
                        ->with("quaTrinhCongTac", $quaTrinhCongTac)
                        ->with("quaTrinhDaoTao", $quaTrinhDaoTao)
                        ->with("diNuocNgoai", $diNuocNgoai)
                        ->with("danhSachNguoiThan", $danhSachNguoiThan)
                        ->with("danhSachKhenThuong", $dsKhenThuong)
                        ->with("danhSachKyLuat", $dsKyLuat)
                        ->with("danhSachHuyHieu", $dsHuyHieu)
                        ->with("danhSachCongTac", $dsCongTac)
                        ->with("danhSachDaoTao", $dsDaoTao)
                        ->with("danhSachKTNgoaiNgu", $dsNgoaiNgu)
                        ->with("danhSachNuocNgoai", $dsNuocNgoai)
                        ->with("danhSachKTNguoiThan", $dsNguoiThan)
        ;
    }

    public function CapNhatThongTinDangVien() {
        //////////////////////////
        //////Bảng Đảng viên//////
        $maDangVien = Input::get("maDangVien");
        //Upload hình ảnh Đảng viên
        if (Input::file('hinhanh') != null) {
            //Input::file('hinhanh')->getClientOriginalName()
            $hinhAnh = Input::file('hinhanh')->getClientOriginalName();
            Input::file('hinhanh')->move(base_path() . '/storage/directory', $hinhAnh);
            DangVien::where("MADANGVIEN", "=", $maDangVien)->update(array('HINHANH' => $hinhAnh));
        }
        //Tạm trú PHU_MAPX2
        if (Input::get("tamtru") != "0") {
            $tamTru = Input::get("tamtru");
            DangVien::where("MADANGVIEN", "=", $maDangVien)->update(array('PHU_MAPX2' => $tamTru));
        } else {
            DangVien::where("MADANGVIEN", "=", $maDangVien)->update(array('PHU_MAPX2' => null));
        }
        //Tôn giáo
        $maTonGiao = Input::get("tongiao");
        if ($maTonGiao == "0") {
            $maTonGiao = null;
        }
        //Chuyên môn
        $chuyenMon = Input::get("chuyenmon");
        if ($chuyenMon == "0") {
            $chuyenMon = null;
        }
        //Nghiệp vụ
        $nghiepVu = Input::get("nghiepvu");
        if ($nghiepVu == "0") {
            $nghiepVu = null;
        }
        //Học vị
        $hocVi = Input::get("hocvi");
        if ($hocVi == "0") {
            $hocVi = null;
        }
        //Học hàm
        $hocHam = Input::get("hocham");
        if ($hocHam == "0") {
            $hocHam = null;
        }
        //Thương binh
        ThuongBinh::where("MADANGVIEN", "=", $maDangVien)->update(array('LOAITB' => Input::get("thuongbinh")));

        //Gia đình liệt sĩ
        $giaDinhLietSi = 0;
        if (Input::has('lietsi')) {
            $giaDinhLietSi = 1;
        }
        //Cách mạng
        if (Input::has("giadinhcm")) {
            $giaDinhCM = 1;
        } else {
            $giaDinhCM = 0;
        }

        //Đảng viên
        DangVien::where("MADANGVIEN", "=", $maDangVien)->update(
                array(
                    //Họ tên khai sinh
                    'HOTENKHAISINH' => Input::get("hotenkhaisinh"),
                    //Họ tên sử dụng
                    'HOTENSUDUNG' => Input::get("hotensudung"),
                    //Bí danh
                    'BIDANH' => Input::get("bidanh"),
                    //Giới tính
                    'GIOITINH' => Input::get("gioitinh"),
                    //Ngày sinh
                    'NGAYSINH' => date("Y-m-d", strtotime(Input::get("ngaysinh"))),
                    //Nơi sinh MAPX
                    'MAPX' => Input::get("noisinh"),
                    //Quê quán PHU_MAPX
                    'PHU_MAPX' => Input::get("quequan"),
                    //Thường trú PHU_MAPX3
                    'PHU_MAPX3' => Input::get("thuongtru"),
                    //Dân tộc
                    'MADT' => Input::get("dantoc"),
                    //Tôn giáo
                    'MATONGIAO' => $maTonGiao,
                    //Nghề nghiệp
                    'MANN' => Input::get("nghenghiepdanglam"),
                    //Người giới thiệu 1
                    'NGUOIGT1' => Input::get("nguoigioithieu1"),
                    //Chức vụ người giới thiệu 2
                    'CVNGUOIGT1' => Input::get("cvnguoigioithieu1"),
                    //Người giới thiệu 2
                    'NGUOIGT2' => Input::get("nguoigioithieu2"),
                    //Chức vụ người giới thiệu 2
                    'CVNGUOIGT2' => Input::get("cvnguoigioithieu2"),
                    //Trình độ văn hóa
                    'MATRINHDOVH' => Input::get("trinhdovh"),
                    //Chuyên môn
                    'MACM' => $chuyenMon,
                    //Nghiệp vụ
                    'MANV' => $nghiepVu,
                    //Học vị
                    'MAHOCVI' => $hocVi,
                    //Học hàm
                    'MAHOCHAM' => $hocHam,
                    //Sức khỏe
                    'SUCKHOE' => Input::get("suckhoe"),
                    //Liệt sĩ
                    'GDLIETSI' => $giaDinhLietSi,
                    //Gia đình có công cách mạng
                    'COCONGCM' => $giaDinhCM,
                    //Chứng minh nhân dân
                    'CMND' => Input::get("cmnd"),
                    //Số điện thoại
                    'SDT' => Input::get("dienthoai"),
                    //Email
                    'EMAIL' => Input::get("email"),
        ));

        //Ngày vào Đảng chính thức
        $ngayVaoDangChinhThuc = date("Y-m-d", strtotime(Input::get("ngaychinhthuc")));
        //Chi bộ vào Đảng vào Đảng chính thức
        $chiBoVaoDangChinhThuc = Input::get("taichibochinhthuc");

        if ($ngayVaoDangChinhThuc != null && $chiBoVaoDangChinhThuc != null) {
            LyLich::where("MADANGVIEN", "=", $maDangVien)->update(
                    array('NGAYVAODANGCHINHTHUC' => $ngayVaoDangChinhThuc,
                        'CBVAODANGCHINHTHUC' => $chiBoVaoDangChinhThuc));
        }

        //Thẻ Đảng viên
        $maTheDV = Input::get("thedang");
        $ngayCapTheDV = Input::get("ngaycapthedang");
        if ($maTheDV != null && $ngayCapTheDV != null) {
            TheDang::where("MADANGVIEN", "=", $maDangVien)->update(
                    array(
                        'SOTHE' => Input::get("thedang"),
                        'NGAYCAPTHE' => Input::get("ngaycapthedang")
            ));
        }
        //Vào Đoàn
        $ngayVaoDoan = date("Y-m-d", strtotime(Input::get("ngayvaodoan")));
        $noiVaoDoan = Input::get("noivaodoan");

        if ($ngayVaoDoan != null && $noiVaoDoan != null) {
            DOANTNCSHCM::where("MADANGVIEN", "=", $maDangVien)->update(
                    array('NGAYVAODOAN' => $ngayVaoDoan,
                        'NOIVAODOAN' => $noiVaoDoan));
        }

        LyLich::where("MADANGVIEN", "=", $maDangVien)->update(
                array(
                    //Chi bộ
                    'MACB' => Input::get("chibo"),
                    //Nghề nghiệp khi vào Đảng
                    'NGHENGHIEPTRUOCKHIVAODANG' => Input::get("nghenghiepkhivaodang"),
                    //Ngày vào Đảng
                    'NGAYVAODANG' => date("Y-m-d", strtotime(Input::get("ngayvaodang"))),
                    //Chi bộ vào Đảng
                    'CBVAODANG' => Input::get("noivaodang"),
                    //Trình độ chính trị
                    'MATRINHDOCT' => Input::get("trinhdoct"),
                    //Miễn công tác và sinh hoạt đảng
                    'MIENCT_SHD' => date("Y-m-d", strtotime(Input::get("mienct"))),
                    //Số lý lịch
                    'SOLL' => Input::get("lylich"),
                    //Hệ số lương
                    'HSLUONG' => Input::get("hsluong"),
                    //Phụ cấp chức vụ
                    'HSCHUCVU' => Input::get("pcchucvu"),
                    //Phụ cấp thâm niên
                    'HSTHAMNIEN' => Input::get("thamnien"),
                    //Phụ cấp vượt khung
                    'HSVUOTKHUNG' => Input::get("vuotkhung"),
        ));

        //Xuất nhập ngũ
        $ngayNhapNgu = date("Y-m-d", strtotime(Input::get("nhapngu")));
        $ngayXuatNgu = date("Y-m-d", strtotime(Input::get("xuatngu")));
        if ($ngayNhapNgu != null && $ngayXuatNgu != null) {
            XuatNhapNgu::where("MADANGVIEN", "=", $maDangVien)->update(array(
                'NGAYNHAPNGU' => $ngayNhapNgu,
                'NGAYXUATNGU' => $ngayXuatNgu
            ));
        }

        //Từ trần
        $ngayTuTran = date("Y-m-d", strtotime(Input::get("ngaytutran")));
        $lyDoTuTran = Input::get("lydotutran");
        if ($ngayTuTran != null && $lyDoTuTran != null) {
            TuTran::where("MADANGVIEN", "=", $maDangVien)->update(
                    array(
                        'NGAYTUTRAN' => $ngayTuTran,
                        'LYDOTUTRAN' => $lyDoTuTran
            ));
        }
        //Khen thưởng
        $dsKhenThuong = Input::get("ktkhenthuong");
        $dsKhenThuongNew = substr($dsKhenThuong, 1);
        $array = explode("+", $dsKhenThuongNew);
        KhenThuongDV::where("MADANGVIEN", "=", $maDangVien)->delete();
        foreach ($array as $item) {
            $khenthuong = new KhenThuongDV();
            $khenthuong->MADANGVIEN = $maDangVien;
            $maHinhThucKhenThuong = Input::get("khenthuong" . $item);
            $khenthuong->MAHTKT = $maHinhThucKhenThuong;
            $ngayLapKhenThuong = date("Y-m-d", strtotime(Input::get("ngaykt" . $item)));
            $khenthuong->NGAYLAPKT = $ngayLapKhenThuong;
            $khenthuong->NAM = date("Y", strtotime(Input::get("ngaykt" . $item)));
            $nam = new Nam();
            $nam->NAM = date("Y", strtotime(Input::get("ngaykt" . $item)));
            if (Nam::where("NAM", "=", $nam->NAM)->count() == 0) {
                $nam->save();
            }
            $khenthuong->CAPQUYETDINH = Input::get("capkt" . $item);

            if (Input::get("khenthuong" . $item) != "0") {
                $khenthuong->save();
            }
        }

        //Kỷ luật
        $kyLuat = substr(Input::get("ktkyluat"), 1);
        $dsKyLuat = explode("+", $kyLuat);
        KyLuatDV::where("MADANGVIEN", "=", $maDangVien)->delete();
        foreach ($dsKyLuat as $item) {
            $kl = new KyLuatDV();
            $kl->MADANGVIEN = $maDangVien;
            $maHinhThucKyLuat = Input::get("kyluat" . $item);
            $kl->MAHTKL = $maHinhThucKyLuat;
            $kl->NAM = date("Y", strtotime(Input::get("ngaykl" . $item)));
            $nam = new Nam();
            $nam->NAM = date("Y", strtotime(Input::get("ngaykl" . $item)));
            if (Nam::where("NAM", "=", $nam)->count() == 0) {
                $nam->save();
            }
            $kl->LYDOKLDV = Input::get("lydokl" . $item);
            if (Input::get("kyluat" . $item) != "0") {
                $kl->save();
            }
        }

        //Huy hiệu Đảng
        $huyHieu = substr(Input::get("kthuyhieu"), 1);
        $dsHuyHieu = explode("+", $huyHieu);
        HuyHieuDang::where("MADANGVIEN", "=", $maDangVien)->delete();
        foreach ($dsHuyHieu as $item) {
            $hh = new HuyHieuDang();
            $hh->MADANGVIEN = $maDangVien;
            $hh->TENHH = Input::get("huyhieu" . $item);
            $hh->NGAYCAPHH = date("Y-m-d", strtotime(Input::get("ngayhh" . $item)));
            if (Input::get("huyhieu" . $item) != null && Input::get("ngayhh" . $item) != null) {
                $hh->save();
            }
        }

        //Ngoại ngữ
        $ngoaiNgu = substr(Input::get("ktngoaingu"), 1);
        $dsNgoaiNgu = explode("+", $ngoaiNgu);
        CoTrinhDoNN::where("MADANGVIEN", "=", $maDangVien)->delete();
        foreach ($dsNgoaiNgu as $item) {
            $nn = new CoTrinhDoNN();
            $nn->MADANGVIEN = $maDangVien;
            $nn->MANGOAINGU = Input::get("trinhdongoaingu" . $item);
            if (Input::get("trinhdongoaingu" . $item) != "0") {
                $nn->save();
            }
        }

        //Quá trình công tác
        $congTac = substr(Input::get("ktcongtac"), 1);
        $dsCongTac = explode("+", $congTac);
        QuaTrinhCT::where("MADANGVIEN", "=", $maDangVien)->delete();
        foreach ($dsCongTac as $item) {
            $ct = new QuaTrinhCT();
            $ct->MADANGVIEN = $maDangVien;
            $ct->LAMCV = Input::get("ctchucvu" . $item);
            $ct->DONVI = Input::get("ctdonvi" . $item);
            $ct->NGAYNHANCV = date("Y-m-d", strtotime(Input::get("cttungay" . $item)));
            $ct->NGAYHETCV = date("Y-m-d", strtotime(Input::get("ctdenngay" . $item)));
            if (Input::get("ctchucvu" . $item) != null &&
                    Input::get("ctdonvi" . $item) != null &&
                    Input::get("cttungay" . $item) != null &&
                    Input::get("ctdenngay" . $item) != null) {
                $ct->save();
            }
        }

        //Quá trình đào tạo
        $daoTao = substr(Input::get("ktdaotao"), 1);
        $dsDaoTao = explode("+", $daoTao);
        QuaTrinhDT::where("MADANGVIEN", "=", $maDangVien)->delete();
        foreach ($dsDaoTao as $item) {
            $dt = new QuaTrinhDT();
            $dt->MADANGVIEN = $maDangVien;
            $dt->TENTRUONG = Input::get("dttruong" . $item);
            $dt->NGANHHOC = Input::get("dtnganh" . $item);
            $dt->NAMDB = Input::get("dttu" . $item);
            $dt->NAMKT = Input::get("dtden" . $item);
            $dt->HINHTHUCHOC = Input::get("dthinhthuc" . $item);
            $dt->VB_CC = Input::get("dtvanbang" . $item);
            if (Input::get("dttruong" . $item) != null &&
                    Input::get("dtnganh" . $item) != null &&
                    Input::get("dttu" . $item) != null &&
                    Input::get("dtden" . $item) != null &&
                    Input::get("dthinhthuc" . $item) != null &&
                    Input::get("dtvanbang" . $item) != null) {
                $dt->save();
            }
        }

        //Đi nước ngoài
        $nuocNgoai = substr(Input::get("ktnuocngoai"), 1);
        $dsDiNuocNgoai = explode("+", $nuocNgoai);
        DiNuocNgoai::where("MADANGVIEN", "=", $maDangVien)->delete();
        foreach ($dsDiNuocNgoai as $item) {
            $dnn = new DiNuocNgoai();
            $dnn->MADANGVIEN = $maDangVien;
            $dnn->QUOCGIA = Input::get("nnquocgia" . $item);
            $dnn->LYDODI = Input::get("nnlido" . $item);
            $dnn->NGAYDI = date("Y-m-d", strtotime(Input::get("nntungay" . $item)));
            $dnn->NGAYVE = date("Y-m-d", strtotime(Input::get("nndenngay" . $item)));
            if (Input::get("nnquocgia" . $item) != null &&
                    Input::get("nnlido" . $item) != null &&
                    Input::get("nntungay" . $item) != null &&
                    Input::get("nndenngay" . $item) != null) {
                $dnn->save();
            }
        }

        //Người thân
        $nguoiThan = substr(Input::get("ktnguoithan"), 1);
        $dsNguoiThan = explode("+", $nguoiThan);
        NguoiThanNT::where("MADANGVIEN", "=", $maDangVien)->delete();
        foreach ($dsNguoiThan as $item) {
            $nt = new NguoiThanNT();
            $nt->MADANGVIEN = $maDangVien;
            $nt->STTNT = $item;
            $nt->TENNT = Input::get("nthoten" . $item);
            $nt->NOICUTRU = Input::get("ntcutru" . $item);
            $nt->QUANHE = Input::get("ntquanhe" . $item);
            $nt->NGHENGHIEP = Input::get("ntnghenghiep" . $item);
            $nt->DACDIEMCT = Input::get("ntddct" . $item);
            $nt->NGAYSINHNT = date("Y-m-d", strtotime(Input::get("ntnamsinh" . $item)));

            if (Input::get("nthoten" . $item) != null &&
                    Input::get("ntcutru" . $item) != null &&
                    Input::get("ntnghenghiep" . $item) != null &&
                    Input::get("ntquanhe" . $item) != null &&
                    Input::get("ntnamsinh" . $item) != null &&
                    Input::get("ntddct" . $item) != null) {
                $nt->save();
            }
        }
        return Redirect::to('trang-chinh-sua-dang-vien/' . $maDangVien);
    }

    public function XoaDangVien($maDangVien) {
        DangVien::where("MADANGVIEN", "=", $maDangVien)->update(array('XOA' => 1));
        echo "Đảng viên này đã được xóa";
    }

    public function TrangDanhSachDangVien() {
        $listChiBo = ChiBo::all();
        $maChiBo = Session::get("maChiBoTaiKhoan");
        if($maChiBo == "0"){
            $listDangVien = DangVien::where("XOA","=","0")->get();
        } else{
            $listDangVien = DB::select("select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB = ".$maChiBo);
        }
        
        $listLyLich = LyLich::all();
        $maChiBoChon = "0";
        return View::make("danh-sach-dang-vien")
                        ->with("listChiBo", $listChiBo)
                        ->with("listDangVien", $listDangVien)
                        ->with("listLyLich", $listLyLich)
                        ->with("maChiBoChon", $maChiBoChon);
    }

    public function LietKeDangVien() {
        $listChiBo = ChiBo::all();
        $maCB = Input::get("maChiBo");
        $listLyLich = LyLich::all();
        if ($maCB == "0") {
            $listDangVien = DangVien::where("XOA", "=", "0")->get();
        } else {
            $list = array();
            $listMaDangVien = LyLich::where("MACB", "=", $maCB)->get();
            foreach ($listMaDangVien as $maDangVien) {
                array_push($list, $maDangVien->MADANGVIEN);
            }
            $listDangVien = DangVien::whereIn("MADANGVIEN", $list)->get();
        }
        return View::make("danh-sach-dang-vien")
                        ->with("listChiBo", $listChiBo)
                        ->with("listDangVien", $listDangVien)
                        ->with("listLyLich", $listLyLich)
                        ->with("maChiBoChon", $maCB);
    }

    public function InSoDangTich($maChiBo) {
        $listChiBo = ChiBo::all();
        $maCB = $maChiBo;
        $listLyLich = LyLich::all();
        if ($maCB == "0") {
            $listDangVien = DB::select('select * from dangvien, lylich '
                            . 'where dangvien.MADANGVIEN = lylich.MADANGVIEN '
                            . 'and dangvien.XOA = 0');
        } else {
            $listDangVien = DB::select('select * from dangvien, lylich '
                            . 'where dangvien.MADANGVIEN = lylich.MADANGVIEN '
                            . 'and dangvien.XOA = 0 '
                            . 'and lylich.MACB = ' . $maCB);
//            $listDangVien = DB::table('dangvien')
//                    ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
//                    ->where('lylich.MACB', "=", $maChiBo)
//                    ->where("dangvien.XOA", "=", "0")
//                    ->get();
        }
        $pdf = App::make('dompdf');
        $pdf->loadHTML(View::make("in-so-dang-tich")
                        ->with("listChiBo", $listChiBo)
                        ->with("listDangVien", $listDangVien)
                        ->with("listLyLich", $listLyLich)
                        ->with("maChiBoChon", $maCB)
        );
        return $pdf->setPaper('a3')->setOrientation('landscape')->stream();
        //return PDF::load(View::make("in-so-dang-tich")->render(), 'A4', 'landscape')->show();
    }

    public function xuatFileWord($maChiBo) {
        if ($maChiBo == "0") {
            $listDangVien = DB::table('dangvien')
                    ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
                    ->where("dangvien.XOA", "=", "0")
                    ->where("lylich.NGAYVAODANGCHINHTHUC", "!=", "")
                    ->get();
            $listDangVienDuBi = DB::table('dangvien')
                    ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
                    ->where("dangvien.XOA", "=", "0")
                    ->where("lylich.NGAYVAODANGCHINHTHUC", "=", null)
                    ->get();
        } else {
            $listDangVien = DB::table('dangvien')
                    ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
                    ->where("dangvien.XOA", "=", "0")
                    ->where("lylich.NGAYVAODANGCHINHTHUC", "!=", "")
                    ->where('lylich.MACB', "=", $maChiBo)
                    ->get();
            $listDangVienDuBi = DB::table('dangvien')
                    ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
                    ->where("dangvien.XOA", "=", "0")
                    ->where("lylich.NGAYVAODANGCHINHTHUC", "=", null)
                    ->where('lylich.MACB', "=", $maChiBo)
                    ->get();
        }
        $listChiBo = ChiBo::all();
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listTheDang = TheDang::all();
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->createSection(array('orientation' => 'landscape'));
        $header = array('size' => 16, 'bold' => true);
        $phpWord->addFontStyle('rStyle', array('bold' => true, 'size' => 16));
        $phpWord->addParagraphStyle('pStyle', array('align' => 'center', 'spaceAfter' => 100));
        $tenChiBo = null;
        if ($maChiBo == "0") {
            $section->addText(htmlspecialchars('DANH SÁCH ĐẢNG VIÊN CỦA ĐẢNG BỘ KHOA CNTT&TT'), 'rStyle', 'pStyle');
        } else {
            $section->addText(htmlspecialchars("ĐẢNG BỘ KHOA CNTT&TT                   ĐẢNG CỘNG SẢN VIỆT NAM"), 'rStyle');
            foreach ($listChiBo as $chiBo) {
                if ($maChiBo == $chiBo->MACB) {
                    $section->addText(htmlspecialchars($chiBo->TENCB), 'rStyle');
                    $tenChiBo = $chiBo->TENCB;
                }
            }
            $section->addText(htmlspecialchars(""));
            $section->addText(htmlspecialchars('Danh sách Đảng viên của ' . $tenChiBo), 'rStyle', 'pStyle');
        }
        $section->addText(htmlspecialchars('Tính đến ngày ' . date("d-m-Y")), 'rStyle', 'pStyle');

        $styleTable = array('borderSize' => 6, 'borderColor' => '006699', 'cellMargin' => 80);
        $styleFirstRow = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '66BBFF');
        $styleCell = array('valign' => 'center');
        $styleCellBTLR = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
        $styleCellColSpan = array('gridSpan' => 9);
        $cellColSpan = array('gridSpan' => 9, 'valign' => 'center');
        $cellHCentered = array('align' => 'left');
        $fontStyle = array('bold' => true, 'align' => 'center');
        $phpWord->addTableStyle('Fancy Table', $styleTable, $styleFirstRow);
        $table = $section->addTable('Fancy Table');
        $table->addRow(900);
        $table->addCell(500, $styleCell)->addText(htmlspecialchars('STT'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Họ và tên'), $fontStyle);
        $table->addCell(1500, $styleCell)->addText(htmlspecialchars('Ngày sinh'), $fontStyle);
        $table->addCell(3000, $styleCell)->addText(htmlspecialchars('Quê quán'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Ngày vào Đảng'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Ngày chính thức'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Số lý lịch'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Số thẻ Đảng'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Ghi chú'), $fontStyle);
        //$table->addCell(500, $styleCellBTLR)->addText(htmlspecialchars('Ngày vào Đảng'), $fontStyle);
        $count = 1;
        $table->addRow();
        $cell2 = $table->addCell(10000, $cellColSpan);
        $textrun2 = $cell2->addTextRun($cellHCentered);
        $textrun2->addText(htmlspecialchars("Chính thức (" . count($listDangVien) . ")"));
        foreach ($listDangVien as $dangVien) {
            $table->addRow();
            $table->addCell(500)->addText(htmlspecialchars($count++));
            $table->addCell(2000)->addText(htmlspecialchars($dangVien->HOTENSUDUNG));
            $table->addCell(1500)->addText(htmlspecialchars(date("d-m-Y", strtotime($dangVien->NGAYSINH))));
            foreach ($listTinh as $tinh) {
                foreach ($listHuyen as $huyen) {
                    foreach ($listXa as $xa) {
                        if ($xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT && $dangVien->PHU_MAPX == $xa->MAPX) {
                            $table->addCell(3000)->addText(htmlspecialchars($xa->TENPX . ", " . $huyen->TENQH . ", " . $tinh->TENTT));
                        }
                    }
                }
            }
            $table->addCell(1500)->addText(htmlspecialchars(date("d-m-Y", strtotime($dangVien->NGAYVAODANG))));
            $table->addCell(2000)->addText(htmlspecialchars(date("d-m-Y", strtotime($dangVien->NGAYVAODANGCHINHTHUC))));
            $table->addCell(2000)->addText(htmlspecialchars($dangVien->SOLL));
            $checkTheDang = false;
            foreach ($listTheDang as $theDang) {
                if ($theDang->MADANGVIEN == $dangVien->MADANGVIEN) {
                    $table->addCell(2000)->addText(htmlspecialchars($theDang->SOTHE));
                    $checkTheDang = true;
                }
            }
            if ($checkTheDang == false) {
                $table->addCell(2000)->addText(htmlspecialchars(null));
            }
            $table->addCell(2000)->addText(htmlspecialchars(null));
        }
        $table->addRow();
        $cell3 = $table->addCell(10000, $cellColSpan);
        $textrun3 = $cell3->addTextRun($cellHCentered);
        $textrun3->addText(htmlspecialchars("Dự bị (" . count($listDangVienDuBi) . ")"));
        foreach ($listDangVienDuBi as $dangVien) {
            $table->addRow();
            $table->addCell(500)->addText(htmlspecialchars($count++));
            $table->addCell(2000)->addText(htmlspecialchars($dangVien->HOTENSUDUNG));
            $table->addCell(1500)->addText(htmlspecialchars(date("d-m-Y", strtotime($dangVien->NGAYSINH))));
            foreach ($listTinh as $tinh) {
                foreach ($listHuyen as $huyen) {
                    foreach ($listXa as $xa) {
                        if ($xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT && $dangVien->PHU_MAPX == $xa->MAPX) {
                            $table->addCell(3000)->addText(htmlspecialchars($xa->TENPX . ", " . $huyen->TENQH . ", " . $tinh->TENTT));
                        }
                    }
                }
            }
            $table->addCell(1500)->addText(htmlspecialchars(date("d-m-Y", strtotime($dangVien->NGAYVAODANG))));
            $table->addCell(2000)->addText(htmlspecialchars(null));
            $table->addCell(2000)->addText(htmlspecialchars($dangVien->SOLL));
            $table->addCell(2000)->addText(htmlspecialchars(null));
            $table->addCell(2000)->addText(htmlspecialchars(null));
        }
        $soChinhThuc = count($listDangVien);
        $soDuBi = count($listDangVienDuBi);
        $soDangVien = $soChinhThuc + $soDuBi;
        $section->addText(htmlspecialchars('Tổng số: ' . $soDangVien . " Đảng viên - Chính thức: " . $soChinhThuc . " Dự bị: " . $soDuBi));


        //$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        //$objWriter->save('C:\QuanLyDangVien\');
        // Save File
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $filename = "DanhSachDangVien.docx";
        $objWriter->save($filename);


        // The following offers file to user on client side: deletes temp version of file
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . $filename);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename));
        flush();
        readfile($filename);
        unlink($filename); // deletes the temporary file
        //echo "Danh sách đảng viên đã được lưu tại 'C:\QuanLyDangVien\DanhSachDangVien.docx'";
//        header('Content-Description: File Transfer');
//        header('Content-type: application/force-download');
//        header('Content-Disposition: attachment; filename='.basename('DanhSachDangVien.docx'));
//        header('Content-Transfer-Encoding: binary');
//        header('Content-Length: '.filesize('DanhSachDangVien.docx'));
//        readfile('DanhSachDangVien.docx');
    }

    public function InDanhSachDangVienPDF($maChiBo) {
        $listChiBo = ChiBo::all();
        $maCB = $maChiBo;
        $listLyLich = LyLich::all();
        if ($maCB == "0") {
            $listDangVien = DB::select('select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and NGAYVAODANGCHINHTHUC != "0000-00-00"');
            $listDangVienDuBi = DB::select('select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and NGAYVAODANGCHINHTHUC is null');
        } else {
            $listDangVien = DB::select('select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and NGAYVAODANGCHINHTHUC != "0000-00-00" and lylich.MACB = ' . $maCB);
            $listDangVienDuBi = DB::select('select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and NGAYVAODANGCHINHTHUC is null and lylich.MACB = ' . $maCB);
        }
        $pdf = App::make('dompdf');
        $pdf->loadHTML(View::make("in-danh-sach-dang-vien")
                        ->with("listChiBo", $listChiBo)
                        ->with("listDangVien", $listDangVien)
                        ->with("listLyLich", $listLyLich)
                        ->with("maChiBoChon", $maCB)
                        ->with("listDangVienDuBi", $listDangVienDuBi)
        );
        return $pdf->setPaper('a3')->setOrientation('landscape')->stream();
        //return PDF::load(View::make("in-so-dang-tich")->render(), 'A4', 'landscape')->show();
    }

}
