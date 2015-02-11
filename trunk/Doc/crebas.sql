/*==============================================================*/
/* DBMS name:      MySQL 4.0                                    */
/* Created on:     2/5/2015 1:27:35 PM                          */
/*==============================================================*/


/*==============================================================*/
/* Table: BDDVMOI                                               */
/*==============================================================*/
create table BDDVMOI
(
   DOTBD                          national varchar(5)            not null,
   NGAYBD                         date,
   NGAYKT                         date,
   GHICHU                         national varchar(100),
   primary key (DOTBD)
);

/*==============================================================*/
/* Table: CAMTINHDANG                                           */
/*==============================================================*/
create table CAMTINHDANG
(
   STTCTD                         int                            not null,
   MACB                           national varchar(5)            not null,
   THANGNAM                       national varchar(7)            not null,
   HOVATEN                        national varchar(100),
   DOANVIEN                       bool,
   NGAYCONGNHANCTD                date,
   CHUNGNHANCT_                   date,
   LLNHAP                         bool,
   CBTHONGQUA                     bool,
   LLCHINH                        bool,
   XACMINH                        bool,
   YKIENCUTRU                     bool,
   YKIENDOANTHE                   bool,
   GIAYGTDANGVIEN                 bool,
   GIAYGTDOANTHE                  bool,
   XETKETNAP                      national varchar(10),
   CHUYENDANGUY                   bool,
   NGUOIHD                        national varchar(100),
   primary key (STTCTD)
);

/*==============================================================*/
/* Table: CAPTHEDANG                                            */
/*==============================================================*/
create table CAPTHEDANG
(
   MADANGVIEN                     national varchar(5)            not null,
   STTCAPTHE                      int                            not null,
   primary key (MADANGVIEN, STTCAPTHE)
);

/*==============================================================*/
/* Table: CHIBO                                                 */
/*==============================================================*/
create table CHIBO
(
   MACB                           national varchar(5)            not null,
   TENCB                          national varchar(100),
   TENTK                          national varchar(100),
   MATKHAU                        national varchar(100),
   primary key (MACB)
);

/*==============================================================*/
/* Table: CHUCVU                                                */
/*==============================================================*/
create table CHUCVU
(
   MACV                           national varchar(5)            not null,
   TENCV                          national varchar(100),
   primary key (MACV)
);

/*==============================================================*/
/* Table: CHUYENMON                                             */
/*==============================================================*/
create table CHUYENMON
(
   MACM                           national varchar(5)            not null,
   TENCM                          national varchar(100),
   primary key (MACM)
);

/*==============================================================*/
/* Table: CO_TDNN                                               */
/*==============================================================*/
create table CO_TDNN
(
   MADANGVIEN                     national varchar(5)            not null,
   MANGOAINGU                     national varchar(5)            not null,
   primary key (MADANGVIEN, MANGOAINGU)
);

/*==============================================================*/
/* Table: CVDEN                                                 */
/*==============================================================*/
create table CVDEN
(
   STTCVDEN                       int                            not null,
   NGAY                           date                           not null,
   TENCVDEN                       national varchar(100),
   NOIGOIDEN                      national varchar(100),
   TAPHSLUU                       national varchar(20),
   GHICHUCVDEN                    national varchar(100),
   primary key (STTCVDEN)
);

/*==============================================================*/
/* Table: CVDI                                                  */
/*==============================================================*/
create table CVDI
(
   SOCVDI                         int                            not null,
   NGAY                           date                           not null,
   TENCVDI                        national varchar(100),
   NGAYGOI                        date,
   NOIGOIDI                       national varchar(100),
   GHICHUCVDI                     national varchar(100),
   primary key (SOCVDI)
);

/*==============================================================*/
/* Table: DANGPHI                                               */
/*==============================================================*/
create table DANGPHI
(
   THANGNAM                       national varchar(7)            not null,
   MADANGVIEN                     national varchar(5)            not null,
   SOTIEN                         int,
   primary key (THANGNAM)
);

