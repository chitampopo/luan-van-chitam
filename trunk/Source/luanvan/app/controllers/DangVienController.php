<?php

class DangVienController extends Controller{
    
    public function TrangCapNhatDangVien(){
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
                ->with("listHuyen",$listHuyen)
                ->with("listXa",$listXa)
                ->with("listTonGiao",$listTonGiao)
                ->with("listNgheNghiep",$listNgheNghiep)
                ->with("listDanToc", $listDanToc)
                ->with("listHocHam",$listHocHam)
                ->with("listHocVi",$listHocVi)
                ->with("listNgoaiNgu",$listNgoaiNgu)
                ->with("listTrinhDoVH",$listTrinhDoVH)
                ->with("listTrinhDoCT",$listTrinhDoCT)
                ->with("listChuyenMon",$listChuyenMon)
                ->with("listNghiepVu",$listNghiepVu)
                ->with("listChiBo",$listChiBo)
                ->with("listHTKT",$listHTKT)
                ->with("listHTKL",$listHTKL);
    } 
    
    public function CapNhatDangVien(){
        //////////////////////////
        //////Bảng Đảng viên//////
            $dangVien = new DangVien();
        //Họ tên khai sinh
            $tenKhaiSinh = Input::get("hotenkhaisinh");
            $dangVien -> HOTENKHAISINH = $tenKhaiSinh;
        //Họ tên đang sử dụng
            $tenSuDung = Input::get("hotensudung");
            $dangVien -> HOTENSUDUNG = $tenSuDung;
        //Bí danh
            $biDanh = Input::get("bidanh");
            $dangVien -> BIDANH = $biDanh;
        //Upload hình ảnh Đảng viên
            $hinhAnh = Input::file('hinhanh')->getClientOriginalName();
            Input::file('hinhanh')->move(base_path().'/storage/directory', $hinhAnh);
            $dangVien -> HINHANH = $hinhAnh;
        //Giới tính
            $gioiTinh = Input::get("gioitinh");
            $dangVien -> GIOITINH = $gioiTinh;
        //Ngày sinh
            $ngaySinh = date("Y-m-d", strtotime(Input::get("ngaysinh")));
            $dangVien -> NGAYSINH = $ngaySinh;
        //Nơi sinh MAPX
            $noiSinh = Input::get("noisinh");
            $dangVien -> MAPX = $noiSinh;
        //Quê quán PHU_MAPX
            $queQuan = Input::get("quequan");
            $dangVien -> PHU_MAPX = $queQuan;
        //Thường trú PHU_MAPX3
            $thuongTru = Input::get("thuongtru");
            $dangVien -> PHU_MAPX3 = $thuongTru;
        //Tạm trú PHU_MAPX2
            $tamTru = Input::get("tamtru");
            if ($tamTru != "0"){
                $dangVien -> PHU_MAPX2 = $tamTru;
            }
        //Dân tộc
            $maDanToc = Input::get("dantoc");
            $dangVien -> MADT = $maDanToc;
        //Tôn giáo
            $maTonGiao = Input::get("tongiao");
            if($maTonGiao!="0"){
                $dangVien -> MATONGIAO = $maTonGiao;
            }
        //Nghề nghiệp
            $maNgheNghiepDangLam = Input::get("nghenghiepdanglam");
            $dangVien -> MANN = $maNgheNghiepDangLam;
        //Người giới thiệu 1
            $nguoiGioiThieu1 = Input::get("nguoigioithieu1");
            $dangVien -> NGUOIGT1 = $nguoiGioiThieu1;
        //Chức vụ người giới thiệu 2
            $chucVuNguoiGioiThieu1 = Input::get("cvnguoigioithieu1");
            $dangVien -> CVNGUOIGT1 = $chucVuNguoiGioiThieu1;
        //Người giới thiệu 2
            $nguoiGioiThieu2 = Input::get("nguoigioithieu2");
            $dangVien -> NGUOIGT2 = $nguoiGioiThieu2;
        //Chức vụ người giới thiệu 2
            $chucVuNguoiGioiThieu2 = Input::get("cvnguoigioithieu2");
            $dangVien -> CVNGUOIGT2 = $chucVuNguoiGioiThieu2;
        //Trình độ văn hóa
            $trinhDoVH = Input::get("trinhdovh");
            $dangVien->MATRINHDOVH = $trinhDoVH;
        //Chuyên môn
            $chuyenMon = Input::get("chuyenmon");
            if( $chuyenMon != "0"){
                $dangVien -> MACM = $chuyenMon;
            }
        //Nghiệp vụ
            $nghiepVu = Input::get("nghiepvu");
            if( $nghiepVu != "0"){
                $dangVien -> MANV = $nghiepVu;
            }
        //Học vị
            $hocVi = Input::get("hocvi");
            if( $hocVi != "0"){
                $dangVien -> MAHOCVI = $hocVi;
            }       
        //Học hàm
            $hocHam = Input::get("hocham");
            if( $hocHam != "0"){
                $dangVien -> MAHOCHAM = $hocHam;
            }
        //Sức khỏe
            $sucKhoe = Input::get("suckhoe");
            $dangVien-> SUCKHOE = $sucKhoe;
        //Thương binh
            $thuongBinh = new ThuongBinh();
            $maLoaiTB = Input::get("thuongbinh");
            $thuongBinh -> LOAITB = $maLoaiTB;
        //Liệt sĩ
            $giaDinhLietSi = Input::get("lietsi");
            $dangVien -> GDLIETSI = $giaDinhLietSi;
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
            $lylich -> MACB = $maChiBo;
        //Nghề nghiệp khi vào Đảng
            $maNgheNghiepVaoDang = Input::get("nghenghiepkhivaodang");
            $lylich -> NGHENGHIEPTRUOCKHIVAODANG = $maNgheNghiepVaoDang;
        //Ngày vào Đảng
            $ngayVaoDang = date("Y-m-d", strtotime(Input::get("ngayvaodang")));
            $lylich -> NGAYVAODANG = $ngayVaoDang;
        //Chi bộ vào Đảng
            $chiBoVaoDang = Input::get("noivaodang");
            $lylich -> CBVAODANG = $chiBoVaoDang;
        //Ngày vào Đảng chính thức
            $ngayVaoDangChinhThuc = date("Y-m-d", strtotime(Input::get("ngaychinhthuc")));
            if($ngayVaoDangChinhThuc !=null ){
                $lylich -> NGAYVAODANGCHINHTHUC = $ngayVaoDangChinhThuc;
            }
        //Chi bộ vào Đảng vào Đảng chính thức
            $chiBoVaoDangChinhThuc = Input::get("taichibochinhthuc");
            if($ngayVaoDangChinhThuc !=null && $chiBoVaoDangChinhThuc!=null ){
                $lylich -> CBVAODANGCHINHTHUC = $chiBoVaoDangChinhThuc;
            }
        //Vào Đoàn
            $vaoDoan = new DoanTNCSHCM();
            $ngayVaoDoan = date("Y-m-d", strtotime(Input::get("ngayvaodoan")));
            $vaoDoan -> NGAYVAODOAN = $ngayVaoDoan;
            $noiVaoDoan = Input::get("noivaodoan");
            $vaoDoan -> NOIVAODOAN = $noiVaoDoan;
        //Trình độ chính trị
            $trinhDoCT = Input::get("trinhdoct");
            $lylich->MATRINHDOCT = $trinhDoCT;
        //Miễn công tác và sinh hoạt Đảng
            $mienCT = date("Y-m-d", strtotime(Input::get("mienct")));
            $lylich-> MIENCT_SHD = $mienCT;
        //Thẻ Đảng viên
            $maTheDV = Input::get("thedang");
            $theDang = new TheDang();
            $theDang->SOTHE = $maTheDV;
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
            $lylich -> HSTHAMNIEN = $phuCapThamNien;
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
            if($ngayNhapNgu != null && $ngayXuatNgu != null){
                $xuatNhapNgu = new XuatNhapNgu();
                $xuatNhapNgu->NGAYNHAPNGU = $ngayNhapNgu;
                $xuatNhapNgu->NGAYXUATNGU = $ngayXuatNgu;
            }
        //Từ trần
            $ngayTuTran = date("Y-m-d", strtotime(Input::get("ngaytutran")));
            $lyDoTuTran = Input::get("lydotutran");
            if($ngayTuTran != null && $lyDoTuTran != null){
                $tuTran = new TuTran();
                $tuTran->NGAYTUTRAN = $ngayTuTran;
                $tuTran->LYDOTUTRAN = $lyDoTuTran;
            }
        //Khen thưởng
            $dsKhenThuong = Input::get("ktkhenthuong");
            $dsKhenThuongNew = substr($dsKhenThuong, 1);
            $array = explode("+", $dsKhenThuongNew);
            $khenthuong = new KhenThuongDV();
            foreach ($array as $item) {
                $khenthuong->MADANGVIEN = $maDangVien;
                $maHinhThucKhenThuong = Input::get("khenthuong".$item);
                $khenthuong-> MAHTKT = $maHinhThucKhenThuong;
                $ngayLapKhenThuong = date("Y-m-d", strtotime(Input::get("ngaykt".$item)));
                $khenthuong->NGAYLAPKT = $ngayLapKhenThuong;
                $khenthuong->NAM = date("Y", strtotime(Input::get("ngaykt".$item)));
                $nam = new Nam();
                $nam->NAM = date("Y", strtotime(Input::get("ngaykt".$item)));
                if(Nam::where("NAM","=",$nam->NAM)->count()==0){
                    $nam->save();
                }
                $khenthuong->CAPQUYETDINH = Input::get("capkt".$item);

                if(Input::get("khenthuong".$item)!="0"){
                    $khenthuong->save();
                }
            }
        //Kỷ luật
            $kyLuat= substr(Input::get("ktkyluat"),1);
            $dsKyLuat = explode("+", $kyLuat);
            foreach ($dsKyLuat as $item) {
                $kl = new KyLuatDV();
                $kl->MADANGVIEN = $maDangVien;
                $maHinhThucKyLuat = Input::get("kyluat".$item);
                $kl->MAHTKL= $maHinhThucKyLuat;
                $kl->NAM = date("Y", strtotime(Input::get("ngaykl".$item)));
                $nam = new Nam();
                $nam->NAM = date("Y", strtotime(Input::get("ngaykl".$item)));
                if(Nam::where("NAM","=",$nam)->count()==0){
                    $nam->save();
                }
                $kl->LYDOKLDV = Input::get("lydokl".$item);
                if(Input::get("kyluat".$item)!="0"){
                   $kl->save();
                }
            }
        //Huy hiệu Đảng
            $huyHieu= substr(Input::get("kthuyhieu"),1);
            $dsHuyHieu = explode("+", $huyHieu);
            foreach ($dsHuyHieu as $item) {
                $hh = new HuyHieuDang();
                $hh->MADANGVIEN = $maDangVien;
                $hh->TENHH= Input::get("huyhieu".$item);
                $hh->NGAYCAPHH = date("Y-m-d", strtotime(Input::get("ngayhh".$item)));
                if(Input::get("huyhieu".$item)!= null && Input::get("ngayhh".$item)!=null){
                   $hh->save();
                }
            }
        //Ngoại ngữ
            $ngoaiNgu= substr(Input::get("ktngoaingu"),1);
            $dsNgoaiNgu = explode("+", $ngoaiNgu);
            foreach ($dsNgoaiNgu as $item) {
                $nn = new CoTrinhDoNN();
                $nn->MADANGVIEN = $maDangVien;
                $nn->MANGOAINGU = Input::get("trinhdongoaingu".$item);
                if(Input::get("trinhdongoaingu".$item)!="0"){
                   $nn->save();
                }
            }
        
        //Quá trình công tác
            $congTac= substr(Input::get("ktcongtac"),1);
            $dsCongTac = explode("+", $congTac);
            foreach ($dsCongTac as $item) {
                $ct = new QuaTrinhCT();
                $ct->MADANGVIEN = $maDangVien;
                $ct->LAMCV = Input::get("ctchucvu".$item);
                $ct->DONVI = Input::get("ctdonvi".$item);
                $ct->NGAYNHANCV = date("Y-m-d", strtotime(Input::get("cttungay".$item)));
                $ct->NGAYHETCV = date("Y-m-d", strtotime(Input::get("ctdenngay".$item)));
                if( Input::get("ctchucvu".$item)!=null &&
                    Input::get("ctdonvi".$item)!=null &&
                    Input::get("cttungay".$item)!=null &&
                    Input::get("ctdenngay".$item)!=null){
                    $ct->save();
                }
            }
        //Quá trình đào tạo
            $daoTao= substr(Input::get("ktdaotao"),1);
            $dsDaoTao = explode("+", $daoTao);
            foreach ($dsDaoTao as $item) {
                $dt = new QuaTrinhDT();
                $dt->MADANGVIEN = $maDangVien;
                $dt->TENTRUONG = Input::get("dttruong".$item);
                $dt->NGANHHOC = Input::get("dtnganh".$item);
                $dt->NAMDB = Input::get("dttu".$item);
                $dt->NAMKT = Input::get("dtden".$item);
                $dt->HINHTHUCHOC = Input::get("dthinhthuc".$item);
                $dt->VB_CC = Input::get("dtvanbang".$item);
                if( Input::get("dttruong".$item)!=null &&
                    Input::get("dtnganh".$item)!=null &&
                    Input::get("dttu".$item)!=null &&
                    Input::get("dtden".$item)!=null &&
                    Input::get("dthinhthuc".$item)!=null &&
                    Input::get("dtvanbang".$item)!=null){
                        $dt->save();
                }
            }
        //Đi nước ngoài
            $nuocNgoai= substr(Input::get("ktnuocngoai"),1);
            $dsDiNuocNgoai = explode("+", $nuocNgoai);
            foreach ($dsDiNuocNgoai as $item) {
                $dnn = new DiNuocNgoai();
                $dnn->MADANGVIEN = $maDangVien;
                $dnn->QUOCGIA = Input::get("nnquocgia".$item);
                $dnn->LYDODI = Input::get("nnlido".$item);
                $dnn->NGAYDI = date("Y-m-d", strtotime(Input::get("nntungay".$item)));
                $dnn->NGAYVE = date("Y-m-d", strtotime(Input::get("nndenngay".$item)));
                if( Input::get("nnquocgia".$item)!=null &&
                    Input::get("nnlido".$item)!=null &&
                    Input::get("nntungay".$item)!=null &&
                    Input::get("nndenngay".$item)!=null){
                        $dnn->save();
                }
            }
        //Người thân
            $nguoiThan= substr(Input::get("ktnguoithan"),1);
            $dsNguoiThan = explode("+", $nguoiThan);
            foreach ($dsNguoiThan as $item) {
                $nt = new NguoiThanNT();
                $nt->MADANGVIEN = $maDangVien;
                $nt->STTNT = $item;
                $nt->TENNT = Input::get("nthoten".$item);
                $nt->NOICUTRU = Input::get("ntcutru".$item);
                $nt->QUANHE = Input::get("ntquanhe".$item);
                $nt->NGHENGHIEP = Input::get("ntnghenghiep".$item);
                $nt->DACDIEMCT = Input::get("ntddct".$item);
                $nt->NGAYSINHNT = date("Y-m-d", strtotime(Input::get("ntnamsinh".$item)));

                if( Input::get("nthoten".$item)!=null &&
                    Input::get("ntcutru".$item)!=null &&
                    Input::get("ntnghenghiep".$item)!=null &&
                    Input::get("ntquanhe".$item)!=null && 
                    Input::get("ntnamsinh".$item)!=null && 
                    Input::get("ntddct".$item)!=null){
                        $nt->save();
                }
            }
        //Save Đảng viên rồi mới save vào Đoàn
            if( Input::get("ngayvaodoan") != null &&  Input::get("noivaodoan") != null ){
                $vaoDoan-> MADANGVIEN = $maDangVien;
                $vaoDoan->save();
            }
        //Save Thương binh
            if($maLoaiTB!="0"){
                $thuongBinh->MADANGVIEN = $maDangVien;
                $thuongBinh->save();
            }
        //Save thẻ Đảng
            if($maTheDV!=null){
                $theDang->MADANGVIEN = $maDangVien;
                $theDang->save();
            }
        //Save xuat nhap ngu
            if($ngayNhapNgu !=null &&   $ngayXuatNgu != null){
                $xuatNhapNgu->MADANGVIEN = $maDangVien;
                $xuatNhapNgu->save();
            }
        //Save từ trần
            if($ngayTuTran != null &&  $lyDoTuTran!=null){
                $tuTran->MADANGVIEN = $maDangVien;
                $tuTran->save();
            }
        echo "Thành công!";
    }
    
