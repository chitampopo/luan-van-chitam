/*==============================================================*/
/* DBMS name:      MySQL 4.0                                    */
/* Created on:     1/22/2015 11:49:23 PM                        */
/*==============================================================*/


/*==============================================================*/
/* Table: BDDVMOI                                               */
/*==============================================================*/
create table BDDVMOI
(
   DOTBD                          nvarchar(100)                           not null,
   NGAYBD                         date,
   NGAYKT                         date,
   GHICHU                         nvarchar(100),
   primary key (DOTBD)
);

/*==============================================================*/
/* Table: CHIBO                                                 */
/*==============================================================*/
create table CHIBO
(
   MACB                           nvarchar(100)                           not null,
   TENCB                          nvarchar(100),
   primary key (MACB)
);

/*==============================================================*/
/* Table: CHUCVU                                                */
/*==============================================================*/
create table CHUCVU
(
   MACV                           nvarchar(100)                           not null,
   TENCV                          nvarchar(100),
   primary key (MACV)
);

/*==============================================================*/
/* Table: CHUYENMON                                             */
/*==============================================================*/
create table CHUYENMON
(
   MACM                           nvarchar(100)                           not null,
   TENCM                          nvarchar(100),
   primary key (MACM)
);

/*==============================================================*/
/* Table: CO_TDNN                                               */
/*==============================================================*/
create table CO_TDNN
(
   MADANGVIEN                     nvarchar(100)                           not null,
   MANGOAINGU                     nvarchar(100)                           not null,
   primary key (MADANGVIEN, MANGOAINGU)
);

/*==============================================================*/
/* Table: DANGPHI                                               */
/*==============================================================*/
create table DANGPHI
(
   THANGNAM                       date                           not null,
   MADANGVIEN                     nvarchar(100)                           not null,
   SOTIEN                         int,
   primary key (THANGNAM)
);

/*==============================================================*/
/* Table: DANGVIEN                                              */
/*==============================================================*/
create table DANGVIEN
(
   MADANGVIEN                     nvarchar(100)                           not null,
   MANV                           nvarchar(100),
   MAPX                           nvarchar(100)                           not null,
   PHU_MAPX                       nvarchar(100)                           not null,
   PHU_MAPX2                      nvarchar(100)                           not null,
   MADT                           nvarchar(100)                           not null,
   MANN                           nvarchar(100)                           not null,
   MAHOCVI                        nvarchar(100),
   MACM                           nvarchar(100),
   MATRINHDOVH                    nvarchar(100)                           not null,
   MATONGIAO                      nvarchar(100)                           not null,
   MAHOCHAM                       nvarchar(100),
   PHU_MAPX3                      nvarchar(100)                           not null,
   HOTENKHAISINH                  nvarchar(100),
   HOTENSUDUNG                    nvarchar(100),
   BIDANH                         nvarchar(100),
   GIOITINH                       bool,
   NGAYSINH                       date,
   HOKHAU                         nvarchar(100),
   CMND                           int,
   THAMGIACM                      date,
   SUCKHOE                        nvarchar(100),
   THUONGBINH                     nvarchar(100),
   LIETSI                         bool,
   COCONGCM                       bool,
   XOA                            bool,
   NHAPNGU                        date,
   XUATNGU                        date,
   NGUOIGT1                       nvarchar(100),
   NGUOIGT2                       nvarchar(100),
   HINHANH                        nvarchar(100),
   CHUNGNHANCTD                   date,
   primary key (MADANGVIEN)
);

/*==============================================================*/
/* Table: DANHHIEU                                              */
/*==============================================================*/
create table DANHHIEU
(
   MADANHHIEU                     nvarchar(100)                           not null,
   MADANGVIEN                     nvarchar(100)                           not null,
   TENDANHHIEU                    nvarchar(100),
   primary key (MADANHHIEU)
);

/*==============================================================*/
/* Table: DANTOC                                                */
/*==============================================================*/
create table DANTOC
(
   MADT                           nvarchar(100)                           not null,
   TENDT                          nvarchar(100),
   primary key (MADT)
);