/*==============================================================*/
/* Table: DANGVIEN                                              */
/*==============================================================*/
create table DANGVIEN
(
   MADANGVIEN                     national varchar(5)            not null,
   STTTBINH                       int,
   SOGIAYGT                       int                            not null,
   MANV                           national varchar(5),
   STTXNN                         int,
   MAPX                           national varchar(5)            not null,
   PHU_MAPX                       national varchar(5)            not null,
   PHU_MAPX3                      national varchar(5)            not null,
   MADT                           national varchar(5)            not null,
   MANN                           national varchar(5)            not null,
   MAHOCVI                        national varchar(5),
   MACM                           national varchar(5),
   MATRINHDOVH                    national varchar(5)            not null,
   MATONGIAO                      national varchar(5),
   MAHOCHAM                       national varchar(5),
   PHU_MAPX2                      national varchar(5),
   HOTENKHAISINH                  national varchar(100),
   HOTENSUDUNG                    national varchar(100),
   BIDANH                         national varchar(100),
   GIOITINH                       bool,
   NGAYSINH                       date,
   CMND                           int,
   THAMGIACM                      date,
   SUCKHOE                        national varchar(10),
   GDLIETSI                       bool,
   COCONGCM                       bool,
   NGUOIGT1                       national varchar(100),
   NGUOIGT2                       national varchar(100),
   HINHANH                        national varchar(200),
   CHUNGNHANCTD                   date,
   EMAIL                          national varchar(100),
   SDT                            national varchar(11),
   XOA                            bool,
   primary key (MADANGVIEN)
);

/*==============================================================*/
/* Table: DANHHIEU                                              */
/*==============================================================*/
create table DANHHIEU
(
   MADANHHIEU                     national varchar(5)            not null,
   MADANGVIEN                     national varchar(5)            not null,
   TENDANHHIEU                    national varchar(100),
   primary key (MADANHHIEU)
);

/*==============================================================*/
/* Table: DANTOC                                                */
/*==============================================================*/
create table DANTOC
(
   MADT                           national varchar(5)            not null,
   TENDT                          national varchar(100),
   primary key (MADT)
);

/*==============================================================*/
/* Table: DINUOCNGOAI                                           */
/*==============================================================*/
create table DINUOCNGOAI
(
   STT                            int                            not null,
   MADANGVIEN                     national varchar(5)            not null,
   QUOCGIA                        national varchar(20),
   LYDODI                         national varchar(100),
   NGAYDI                         date,
   NGAYVE                         date,
   primary key (STT)
);

/*==============================================================*/
/* Table: DSCAPHHD                                              */
/*==============================================================*/
create table DSCAPHHD
(
   STTCAPHHD                      int                            not null,
   LOAICAPHHD                     int,
   DOTCAPHHD                      date,
   primary key (STTCAPHHD)
);

/*==============================================================*/
/* Table: DSCAPTHEDANG                                          */
/*==============================================================*/
create table DSCAPTHEDANG
(
   STTCAPTHE                      int                            not null,
   LOAICAPTHE                     int,
   DOTCAPTHE                      date,
   primary key (STTCAPTHE)
);

/*==============================================================*/
/* Table: GIAYCHUYENSHD                                         */
/*==============================================================*/
create table GIAYCHUYENSHD
(
   SOGIAYGT                       int                            not null,
   NGAY                           date                           not null,
   GUIDEN                         national varchar(100),
   NOICHUYENDEN                   national varchar(100),
   NGUOIKY                        national varchar(100),
   CVNGUOIKY                      national varchar(100),
   primary key (SOGIAYGT)
);

/*==============================================================*/
/* Table: GIUCV                                                 */
/*==============================================================*/
create table GIUCV
(
   MANHIEMKY                      national varchar(5)            not null,
   MACV                           national varchar(5)            not null,
   MADANGVIEN                     national varchar(5)            not null,
   NGAYGIUCV                      date,
   NGAYTHOICV                     date,
   primary key (MANHIEMKY, MACV, MADANGVIEN)
);

/*==============================================================*/
/* Table: HINHTHUCKL                                            */
/*==============================================================*/
create table HINHTHUCKL
(
   MAHTKL                         national varchar(5)            not null,
   TENHTKL                        national varchar(100),
   primary key (MAHTKL)
);