    public function TrangCapNhatThongTinDangVien($maDangVien){
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
            $dangVien = DangVien::where("MADANGVIEN","=",$maDangVien)->first();
            $lyLich = LyLich::where("MADANGVIEN","=",$maDangVien)->first();
            $vaoDoan = DOANTNCSHCM::where("MADANGVIEN","=",$maDangVien)->first();
            if($vaoDoan==null){
                $vaoDoan = new DOANTNCSHCM();
                $vaoDoan -> NGAYVAODOAN = null;
                $vaoDoan -> NOIVAODOAN = null;
            }
            $theDang = TheDang::where("MADANGVIEN","=",$maDangVien)->first();
            if($theDang == null){
                $theDang = new TheDang();
                $theDang -> SOTHE = null;
            }
            $xuatNhapNgu = XuatNhapNgu::where("MADANGVIEN","=",$maDangVien)->first();
            if($xuatNhapNgu==null){
                $xuatNhapNgu = new XuatNhapNgu;
                $xuatNhapNgu -> NGAYNHAPNGU = null;
                $xuatNhapNgu -> NGAYXUATNGU = null;
            }
            $tuTran = TuTran::where("MADANGVIEN","=",$maDangVien)->first();
            if($tuTran==null){
                $tuTran = new TuTran();
                $tuTran -> NGAYTUTRAN = null;
                $tuTran -> LYDOTUTRAN = null;
            }
            $thuongBinh = ThuongBinh::where("MADANGVIEN","=",$maDangVien)->first();
            if($thuongBinh == null ){
                $thuongBinh = new ThuongBinh;
                $thuongBinh -> LOAITB = "0";
            }
            
            $khenThuongDangVien = KhenThuongDV::where("MADANGVIEN","=",$maDangVien)->get();
            if(KhenThuongDV::where("MADANGVIEN","=",$maDangVien)->get()->count() == 0 ){
                $khenThuong = new KhenThuongDV();
                $khenThuong -> MADANGVIEN = $maDangVien;
                $khenThuong -> MAHTKT = "0";
                $khenThuong -> NGAYLAPKT = "";
                $khenThuong -> NAM = "";
                $khenThuong -> CAPQUYETDINH = "";
                $khenThuongDangVien->push($khenThuong);
            } 
            
            $kyLuatDangVien = KyLuatDV::where("MADANGVIEN","=",$maDangVien)->get();
            if(KyLuatDV::where("MADANGVIEN","=",$maDangVien)->get()->count() == 0){
                $kyLuat = new KyLuatDV();
                $kyLuat -> MADANGVIEN = $maDangVien;
                $kyLuat -> MAHTKL = "0";
                $kyLuat -> NAM = "";
                $kyLuatDangVien -> LYDOKLDV = "";
                $kyLuatDangVien->push($kyLuat);
            } 
            
            $huyHieuDang = HuyHieuDang::where("MADANGVIEN","=",$maDangVien)->get();
            if(HuyHieuDang::where("MADANGVIEN","=",$maDangVien)->get()->count() == 0){
                $huyHieu = new HuyHieuDang();
                $huyHieu -> MADANGVIEN = $maDangVien;
                $huyHieu -> TENHH = "";
                $huyHieu -> NGAYCAPHH = "";
                $huyHieuDang -> push($huyHieu);
            }
            
            $danhSachNgoaiNgu = CoTrinhDoNN::where("MADANGVIEN","=",$maDangVien)->get();
            if(CoTrinhDoNN::where("MADANGVIEN","=",$maDangVien)->get()->count() == 0){
                $trinhDoNN = new CoTrinhDoNN();
                $trinhDoNN->MADANGVIEN = $maDangVien;
                $trinhDoNN->MANN = "0";
                $danhSachNgoaiNgu->push($trinhDoNN);
            }
            
            $quaTrinhCongTac = QuaTrinhCT::where("MADANGVIEN","=",$maDangVien)->get();
            if(QuaTrinhCT::where("MADANGVIEN","=",$maDangVien)->get()->count() == 0){
                $quaTrinhCT = new QuaTrinhCT();
                $quaTrinhCT -> MADANGVIEN = $maDangVien;
                $quaTrinhCT -> LAMCV = "";
                $quaTrinhCT -> DONVI = "";
                $quaTrinhCT -> NGAYNHANCV = "";
                $quaTrinhCT -> NGAYHETCV = "";
                $quaTrinhCongTac ->push($quaTrinhCT);
            }
            
            $quaTrinhDaoTao = QuaTrinhDT::where("MADANGVIEN","=",$maDangVien)->get();
            if(QuaTrinhDT::where("MADANGVIEN","=",$maDangVien)->get()->count() == 0){
                $quaTrinhDT = new QuaTrinhDT();
                $quaTrinhDT -> MADANGVIEN = $maDangVien;
                $quaTrinhDT -> TENTRUONG = "";
                $quaTrinhDT -> NGANHHOC = "";
                $quaTrinhDT -> NAMDB = "";
                $quaTrinhDT -> NAMKT = "";
                $quaTrinhDT -> HINHTHUCHOC = "";
                $quaTrinhDT -> VB_CC = "";
                $quaTrinhDaoTao ->push($quaTrinhDT);
            }
            
            $diNuocNgoai = DiNuocNgoai::where("MADANGVIEN","=",$maDangVien)->get();
            if(DiNuocNgoai::where("MADANGVIEN","=",$maDangVien)->get()->count() == 0){
                $diNN = new DiNuocNgoai();
                $diNN -> MADANGVIEN = $maDangVien;
                $diNN -> QUOCGIA = "";
                $diNN -> LYDODI = "";
                $diNN -> NGAYDI = "";
                $diNN -> NGAYVE = "";
                $diNuocNgoai->push($diNN);
            }
            
            $danhSachNguoiThan = NguoiThanNT::where("MADANGVIEN","=",$maDangVien)->get();
            if(NguoiThanNT::where("MADANGVIEN","=",$maDangVien)->get()->count() == 0){
                $nguoiThan = new NguoiThanNT();
                $nguoiThan -> MADANGVIEN = $maDangVien;
                $nguoiThan -> TENNT = "";
                $nguoiThan -> NOICUTRU = "";
                $nguoiThan -> QUANHE = "";
                $nguoiThan -> NGHENGHIEP = "";
                $nguoiThan -> DACDIEMCT = "";
                $nguoiThan -> NGAYSINHNT = "";
                $danhSachNguoiThan->push($nguoiThan);
            }
        return View::make("chinh-sua-dang-vien")
                ->with("dangVien",$dangVien)
                ->with("lyLich",$lyLich)
                ->with("listTinh", $listTinh)
                ->with("listHuyen",$listHuyen)
                ->with("listXa",$listXa)
                ->with("listTonGiao",$listTonGiao)
                ->with("listNgheNghiep",$listNgheNghiep)
                ->with("listDanToc", $listDanToc)
                ->with("listHocHam",$listHocHam)
                ->with("listHocVi",$listHocVi)
                ->with("listNgoaiNgu",$listNgoaiNgu)
                ->with("listTrinhDoVH",$listTrinhDoVH)
                ->with("listTrinhDoCT",$listTrinhDoCT)
                ->with("listChuyenMon",$listChuyenMon)
                ->with("listNghiepVu",$listNghiepVu)
                ->with("listChiBo",$listChiBo)
                ->with("listHTKT",$listHTKT)
                ->with("listHTKL",$listHTKL)
                ->with("vaoDoan",$vaoDoan)
                ->with("theDang",$theDang)
                ->with("xuatNhapNgu",$xuatNhapNgu)
                ->with("tuTran",$tuTran)
                ->with("thuongBinh",$thuongBinh)
                ->with("khenThuongDangVien",$khenThuongDangVien)
                ->with("kyLuatDangVien",$kyLuatDangVien)
                ->with("huyHieuDang",$huyHieuDang)
                ->with("danhSachNgoaiNgu", $danhSachNgoaiNgu)
                ->with("quaTrinhCongTac",$quaTrinhCongTac)
                ->with("quaTrinhDaoTao",$quaTrinhDaoTao)
                ->with("diNuocNgoai",$diNuocNgoai)
                ->with("danhSachNguoiThan",$danhSachNguoiThan)
            ;
    }
}