/*==============================================================*/
/* Table: DINUOCNGOAI                                           */
/*==============================================================*/
create table DINUOCNGOAI
(
   STT                            int                            not null,
   MADANGVIEN                     nvarchar(100)                           not null,
   QUOCGIA                        nvarchar(100),
   LYDODI                         nvarchar(100),
   NGAYDI                         date,
   NGAYVE                         date,
   primary key (STT)
);

/*==============================================================*/
/* Table: GIUCV                                                 */
/*==============================================================*/
create table GIUCV
(
   MANHIEMKY                      nvarchar(100)                           not null,
   MACV                           nvarchar(100)                           not null,
   MADANGVIEN                     nvarchar(100)                           not null,
   NGAYGIUCV                      date,
   NGAYTHOICV                     date,
   primary key (MANHIEMKY, MACV, MADANGVIEN)
);

/*==============================================================*/
/* Table: HINHTHUCKL                                            */
/*==============================================================*/
create table HINHTHUCKL
(
   MAHTKL                         nvarchar(100)                           not null,
   TENHTKL                        nvarchar(100),
   primary key (MAHTKL)
);

/*==============================================================*/
/* Table: HINHTHUCKT                                            */
/*==============================================================*/
create table HINHTHUCKT
(
   MAHTKT                         nvarchar(100)                           not null,
   TENHTKT                        nvarchar(100),
   primary key (MAHTKT)
);

/*==============================================================*/
/* Table: HOCHAM                                                */
/*==============================================================*/
create table HOCHAM
(
   MAHOCHAM                       nvarchar(100)                           not null,
   TENHOCHAM                      nvarchar(100),
   primary key (MAHOCHAM)
);

/*==============================================================*/
/* Table: HOCVI                                                 */
/*==============================================================*/
create table HOCVI
(
   MAHOCVI                        nvarchar(100)                           not null,
   TENHOCVI                       nvarchar(100),
   primary key (MAHOCVI)
);

/*==============================================================*/
/* Table: HUYHIEUDANG                                           */
/*==============================================================*/
create table HUYHIEUDANG
(
   MAHH                           nvarchar(100)                           not null,
   MADANGVIEN                     nvarchar(100)                           not null,
   TENHH                          nvarchar(100),
   NGAYCAPHH                      date,
   primary key (MAHH)
);

/*==============================================================*/
/* Table: KHENTHUONGCB                                          */
/*==============================================================*/
create table KHENTHUONGCB
(
   MAHTKT                         nvarchar(100)                           not null,
   MACB                           nvarchar(100)                           not null,
   NAM                            int                            not null,
   STTKTCB                        int,
   LYDOKTCB                       nvarchar(100),
   primary key (MAHTKT, MACB, NAM)
);

/*==============================================================*/
/* Table: KHENTHUONGDV                                          */
/*==============================================================*/
create table KHENTHUONGDV
(
   MADANGVIEN                     nvarchar(100)                           not null,
   MAHTKT                         nvarchar(100)                           not null,
   NAM                            int                            not null,
   STTKT                          int,
   LYDOKTDV                       nvarchar(100),
   NGAYLAPKT                      date,
   CAPQUYETDINH                   nvarchar(100),
   primary key (MADANGVIEN, MAHTKT, NAM)
);

/*==============================================================*/
/* Table: KYLUAT                                                */
/*==============================================================*/
create table KYLUAT
(
   MAHTKL                         nvarchar(100)                           not null,
   MAKYLUAT                       nvarchar(100)                           not null,
   MADANGVIEN                     nvarchar(100)                           not null,
   LYDOKLDV                       nvarchar(100),
   NGAYKL                         date,
   primary key (MAHTKL, MAKYLUAT)
);

/*==============================================================*/
/* Table: LYLICH                                                */
/*==============================================================*/
create table LYLICH
(
   MADANGVIEN                     nvarchar(100)                           not null,
   DOTBD                          nvarchar(100)                           not null,
   MATRINHDOCT                    nvarchar(100)                           not null,
   MACB                           nvarchar(100)                           not null,
   SOLL                           nvarchar(100),
   MIENCT_SHD                     date,
   NGAYVAODANG                    date,
   NGAYRAKHOIDANG                 date,
   HINHTHUCRAKHOIDANG             nvarchar(100),
   NGAYTUTRAN                     date,
   LYDOTUTRAN                     nvarchar(100),
   NGAYVAODANGCHINTHUC            date,
   NGHENGHIEPTRUOCKHIVAODANG      nvarchar(100),
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
   MADANHHIEU                     nvarchar(100)                           not null,
   primary key (NAM)
);