/*==============================================================*/
/* Table: HINHTHUCKT                                            */
/*==============================================================*/
create table HINHTHUCKT
(
   MAHTKT                         national varchar(5)            not null,
   TENHTKT                        national varchar(100),
   primary key (MAHTKT)
);

/*==============================================================*/
/* Table: HOCHAM                                                */
/*==============================================================*/
create table HOCHAM
(
   MAHOCHAM                       national varchar(5)            not null,
   TENHOCHAM                      national varchar(100),
   primary key (MAHOCHAM)
);

/*==============================================================*/
/* Table: HOCVI                                                 */
/*==============================================================*/
create table HOCVI
(
   MAHOCVI                        national varchar(5)            not null,
   TENHOCVI                       national varchar(100),
   primary key (MAHOCVI)
);

/*==============================================================*/
/* Table: HUYHIEUDANG                                           */
/*==============================================================*/
create table HUYHIEUDANG
(
   MAHH                           national varchar(5)            not null,
   MADANGVIEN                     national varchar(5)            not null,
   TENHH                          national varchar(100),
   NGAYCAPHH                      date,
   primary key (MAHH)
);

/*==============================================================*/
/* Table: KHENTHUONGCB                                          */
/*==============================================================*/
create table KHENTHUONGCB
(
   MAHTKT                         national varchar(5)            not null,
   MACB                           national varchar(5)            not null,
   NAM                            int                            not null,
   STTKTCB                        int,
   LYDOKTCB                       national varchar(100),
   primary key (MAHTKT, MACB, NAM)
);

/*==============================================================*/
/* Table: KHENTHUONGDV                                          */
/*==============================================================*/
create table KHENTHUONGDV
(
   MADANGVIEN                     national varchar(5)            not null,
   MAHTKT                         national varchar(5)            not null,
   NAM                            int                            not null,
   STTKT                          int,
   LYDOKTDV                       national varchar(100),
   NGAYLAPKT                      date,
   CAPQUYETDINH                   national varchar(100),
   primary key (MADANGVIEN, MAHTKT, NAM)
);

/*==============================================================*/
/* Table: KYLUAT                                                */
/*==============================================================*/
create table KYLUAT
(
   MAHTKL                         national varchar(5)            not null,
   MAKYLUAT                       national varchar(10)           not null,
   MADANGVIEN                     national varchar(5)            not null,
   LYDOKLDV                       national varchar(100),
   NGAYKL                         date,
   primary key (MAHTKL, MAKYLUAT)
);

/*==============================================================*/
/* Table: LUONGCB                                               */
/*==============================================================*/
create table LUONGCB
(
   STTLUONGCB                     int                            not null,
   LUONGCB                        int,
   DAXOA                          bool,
   primary key (STTLUONGCB)
);

/*==============================================================*/
/* Table: LYLICH                                                */
/*==============================================================*/
create table LYLICH
(
   MADANGVIEN                     national varchar(5)            not null,
   STTCAPHHD                      int,
   DOTBD                          national varchar(5)            not null,
   STTLUONGCB                     int                            not null,
   MACB                           national varchar(5)            not null,
   SOTHE                          int,
   MATRINHDOCT                    national varchar(5)            not null,
   SOLL                           national varchar(5),
   MIENCT_SHD                     date,
   NGAYVAODANG                    date,
   NGAYRAKHOIDANG                 date,
   HINHTHUCRAKHOIDANG             national varchar(100),
   NGAYTUTRAN                     date,
   LYDOTUTRAN                     national varchar(100),
   NGAYVAODANGCHINTHUC            date,
   NGHENGHIEPTRUOCKHIVAODANG      national varchar(100),
   HSLUONG                        float,
   HSCHUCVU                       float,
   HSTHAMNIEN                     float,
   HSVUOTKHUNG                    float,
   primary key (MADANGVIEN)
);

/*==============================================================*/
/* Table: NAM                                                   */
/*==============================================================*/
create table NAM
(
   NAM                            int                            not null,
   MADANHHIEU                     national varchar(5)            not null,
   primary key (NAM)
);

/*==============================================================*/
/* Table: NGAY                                                  */
/*==============================================================*/
create table NGAY
(
   NGAY                           date                           not null,
   primary key (NGAY)
);

/*==============================================================*/
/* Table: NGHENGHIEP                                            */
/*==============================================================*/
create table NGHENGHIEP
(
   MANN                           national varchar(5)            not null,
   TENNN                          national varchar(100),
   primary key (MANN)
);

/*==============================================================*/
/* Table: NGHIEPVU                                              */
/*==============================================================*/
create table NGHIEPVU
(
   MANV                           national varchar(5)            not null,
   TENNV                          national varchar(100),
   primary key (MANV)
);

/*==============================================================*/
/* Table: NGHIQUYET                                             */
/*==============================================================*/
create table NGHIQUYET
(
   SONQ                           int                            not null,
   NGAY                           date                           not null,
   MACB                           national varchar(5),
   TONGSOUVBCH                    int,
   SLCOMAT                        int,
   SLVANGMAT                      int,
   LYDOVANG                       national varchar(100),
   CHUTRI                         national varchar(100),
   THUKY                          national varchar(100),
   UUDIEM                         national varchar(100),
   KHUYETDIEM                     national varchar(100),
   SLTANTHANH                     int,
   SLKTANTHANH                    int,
   LYDOKTANTHANH                  national varchar(100),
   NQDU                           bool,
   NQCB                           bool,
   primary key (SONQ)
);

/*==============================================================*/
/* Table: NGOAINGU                                              */
/*==============================================================*/
create table NGOAINGU
(
   MANGOAINGU                     national varchar(5)            not null,
   TENNGOAINGU                    national varchar(20),
   primary key (MANGOAINGU)
);

/*==============================================================*/
/* Table: NGUOITHANNT                                           */
/*==============================================================*/
create table NGUOITHANNT
(
   MADANGVIEN                     national varchar(5)            not null,
   STTNT                          int                            not null,
   TENNT                          national varchar(100),
   NOICUTRU                       national varchar(100),
   QUANHE                         national varchar(100),
   NGHENGHIEP                     national varchar(100),
   DACDIEMCT                      national varchar(1000),
   NGAYSINHNT                     date,
   primary key (MADANGVIEN, STTNT)
);

/*==============================================================*/
/* Table: NHIEMKY                                               */
/*==============================================================*/
create table NHIEMKY
(
   MANHIEMKY                      national varchar(5)            not null,
   TUNAM                          national varchar(4),
   DENNAM                         national varchar(4),
   primary key (MANHIEMKY)
);

/*==============================================================*/
/* Table: PHANLOAICB                                            */
/*==============================================================*/
create table PHANLOAICB
(
   NAM                            int                            not null,
   MACB                           national varchar(5)            not null,
   MUCPLCB                        national varchar(10),
   primary key (NAM, MACB)
);

/*==============================================================*/
/* Table: PHANLOAIDV                                            */
/*==============================================================*/
create table PHANLOAIDV
(
   MADANGVIEN                     national varchar(5)            not null,
   NAM                            int                            not null,
   MUCPLDV                        national varchar(10),
   primary key (MADANGVIEN, NAM)
);

/*==============================================================*/
/* Table: PHUONGXA                                              */
/*==============================================================*/
create table PHUONGXA
(
   MAPX                           national varchar(5)            not null,
   MAQH                           national varchar(5)            not null,
   TENPX                          national varchar(100),
   primary key (MAPX)
);

/*==============================================================*/
/* Table: QUANHUYEN                                             */
/*==============================================================*/
create table QUANHUYEN
(
   MAQH                           national varchar(5)            not null,
   MATT                           national varchar(5)            not null,
   TENQH                          national varchar(100),
   primary key (MAQH)
);

/*==============================================================*/
/* Table: QUATRINHCT                                            */
/*==============================================================*/
create table QUATRINHCT
(
   STTQT                          int                            not null,
   MADANGVIEN                     national varchar(5)            not null,
   LAMCV                          national varchar(100),
   DONVI                          national varchar(200),
   NGAYNHANCV                     date,
   NGAYHETCV                      date,
   primary key (STTQT)
);