/*==============================================================*/
/* Table: NGHENGHIEP                                            */
/*==============================================================*/
create table NGHENGHIEP
(
   MANN                           nvarchar(100)                           not null,
   TENNN                          nvarchar(100),
   primary key (MANN)
);

/*==============================================================*/
/* Table: NGHIEPVU                                              */
/*==============================================================*/
create table NGHIEPVU
(
   MANV                           nvarchar(100)                           not null,
   TENNV                          nvarchar(100),
   primary key (MANV)
);

/*==============================================================*/
/* Table: NGHIQUYET                                             */
/*==============================================================*/
create table NGHIQUYET
(
   SONQ                           int                            not null,
   MACB                           nvarchar(100),
   NGAYLAP                        date,
   TONGSOUVBCH                    int,
   SLCOMAT                        int,
   SLVANGMAT                      int,
   LYDOVANG                       nvarchar(100),
   CHUTRI                         nvarchar(100),
   THUKY                          nvarchar(100),
   UUDIEM                         nvarchar(100),
   KHUYETDIEM                     nvarchar(100),
   SLTANTHANH                     int,
   SLKTANTHANH                    int,
   LYDOKTANTHANH                  nvarchar(100),
   NQDU                           bool,
   NQCB                           bool,
   primary key (SONQ)
);

/*==============================================================*/
/* Table: NGOAINGU                                              */
/*==============================================================*/
create table NGOAINGU
(
   MANGOAINGU                     nvarchar(100)                           not null,
   TENNGOAINGU                    nvarchar(100),
   primary key (MANGOAINGU)
);

/*==============================================================*/
/* Table: NGUOITHANNT                                           */
/*==============================================================*/
create table NGUOITHANNT
(
   MADANGVIEN                     nvarchar(100)                           not null,
   STTNT                          int                            not null,
   TENNT                          nvarchar(100),
   NOICUTRU                       nvarchar(100),
   QUANHE                         nvarchar(100),
   NGHENGHIEP                     nvarchar(100),
   DACDIEMCT                      nvarchar(100),
   NGAYSINHNT                     date,
   primary key (MADANGVIEN, STTNT)
);

/*==============================================================*/
/* Table: NHIEMKY                                               */
/*==============================================================*/
create table NHIEMKY
(
   MANHIEMKY                      nvarchar(100)                           not null,
   TUNAM                          nvarchar(100),
   DENNAM                         nvarchar(100),
   primary key (MANHIEMKY)
);

/*==============================================================*/
/* Table: PHANLOAICB                                            */
/*==============================================================*/
create table PHANLOAICB
(
   NAM                            int                            not null,
   MACB                           nvarchar(100)                           not null,
   MUCPLCB                        nvarchar(100),
   primary key (NAM, MACB)
);

/*==============================================================*/
/* Table: PHANLOAIDV                                            */
/*==============================================================*/
create table PHANLOAIDV
(
   MADANGVIEN                     nvarchar(100)                           not null,
   NAM                            int                            not null,
   MUCPLDV                        nvarchar(100),
   primary key (MADANGVIEN, NAM)
);

/*==============================================================*/
/* Table: PHUONGXA                                              */
/*==============================================================*/
create table PHUONGXA
(
   MAPX                           nvarchar(100)                           not null,
   MAQH                           nvarchar(100)                           not null,
   TENPX                          nvarchar(100),
   primary key (MAPX)
);

/*==============================================================*/
/* Table: QUANHUYEN                                             */
/*==============================================================*/
create table QUANHUYEN
(
   MAQH                           nvarchar(100)                           not null,
   MATT                           nvarchar(100)                           not null,
   TENQH                          nvarchar(100),
   primary key (MAQH)
);