/*==============================================================*/
/* Table: QUATRINHDT                                            */
/*==============================================================*/
create table QUATRINHDT
(
   STTDT                          int                            not null,
   MADANGVIEN                     national varchar(5)            not null,
   TENTRUONG                      national varchar(100),
   NGANHHOC                       national varchar(100),
   NAMDB                          national varchar(4),
   NAMKT                          national varchar(4),
   HINHTHUCHOC                    national varchar(100),
   VB_CC                          national varchar(100),
   primary key (STTDT)
);

/*==============================================================*/
/* Table: QUYETDINH                                             */
/*==============================================================*/
create table QUYETDINH
(
   SOQD                           int                            not null,
   NGAY                           date                           not null,
   TENQD                          national varchar(100),
   CACQD                          national varchar(1000),
   NOINHAN                        national varchar(100),
   NGUOIKYQD                      national varchar(100),
   CVNGUOIKYQD                    national varchar(100),
   primary key (SOQD)
);

/*==============================================================*/
/* Table: THANGNAM                                              */
/*==============================================================*/
create table THANGNAM
(
   THANGNAM                       national varchar(7)            not null,
   primary key (THANGNAM)
);

/*==============================================================*/
/* Table: THEDV                                                 */
/*==============================================================*/
create table THEDV
(
   SOTHE                          int                            not null,
   MADANGVIEN                     national varchar(5)            not null,
   NGAYCAPTHE                     date,
   primary key (SOTHE)
);

/*==============================================================*/
/* Table: THONGBAO                                              */
/*==============================================================*/
create table THONGBAO
(
   STTTB                          int                            not null,
   NGAY                           date                           not null,
   TENTB                          national varchar(100),
   NOIDUNG                        national varchar(1000),
   primary key (STTTB)
);

/*==============================================================*/
/* Table: THUONGBINH                                            */
/*==============================================================*/
create table THUONGBINH
(
   STTTBINH                       int                            not null,
   MADANGVIEN                     national varchar(5)            not null,
   LOAITB                         national varchar(10),
   primary key (STTTBINH)
);

/*==============================================================*/
/* Table: TINHTHANH                                             */
/*==============================================================*/
create table TINHTHANH
(
   MATT                           national varchar(5)            not null,
   TENTT                          national varchar(100),
   primary key (MATT)
);

/*==============================================================*/
/* Table: TONGIAO                                               */
/*==============================================================*/
create table TONGIAO
(
   MATONGIAO                      national varchar(5)            not null,
   TENTONGIAO                     national varchar(100),
   primary key (MATONGIAO)
);

/*==============================================================*/
/* Table: TRINHDOCT                                             */
/*==============================================================*/
create table TRINHDOCT
(
   MATRINHDOCT                    national varchar(5)            not null,
   TENTRINHDOCT                   national varchar(100),
   primary key (MATRINHDOCT)
);

/*==============================================================*/
/* Table: TRINHDOVH                                             */
/*==============================================================*/
create table TRINHDOVH
(
   MATRINHDOVH                    national varchar(5)            not null,
   TENTRINHDOVH                   national varchar(100),
   primary key (MATRINHDOVH)
);

/*==============================================================*/
/* Table: XUATNHAPNGU                                           */
/*==============================================================*/
create table XUATNHAPNGU
(
   STTXNN                         int                            not null,
   MADANGVIEN                     national varchar(5)            not null,
   NGAYNHAPNGU                    date,
   NGAYXUATNGU                    date,
   primary key (STTXNN)
);

alter table CAMTINHDANG add constraint FK_CTD_CHIBO foreign key (MACB)
      references CHIBO (MACB) on delete restrict on update restrict;

alter table CAMTINHDANG add constraint FK_CTD_THANGNAM foreign key (THANGNAM)
      references THANGNAM (THANGNAM) on delete restrict on update restrict;

alter table CAPTHEDANG add constraint FK_CAPTHEDANG foreign key (STTCAPTHE)
      references DSCAPTHEDANG (STTCAPTHE) on delete restrict on update restrict;

alter table CAPTHEDANG add constraint FK_CAPTHEDANG2 foreign key (MADANGVIEN)
      references LYLICH (MADANGVIEN) on delete restrict on update restrict;

alter table CO_TDNN add constraint FK_CO_TDNN foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

alter table CO_TDNN add constraint FK_CO_TDNN2 foreign key (MANGOAINGU)
      references NGOAINGU (MANGOAINGU) on delete restrict on update restrict;

alter table CVDEN add constraint FK_NGAY_CVDEN foreign key (NGAY)
      references NGAY (NGAY) on delete restrict on update restrict;

alter table CVDI add constraint FK_NGAY_CVDI foreign key (NGAY)
      references NGAY (NGAY) on delete restrict on update restrict;

alter table DANGPHI add constraint FK_CUA_THANGNAM foreign key (THANGNAM)
      references THANGNAM (THANGNAM) on delete restrict on update restrict;

alter table DANGPHI add constraint FK_DONGDANGPHI foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_CO_CM foreign key (MACM)
      references CHUYENMON (MACM) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_CO_HH foreign key (MAHOCHAM)
      references HOCHAM (MAHOCHAM) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_CO_HV foreign key (MAHOCVI)
      references HOCVI (MAHOCVI) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_CO_NN foreign key (MANN)
      references NGHENGHIEP (MANN) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_CO_NOISINH foreign key (MAPX)
      references PHUONGXA (MAPX) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_CO_NV foreign key (MANV)
      references NGHIEPVU (MANV) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_CO_QUEQUAN foreign key (PHU_MAPX)
      references PHUONGXA (MAPX) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_CO_TDVH foreign key (MATRINHDOVH)
      references TRINHDOVH (MATRINHDOVH) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_CO_TG foreign key (MATONGIAO)
      references TONGIAO (MATONGIAO) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_DV_TB2 foreign key (STTTBINH)
      references THUONGBINH (STTTBINH) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_DV_XNN2 foreign key (STTXNN)
      references XUATNHAPNGU (STTXNN) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_GT_CHUYENSHD foreign key (SOGIAYGT)
      references GIAYCHUYENSHD (SOGIAYGT) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_NOI_TAMTRU foreign key (PHU_MAPX2)
      references PHUONGXA (MAPX) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_NOI_THUONGTRU foreign key (PHU_MAPX3)
      references PHUONGXA (MAPX) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_THUOC_DT foreign key (MADT)
      references DANTOC (MADT) on delete restrict on update restrict;

alter table DANHHIEU add constraint FK_CO_DH foreign key (MADANGVIEN)
      references LYLICH (MADANGVIEN) on delete restrict on update restrict;

alter table DINUOCNGOAI add constraint FK_DI_NN foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

alter table GIAYCHUYENSHD add constraint FK_NGAY_LAP_GIAY foreign key (NGAY)
      references NGAY (NGAY) on delete restrict on update restrict;

alter table GIUCV add constraint FK_CV_GCVD foreign key (MACV)
      references CHUCVU (MACV) on delete restrict on update restrict;

alter table GIUCV add constraint FK_DV_GCVD foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

alter table GIUCV add constraint FK_NK_GCVD foreign key (MANHIEMKY)
      references NHIEMKY (MANHIEMKY) on delete restrict on update restrict;

alter table HUYHIEUDANG add constraint FK_HH_CUA_DV foreign key (MADANGVIEN)
      references LYLICH (MADANGVIEN) on delete restrict on update restrict;

alter table KHENTHUONGCB add constraint FK_CB_HTKT foreign key (MAHTKT)
      references HINHTHUCKT (MAHTKT) on delete restrict on update restrict;

alter table KHENTHUONGCB add constraint FK_KTCB foreign key (MACB)
      references CHIBO (MACB) on delete restrict on update restrict;

alter table KHENTHUONGCB add constraint FK_NAM_KTCB foreign key (NAM)
      references NAM (NAM) on delete restrict on update restrict;