/*==============================================================*/
/* Table: QUATRINHCT                                            */
/*==============================================================*/
create table QUATRINHCT
(
   STTQT                          int                            not null,
   MADANGVIEN                     nvarchar(100)                           not null,
   CHUCVU                         nvarchar(100),
   DONVI                          nvarchar(100),
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
   MADANGVIEN                     nvarchar(100)                           not null,
   TENTRUONG                      nvarchar(100),
   NGANHHOC                       nvarchar(100),
   NAMDB                          nvarchar(100),
   NAMKT                          nvarchar(100),
   HINHTHUCHOC                    nvarchar(100),
   VB_CC                          nvarchar(100),
   primary key (STTDT)
);

/*==============================================================*/
/* Table: THANGNAM                                              */
/*==============================================================*/
create table THANGNAM
(
   THANGNAM                       date                           not null,
   primary key (THANGNAM)
);

/*==============================================================*/
/* Table: THEDV                                                 */
/*==============================================================*/
create table THEDV
(
   SOTHE                          int                            not null,
   MADANGVIEN                     nvarchar(100)                           not null,
   NGAYCAPTHE                     date,
   primary key (SOTHE)
);

/*==============================================================*/
/* Table: TINHTHANH                                             */
/*==============================================================*/
create table TINHTHANH
(
   MATT                           nvarchar(100)                           not null,
   TENTT                          nvarchar(100),
   primary key (MATT)
);

/*==============================================================*/
/* Table: TONGIAO                                               */
/*==============================================================*/
create table TONGIAO
(
   MATONGIAO                      nvarchar(100)                           not null,
   TENTONGIAO                     nvarchar(100),
   primary key (MATONGIAO)
);

/*==============================================================*/
/* Table: TRINHDOCT                                             */
/*==============================================================*/
create table TRINHDOCT
(
   MATRINHDOCT                    nvarchar(100)                           not null,
   TENTRINHDOCT                   nvarchar(100),
   primary key (MATRINHDOCT)
);

/*==============================================================*/
/* Table: TRINHDOVH                                             */
/*==============================================================*/
create table TRINHDOVH
(
   MATRINHDOVH                    nvarchar(100)                           not null,
   TENTRINHDOVH                   nvarchar(100),
   primary key (MATRINHDOVH)
);

alter table CO_TDNN add constraint FK_CO_TDNN foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

alter table CO_TDNN add constraint FK_CO_TDNN2 foreign key (MANGOAINGU)
      references NGOAINGU (MANGOAINGU) on delete restrict on update restrict;

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

alter table DANGVIEN add constraint FK_NOI_TAMTRU foreign key (PHU_MAPX3)
      references PHUONGXA (MAPX) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_NOI_THUONGTRU foreign key (PHU_MAPX2)
      references PHUONGXA (MAPX) on delete restrict on update restrict;

alter table DANGVIEN add constraint FK_THUOC_DT foreign key (MADT)
      references DANTOC (MADT) on delete restrict on update restrict;

alter table DANHHIEU add constraint FK_CO_DH foreign key (MADANGVIEN)
      references LYLICH (MADANGVIEN) on delete restrict on update restrict;

alter table DINUOCNGOAI add constraint FK_DI_NN foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

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

alter table LYLICH add constraint FK_CO_LL foreign key (MADANGVIEN)
      references DANGVIEN (MADANGVIEN) on delete restrict on update restrict;

alter table LYLICH add constraint FK_CO_TDCT foreign key (MATRINHDOCT)
      references TRINHDOCT (MATRINHDOCT) on delete restrict on update restrict;

alter table LYLICH add constraint FK_THUOC_CB foreign key (MACB)
      references CHIBO (MACB) on delete restrict on update restrict;

alter table NAM add constraint FK_DH_NAM foreign key (MADANHHIEU)
      references DANHHIEU (MADANHHIEU) on delete restrict on update restrict;

alter table NGHIQUYET add constraint FK_CO_NQ foreign key (MACB)
      references CHIBO (MACB) on delete restrict on update restrict;

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

alter table THEDV add constraint FK_CUA_DV foreign key (MADANGVIEN)
      references LYLICH (MADANGVIEN) on delete restrict on update restrict;