alter table KHENTHUONGDV add constraint FK_DV_HTKT foreign key (MAHTKT)
      references HINHTHUCKT (MAHTKT) on delete restrict on update restrict;

alter table KHENTHUONGDV add constraint FK_KHENTHUONGDV foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

alter table KHENTHUONGDV add constraint FK_NAM_KTDV foreign key (NAM)
      references NAM (NAM) on delete restrict on update restrict;

alter table KYLUAT add constraint FK_BI_KL foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

alter table KYLUAT add constraint FK_DV_HTKL foreign key (MAHTKL)
      references HINHTHUCKL (MAHTKL) on delete restrict on update restrict;

alter table LYLICH add constraint FK_BD_CHO foreign key (DOTBD)
      references BDDVMOI (DOTBD) on delete restrict on update restrict;

alter table LYLICH add constraint FK_CAPHHD foreign key (STTCAPHHD)
      references DSCAPHHD (STTCAPHHD) on delete restrict on update restrict;

alter table LYLICH add constraint FK_CO_LL foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

alter table LYLICH add constraint FK_CO_TDCT foreign key (MATRINHDOCT)
      references TRINHDOCT (MATRINHDOCT) on delete restrict on update restrict;

alter table LYLICH add constraint FK_CUA_DV2 foreign key (SOTHE)
      references THEDV (SOTHE) on delete restrict on update restrict;

alter table LYLICH add constraint FK_LUONG_THANG foreign key (STTLUONGCB)
      references LUONGCB (STTLUONGCB) on delete restrict on update restrict;

alter table LYLICH add constraint FK_THUOC_CB foreign key (MACB)
      references CHIBO (MACB) on delete restrict on update restrict;

alter table NAM add constraint FK_DH_NAM foreign key (MADANHHIEU)
      references DANHHIEU (MADANHHIEU) on delete restrict on update restrict;

alter table NGHIQUYET add constraint FK_CO_NQ foreign key (MACB)
      references CHIBO (MACB) on delete restrict on update restrict;

alter table NGHIQUYET add constraint FK_NGAY_LAP_NQ foreign key (NGAY)
      references NGAY (NGAY) on delete restrict on update restrict;

alter table NGUOITHANNT add constraint FK_CO_NT foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

alter table PHANLOAICB add constraint FK_NAM_PLCB foreign key (NAM)
      references NAM (NAM) on delete restrict on update restrict;

alter table PHANLOAICB add constraint FK_PLCB foreign key (MACB)
      references CHIBO (MACB) on delete restrict on update restrict;

alter table PHANLOAIDV add constraint FK_DV_PL foreign key (MADANGVIEN)
      references LYLICH (MADANGVIEN) on delete restrict on update restrict;

alter table PHANLOAIDV add constraint FK_NAM_PL_DV foreign key (NAM)
      references NAM (NAM) on delete restrict on update restrict;

alter table PHUONGXA add constraint FK_CO_PX foreign key (MAQH)
      references QUANHUYEN (MAQH) on delete restrict on update restrict;

alter table QUANHUYEN add constraint FK_CO_QH foreign key (MATT)
      references TINHTHANH (MATT) on delete restrict on update restrict;

alter table QUATRINHCT add constraint FK_CONGTAC foreign key (MADANGVIEN)
      references LYLICH (MADANGVIEN) on delete restrict on update restrict;

alter table QUATRINHDT add constraint FK_DAOTAO foreign key (MADANGVIEN)
      references LYLICH (MADANGVIEN) on delete restrict on update restrict;

alter table QUYETDINH add constraint FK_NGAY_LAP_QD foreign key (NGAY)
      references NGAY (NGAY) on delete restrict on update restrict;

alter table THEDV add constraint FK_CUA_DV foreign key (MADANGVIEN)
      references LYLICH (MADANGVIEN) on delete restrict on update restrict;

alter table THONGBAO add constraint FK_NGAY_TB foreign key (NGAY)
      references NGAY (NGAY) on delete restrict on update restrict;

alter table THUONGBINH add constraint FK_DV_TB foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

alter table XUATNHAPNGU add constraint FK_DV_XNN foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

