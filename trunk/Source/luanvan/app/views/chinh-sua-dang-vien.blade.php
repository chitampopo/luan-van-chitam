<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Chỉnh sửa thông tin Đảng viên</title>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script2.js')}}" type="text/javascript"></script>
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="col-md-9 container alert alert-info">

            {{ Form::open(array('url' => 'cap-nhat-dang-vien-action', 'files' => true)) }}  
            <div class="col-md-12 container">
                <center><h2>Trang cập nhật thông tin Đảng viên</h2></center>
                {{ Form::submit('Lưu thông tin Đảng viên', array('class' => 'btn btn-default col-md-3')); }}
                <button type="button" class="btn btn-default col-md-3" onclick="window.location ='{{ url("xoa-dang-vien/".$dangVien->MADANGVIEN) }}'">Xóa Đảng viên</button>
                <button type="button" class="btn btn-default col-md-3" id="hider">Ẩn thông tin cơ bản</button>
                <button type="button" class="btn btn-default col-md-3" id="shower">Ẩn thông tin khác</button><br>

            </div>
            <div class="col-md-12"><br><br></div>
            <div class="col-md-12" id="box1">

                <input type="hidden" value="{{$dangVien->MADANGVIEN}}" name="maDangVien">
                <div class="form-group col-md-6 container">
                    <img src="{{asset('storage/directory/'.$dangVien->HINHANH)}}" alt="Avatar" class="img-circle" width="160px" height="160px"><br><br>
                    {{ Form::label('', 'Hình ảnh'); }}<br>
                    <input name="hinhanh" type="file" class="form-control">

                    {{ Form::label('', 'Giới tính'); }}<br>
                    <div class="form-control">
                        <label>
                            <input type="radio" name="gioitinh" value="1" required
                            <?php
                            if ($dangVien->GIOITINH == "1") {
                                echo "checked='true'";
                            }
                            ?>
                                   > Nam
                        </label>
                        <label>
                            <input type="radio" name="gioitinh" value="0" required
                            <?php
                            if ($dangVien->GIOITINH == "0") {
                                echo "checked='true'";
                            }
                            ?>
                                   > Nữ<br>
                        </label>
                    </div>

                    {{ Form::label('', 'Nơi sinh'); }}<br>
                    <select class="form-control" name="noisinh">
                        @foreach ($listTinh as $tinh)
                        @foreach ($listHuyen as $huyen)
                        @foreach ($listXa as $xa)
                        @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT )
                        <option value="{{$xa->MAPX}}"
                        <?php
                        if ($dangVien->MAPX == $xa->MAPX) {
                            echo "selected";
                        }
                        ?>
                                > {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }} </option>
                        @endif
                        @endforeach
                        @endforeach   
                        @endforeach
                    </select>

                    {{ Form::label('', 'Nơi thường trú'); }}<br>
                    <select class="form-control" name="thuongtru">
                        @foreach ($listTinh as $tinh)
                        @foreach ($listHuyen as $huyen)
                        @foreach ($listXa as $xa)
                        @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT )
                        <option value="{{$xa->MAPX}}"
                        <?php
                        if ($dangVien->PHU_MAPX3 == $xa->MAPX) {
                            echo "selected";
                        }
                        ?>
                                > {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }} </option>
                        @endif
                        @endforeach
                        @endforeach   
                        @endforeach
                    </select>

                    {{ Form::label('', 'Dân tộc'); }}<br>
                    <select class="form-control" name="dantoc" required>
                        @foreach( $listDanToc as $danToc)
                        <option value="{{$danToc->MADT}}"
                        <?php
                        if ($dangVien->MADT == $danToc->MADT) {
                            echo "selected";
                        }
                        ?>    
                                >{{$danToc->TENDT}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('', 'Nghề nghiệp khi vào Đảng') }}<br>
                    <select class="form-control" name="nghenghiepkhivaodang">
                        @foreach( $listNgheNghiep as $ngheNghiep)
                        <option value="{{$ngheNghiep->MANN}}"
                        <?php
                        if ($lyLich->NGHENGHIEPTRUOCKHIVAODANG == $ngheNghiep->MANN) {
                            echo "selected";
                        }
                        ?> 
                                >{{$ngheNghiep->TENNN}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('', 'Ngày vào Đảng') }}<br>
                    <input class="form-control" data-provide="datepicker" name="ngayvaodang" type="text" value="{{$lyLich->NGAYVAODANG}}" required>

                    {{ Form::label('', 'Người giới thiệu 1'); }}<br>
                    <input class="form-control" name="nguoigioithieu1" type="text" value="{{$dangVien->NGUOIGT1}}" required>

                    {{ Form::label('', 'Người giới thiệu 2'); }}<br>
                    <input class="form-control" name="nguoigioithieu2" type="text" value="{{$dangVien->NGUOIGT2}}" required>

                    {{ Form::label('', 'Ngày chính thức'); }}<br>
                    {{ Form::text('ngaychinhthuc', $lyLich->NGAYVAODANGCHINHTHUC , array('class' => 'form-control','data-provide' => 'datepicker')) }}

                    {{ Form::label('', 'Ngày vào Đoàn TNCSHCM'); }}<br>
                    {{ Form::text('ngayvaodoan', $vaoDoan -> NGAYVAODOAN, array('class' => 'form-control','data-provide' => 'datepicker')) }}

                    {{ Form::label('', 'Trình độ văn hóa'); }}<br>
                    <select class="form-control" name="trinhdovh">
                        @foreach( $listTrinhDoVH as $trinhDoVH)
                        <option value="{{$trinhDoVH->MATRINHDOVH}}"
                        <?php
                        if ($dangVien->MATRINHDOVH == $trinhDoVH->MATRINHDOVH) {
                            echo "selected";
                        }
                        ?> 
                                >{{$trinhDoVH->TENTRINHDOVH}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('', 'Chuyên môn'); }}<br>
                    <select class="form-control" name="chuyenmon">
                        <option value="0"
                        <?php
                        if ($dangVien->MACM == null) {
                            echo "selected";
                        }
                        ?>
                                >Không</option>
                        @foreach( $listChuyenMon as $chuyenMon)
                        <option value="{{$chuyenMon->MACM}}"
                        <?php
                        if ($dangVien->MACM == $chuyenMon->MACM) {
                            echo "selected";
                        }
                        ?> 
                                >{{$chuyenMon->TENCM}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('', 'Học vị'); }}<br>
                    <select class="form-control" name="hocvi">
                        <option value="0"
                        <?php
                        if ($dangVien->MAHOCVI == null) {
                            echo "selected";
                        }
                        ?>
                                >Không</option>
                        @foreach( $listHocVi as $hocVi)
                        <option value="{{$hocVi->MAHOCVI}}"
                        <?php
                        if ($dangVien->MAHOCVI == $hocVi->MAHOCVI) {
                            echo "selected";
                        }
                        ?> 
                                >{{$hocVi->TENHOCVI}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('', 'Tình trạng sức khỏe'); }}<br>
                    <input class="form-control" name="suckhoe" type="text" value ="{{$dangVien-> SUCKHOE}}" required>

                    {{ Form::label('', 'Gia đình liệt sĩ'); }}<br>
                    <div class="form-control">
                        <label>
                            <input type="checkbox" name="lietsi" 
                            <?php
                            if ($dangVien->GDLIETSI == "1") {
                                echo "checked";
                            }
                            ?> >
                        </label>
                    </div>

                    {{ Form::label('', 'Số thẻ Đảng'); }}<br>
                    <input class="form-control" name="thedang" type="text" pattern="^([0-9]){8,9}" value="{{$theDang->SOTHE}}">
                    <span class="help-block with-errors">Số thẻ Đảng gồm 8 đến 9 chữ số</span>

                    {{ Form::label('', 'Ngày cấp thẻ'); }}<br>
                    @if( $theDang->NGAYCAPTHE == '01-01-1970')
                    <input class="form-control" data-provide="datepicker" name="ngaycapthedang" type="text" value="" >
                    @else
                    {{ Form::text('ngaycapthedang', $lyLich-> MIENCT_SHD , array('class' => 'form-control','data-provide' => 'datepicker')) }}
                    @endif

                    {{ Form::label('', 'Hệ số lương'); }}<br>
                    {{ Form::text('hsluong', number_format($lyLich->HSLUONG,2 ), array('class' => 'form-control')); }}

                    {{ Form::label('', 'Ngày nhập ngũ'); }}<br>
                    {{ Form::text('nhapngu', $xuatNhapNgu->NGAYNHAPNGU, array('class' => 'form-control','data-provide' => 'datepicker')) }}     

                    {{ Form::label('', 'Phụ cấp thâm niên'); }}<br>
                    {{ Form::text('thamnien', number_format($lyLich -> HSTHAMNIEN ,2 ), array('class' => 'form-control')); }}


                    {{ Form::label('', 'Ngày từ trần'); }}<br>
                    {{ Form::text('ngaytutran', $tuTran->NGAYTUTRAN, array('class' => 'form-control','data-provide' => 'datepicker')) }}  

                    {{ Form::label('', 'Chứng minh nhân dân'); }}<br>
                    <input class="form-control" name="cmnd" type="text" value="{{ $dangVien->CMND}}" required maxlength="9" data-minlength="8" pattern="^([0-9]){9}">
                </div>

                <div class="form-group col-md-6 container">

                    <div>
                        <span></span>
                    </div>
                    {{ Form::label('', 'Họ tên khai sinh'); }}<br>
                    <input class="form-control" name="hotenkhaisinh" type="text" value="{{$dangVien -> HOTENKHAISINH}}" required>

                    {{ Form::label('', 'Họ tên đang sử dụng'); }}<br>
                    <input class="form-control" name="hotensudung" type="text" value="{{$dangVien -> HOTENSUDUNG}}" required>

                    {{ Form::label('', 'Bí danh'); }}<br>
                    {{ Form::text('bidanh', $dangVien -> BIDANH, array('class' => 'form-control')); }}

                    {{ Form::label('', 'Chi bộ'); }}<br>
                    <select class="form-control" name="chibo">
                        @foreach( $listChiBo as $chiBo)
                        <option value="{{$chiBo->MACB}}"
                        <?php
                        if ($lyLich->MACB == $chiBo->MACB) {
                            echo "selected";
                        }
                        ?>
                                >{{$chiBo->TENCB}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('', 'Ngày sinh'); }}<br>
                    <input class="form-control" data-provide="datepicker" name="ngaysinh" type="text" value="{{$dangVien -> NGAYSINH or null}}" required>

                    {{ Form::label('', 'Quê quán'); }}<br>
                    <select class="form-control" name="quequan">
                        @foreach ($listTinh as $tinh)
                        @foreach ($listHuyen as $huyen)
                        @foreach ($listXa as $xa)
                        @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT )
                        <option value="{{$xa->MAPX}}"
                        <?php
                        if ($dangVien->PHU_MAPX == $xa->MAPX) {
                            echo "selected";
                        }
                        ?>
                                > {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }} </option>
                        @endif
                        @endforeach
                        @endforeach   
                        @endforeach
                    </select>

                    {{ Form::label('', 'Nơi tạm trú'); }}<br>
                    <select class="form-control" name="tamtru">
                        <option value="0">Không</option>
                        @foreach ($listTinh as $tinh)
                        @foreach ($listHuyen as $huyen)
                        @foreach ($listXa as $xa)
                        @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT )
                        <option value="{{$xa->MAPX}}"
                        <?php
                        if ($dangVien->PHU_MAPX2 == $xa->MAPX) {
                            echo "selected";
                        }
                        ?>
                                > {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }} </option>
                        @endif
                        @endforeach
                        @endforeach   
                        @endforeach
                    </select>

                    {{ Form::label('', 'Tôn giáo'); }}<br>
                    <select class="form-control" name="tongiao">
                        <option value="0">Không</option>
                        @foreach( $listTonGiao as $tonGiao)
                        <option value="{{$tonGiao->MATONGIAO}}"
                        <?php
                        if ($dangVien->MATONGIAO == $tonGiao->MATONGIAO) {
                            echo "selected";
                        }
                        ?>
                                >{{$tonGiao->TENTONGIAO}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('', 'Nghề nghiệp đang làm'); }}<br>
                    <select class="form-control" name="nghenghiepdanglam">
                        @foreach( $listNgheNghiep as $ngheNghiep)
                        <option value="{{$ngheNghiep->MANN}}"
                        <?php
                        if ($dangVien->MANN == $ngheNghiep->MANN) {
                            echo "selected";
                        }
                        ?>
                                >{{$ngheNghiep->TENNN}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('', 'Tại chi bộ') }}<br>
                    {{ Form::text('noivaodang', $lyLich -> CBVAODANG, array('class' => 'form-control')); }}

                    {{ Form::label('', 'Chức vụ người giới thiệu 1'); }}<br>
                    <input class="form-control" name="cvnguoigioithieu1" type="text" value="{{$dangVien -> CVNGUOIGT1}}" required>

                    {{ Form::label('', 'Chức vụ người giới thiệu 2'); }}<br>
                    {{ Form::text('cvnguoigioithieu2', $dangVien -> CVNGUOIGT2, array('class' => 'form-control')); }}

                    {{ Form::label('', 'Tại chi bộ'); }}<br>
                    {{ Form::text('taichibochinhthuc', $lyLich -> CBVAODANGCHINHTHUC, array('class' => 'form-control')); }}

                    {{ Form::label('', 'Tại'); }}<br>
                    {{ Form::text('noivaodoan', $vaoDoan -> NOIVAODOAN, array('class' => 'form-control')); }}

                    {{ Form::label('', 'Trình độ chính trị'); }}<br>
                    <select class="form-control" name="trinhdoct">
                        @foreach( $listTrinhDoCT as $trinhDoCT)
                        <option value="{{$trinhDoCT->MATRINHDOCT}}"
                        <?php
                        if ($lyLich->MATRINHDOCT == $trinhDoCT->MATRINHDOCT) {
                            echo "selected";
                        }
                        ?>
                                >{{$trinhDoCT->TENTRINHDOCT}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('', 'Nghiệp vụ'); }}<br>
                    <select class="form-control" name="nghiepvu">
                        <option value="0"
                        <?php
                        if ($dangVien->MANV == null) {
                            echo "selected";
                        }
                        ?>
                                >Không</option>
                        @foreach( $listNghiepVu as $nghiepVu)
                        <option value="{{$dangVien -> MANV}}"
                        <?php
                        if ($dangVien->MANV == $nghiepVu->MANV) {
                            echo "selected";
                        }
                        ?>
                                >{{$nghiepVu->TENNV}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('', 'Học hàm'); }}<br>
                    <select class="form-control" name="hocham">
                        <option value="0">Không</option>
                        @foreach( $listHocHam as $hocHam)
                        <option value="{{$hocHam->MAHOCHAM}}"
                        <?php
                        if ($dangVien->MAHOCHAM == $hocHam->MAHOCHAM) {
                            echo "selected";
                        }
                        ?>
                                >{{$hocHam->TENHOCHAM}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('', 'Thương binh'); }}<br>
                    <select class="form-control" name="thuongbinh">
                        <option value="0"
                        <?php
                        if ($thuongBinh->LOAITB == "0") {
                            echo "selected";
                        }
                        ?>
                                >Không</option>
                        <option value="1"
                        <?php
                        if ($thuongBinh->LOAITB == "1") {
                            echo "selected";
                        }
                        ?>
                                >1/4</option>
                        <option value="2"
                        <?php
                        if ($thuongBinh->LOAITB == "2") {
                            echo "selected";
                        }
                        ?>
                                >2/4</option>
                        <option value="3"
                        <?php
                        if ($thuongBinh->LOAITB == "3") {
                            echo "selected";
                        }
                        ?>
                                >3/4</option>
                        <option value="4"
                        <?php
                        if ($thuongBinh->LOAITB == "4") {
                            echo "selected";
                        }
                        ?>
                                >4/4</option>
                    </select>
                    
                   
                    {{ Form::label('', 'Ngày miễn công tác và SHĐ'); }}<br>
                    @if( $lyLich-> MIENCT_SHD == '01-01-1970')
                    <input class="form-control" data-provide="datepicker" name="ngaysinh" type="text" value="" required="">
                    @else
                    {{ Form::text('mienct', $lyLich-> MIENCT_SHD , array('class' => 'form-control','data-provide' => 'datepicker')) }}
                    @endif
                    

                    {{ Form::label('', 'Số lý lịch Đảng'); }}<br>
                    <input class="form-control" name="lylich" type="text" value="{{ $lyLich->SOLL}}" pattern="^[0-9]{6}[A-z]{1,3}">
                    <span class="help-block with-errors">Số lý lịch Đảng gồm 6 chữ số và từ 1 đến 3 ký tự</span>

                    {{ Form::label('', 'Phụ cấp chức vụ'); }}<br>
                    {{ Form::text('pcchucvu', number_format($lyLich->HSCHUCVU,2 ), array('class' => 'form-control')); }}

                    {{ Form::label('', 'Phụ cấp vượt khung'); }}<br>
                    {{ Form::text('vuotkhung', number_format($lyLich->HSVUOTKHUNG,2 ), array('class' => 'form-control')); }}

                    {{ Form::label('', 'Ngày xuất ngũ'); }}<br>
                    {{ Form::text('xuatngu', $xuatNhapNgu -> NGAYXUATNGU, array('class' => 'form-control','data-provide' => 'datepicker')) }} 

                    {{ Form::label('', 'Gia đình có công với cách mạng'); }}<br>
                    <div class="form-control">
                        <label>
                            <input type="checkbox" name="giadinhcm" 
                            <?php
                            if ($dangVien->COCONGCM == "1") {
                                echo "checked";
                            }
                            ?> >
                        </label>
                    </div>

                    {{ Form::label('', 'Lý do từ trần'); }}<br>
                    {{ Form::text('lydotutran', $tuTran->LYDOTUTRAN, array('class' => 'form-control')); }}

                    {{ Form::label('', 'Số điện thoại'); }}<br>
                    {{ Form::text('dienthoai', $dangVien->SDT, array('class' => 'form-control')); }}

                    {{ Form::label('', 'Email'); }}<br>
                    {{ Form::email('email', $dangVien->EMAIL, array('class' => 'form-control')); }}
                </div>

            </div>
            <div class="col-md-12 session" id="box">
                <p class="bg-info"><label>Khen thưởng</label></p>
                <input id="ktkhenthuong" value="<?php
                for ($i = 1; $i <= $danhSachKhenThuong; $i++) {
                    echo "+" . $i;
                }
                if ($danhSachKhenThuong == 0) {
                    echo "+1";
                }
                ?>" type="hidden" name="ktkhenthuong">
                <table class="table" id="POITable5">
                    <thead>
                        <tr>
                            <th>Hình thức khen thưởng</th> 
                            <th>Ngày lập quyết định</th> 
                            <th>Cấp quyết định</th> 
                            <th class="col-md-1"><button class="form-control" type='button' onclick="insRow5();">Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody id="bodyPOITable5">
<?php $count = 1; ?>
                        @foreach( $khenThuongDangVien as $khenThuongDV)
                        <tr>
                            <td>
                                <select class="form-control" name="{{'khenthuong'.$count}}" id="dsKhenThuong">
                                    <option value="0">Không</option>
                                    @foreach( $listHTKT as $khenThuong)
                                    <option value="{{$khenThuong->MAHTKT}}"
                                    <?php
                                    if ($khenThuongDV->MAHTKT == $khenThuong->MAHTKT) {
                                        echo "selected";
                                    }
                                    ?>
                                            >{{$khenThuong->TENHTKT}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td><input class="form-control" data-provide="datepicker" name="{{'ngaykt'.$count}}" type="text" value="{{date("d-m-Y", strtotime($khenThuongDV->NGAYLAPKT))}}"></td>
                            <td><input class="form-control" name="{{'capkt'.$count}}" type="text" value="{{$khenThuongDV->CAPQUYETDINH}}"></td> 
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow5(this)">Xóa</button>
                            </td> 
                        </tr>
<?php $count++; ?>
                        @endforeach
                    </tbody>    
                </table>

                <p class="bg-info"><label>Kỷ luật</label></p>
                <input id="ktkyluat" value="<?php
                for ($i = 1; $i <= $danhSachKyLuat; $i++) {
                    echo "+" . $i;
                }
                if ($danhSachKyLuat == 0) {
                    echo "+1";
                }
                ?>" type="hidden" name="ktkyluat">
                <table class="table" data-height="299" id="POITable7">
                    <thead>
                        <tr>
                            <th>Hình thức kỷ luật</th> 
                            <th>Năm kỷ luật</th> 
                            <th>Lý do</th> 
                            <th class="col-md-1"><button class="form-control" type='button' onclick="insRow7();">Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody id="bodyPOITable7">
<?php $countKyLuat = 1; ?>
                        @foreach( $kyLuatDangVien as $kyLuatDV)
                        <tr>
                            <td>
                                <select class="form-control" name="{{'kyluat'.$countKyLuat}}" id="dsKyLuat">
                                    <option value="0">Không</option>
                                    @foreach( $listHTKL as $kyLuat )
                                    <option value="{{$kyLuat->MAHTKL}}"
                                    <?php
                                    if ($kyLuatDV->MAHTKL == $kyLuat->MAHTKL) {
                                        echo "selected";
                                    }
                                    ?>
                                            >{{$kyLuat->TENHTKL}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td><input class="form-control" name="{{'ngaykl'.$countKyLuat}}" type="text" value="{{$kyLuatDV->NAM}}"></td> 
                            <td><input class="form-control" name="{{'lydokl'.$countKyLuat}}" type="text" value="{{$kyLuatDV->LYDOKLDV}}"></td>
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow7(this)">Xóa</button>
                            </td> 
                        </tr>
<?php $countKyLuat++; ?>
                        @endforeach
                    </tbody>
                </table>

                <p class="bg-info"><label>Huy hiệu Đảng</label></p>
                <input id="kthuyhieu" value="<?php
for ($i = 1; $i <= $danhSachHuyHieu; $i++) {
    echo "+" . $i;
}
?>" type="hidden" name="kthuyhieu">
                <table class="table" data-height="299" id="POITable6">
                    <thead>
                        <tr>
                            <th>Tên huy hiệu Đảng</th> 
                            <th>Ngày lập quyết định</th> 
                            <th class="col-md-1"><button class="form-control" type='button' onclick="insRow6();">Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody id="bodyPOITable6">   
<?php $countHuyHieu = 1; ?>
                        @foreach( $huyHieuDang as $huyHieu)
                        <tr>
                            <td><input class="form-control" name="{{'huyhieu'.$countHuyHieu}}" type="text" value="{{$huyHieu->TENHH}}"></td> 
                            <td><input class="form-control" data-provide="datepicker" name="{{'ngayhh'.$countHuyHieu}}" type="text" value="{{$huyHieu->NGAYCAPHH}}"></td> 
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow6(this)">Xóa</button>
                            </td> 
                        </tr>
<?php $countHuyHieu++; ?>
                        @endforeach
                    </tbody>
                </table>

                <p class="bg-info"><label>Ngoại ngữ</label></p>
                <input id="ktngoaingu" value="<?php
                for ($i = 1; $i <= $danhSachKTNgoaiNgu; $i++) {
                    echo "+" . $i;
                }
                if ($danhSachKTNgoaiNgu == 0) {
                    echo "+1";
                }
                ?>" type="hidden" name="ktngoaingu">
                <table class="table" data-height="299" id="POITable4">
                    <thead>
                        <tr>
                            <th>Trình độ ngoại ngữ</th> 
                            <th class="col-md-1"><button class="form-control" type='button' onclick="insRow4();">Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody id="bodyPOITable4">
<?php $countNgoaiNgu = 1; ?>
                        @foreach( $danhSachNgoaiNgu as $dsNgoaiNgu)
                        <tr>
                            <td>
                                <select class="form-control" name="{{'trinhdongoaingu'.$countNgoaiNgu}}" id="dsNgoaiNgu">
                                    <option value="0">Không</option>
                                    @foreach( $listNgoaiNgu as $ngoaiNgu)
                                    <option value="{{$ngoaiNgu->MANGOAINGU}}"
                                    <?php
                                    if ($dsNgoaiNgu->MANGOAINGU == $ngoaiNgu->MANGOAINGU) {
                                        echo "selected";
                                    }
                                    ?>
                                            >{{$ngoaiNgu->TENNGOAINGU}}</option>
                                    @endforeach
                                </select>
                            </td> 
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow4(this)">Xóa</button>
                            </td> 
                        </tr>
<?php $countNgoaiNgu++; ?>
                        @endforeach
                    </tbody>
                </table>

                <p class="bg-info"><label>Quá trình công tác</label></p>
                <input id="ktcongtac" value="<?php
                for ($i = 1; $i <= $danhSachCongTac; $i++) {
                    echo "+" . $i;
                }
                if ($danhSachCongTac == 0) {
                    echo "+1";
                }
                ?>" type="hidden" name="ktcongtac">
                <table class="table" data-height="299" id="POITable">
                    <thead>
                        <tr>
                            <th class="col-md-2">Từ ngày</th> 
                            <th class="col-md-2">Đến ngày</th> 
                            <th>Chức vụ</th> 
                            <th>Đơn vị</th> 
                            <th class="col-md-1"><button class="form-control" type='button' onclick="insRow();">Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody id="bodyPOITable">
<?php $countCongTac = 1; ?>
                        @foreach( $quaTrinhCongTac as $congTac)
                        <tr>
                            @if ( date("d-m-Y", strtotime($congTac->NGAYNHANCV)) == "01-01-1970" )
                            <td><input class="form-control" data-provide="datepicker" name="{{'cttungay'.$countCongTac}}" type="text" value=""></td>
                            @else
                            <td><input class="form-control" data-provide="datepicker" name="{{'cttungay'.$countCongTac}}" type="text" value="{{date("d-m-Y", strtotime($congTac->NGAYNHANCV))}}"></td>
                            @endif
                            @if ( date("d-m-Y", strtotime($congTac->NGAYHETCV)) == "01-01-1970" )
                            <td><input class="form-control" data-provide="datepicker" name="{{'ctdenngay'.$countCongTac}}" type="text" value=""></td> 
                            @else
                            <td><input class="form-control" data-provide="datepicker" name="{{'ctdenngay'.$countCongTac}}" type="text" value="{{date("d-m-Y", strtotime($congTac->NGAYHETCV))}}"></td> 
                            @endif
                            <td><input class="form-control" name="{{'ctchucvu'.$countCongTac}}" type="text" value="{{$congTac->LAMCV}}"></td>
                            <td><input class="form-control" name="{{'ctdonvi'.$countCongTac}}" type="text" value="{{$congTac->DONVI}}"></td> 
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow(this)">Xóa</button>
                            </td> 
                        </tr>
<?php $countCongTac++; ?>
                        @endforeach
                    </tbody>
                </table>

                <p class="bg-info"><label>Quá trình đào tạo</label></p>
                <input id="ktdaotao" value="<?php
                for ($i = 1; $i <= $danhSachDaoTao; $i++) {
                    echo "+" . $i;
                }
                if ($danhSachDaoTao == 0) {
                    echo "+1";
                }
                ?>" type="hidden" name="ktdaotao">
                <table class="table" data-height="299" id="POITable1">
                    <thead>
                    <th>Trường</th> 
                    <th>Ngành học</th> 
                    <th>Từ</th> 
                    <th>Đến</th> 
                    <th>Hình thức học</th> 
                    <th>Văn bằng, Chứng chỉ</th> 
                    <th class="col-md-1"><button class="form-control" type='button' onclick="insRow1();">Thêm</button></th>
                    </thead>
                    <tbody id="bodyPOITable1">
<?php $countDaoTao = 1; ?>
                        @foreach( $quaTrinhDaoTao as $daoTao)
                        <tr>
                            <td><input class="form-control" name="{{'dttruong'.$countDaoTao}}" type="text" value="{{$daoTao->TENTRUONG}}"></td> 
                            <td><input class="form-control" name="{{'dtnganh'.$countDaoTao}}" type="text" value="{{$daoTao->NGANHHOC}}"></td> 
                            <td><input class="form-control" name="{{'dttu'.$countDaoTao}}" type="text" value="{{$daoTao->NAMDB}}"></td>
                            <td><input class="form-control" name="{{'dtden'.$countDaoTao}}" type="text" value="{{$daoTao->NAMKT}}"></td> 
                            <td><input class="form-control" name="{{'dthinhthuc'.$countDaoTao}}" type="text" value="{{$daoTao->HINHTHUCHOC}}"></td>
                            <td><input class="form-control" name="{{'dtvanbang'.$countDaoTao}}" type="text" value="{{$daoTao->VB_CC}}"></td>
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow1(this)">Xóa</button>
                            </td> 
                        </tr>
<?php $countDaoTao++; ?>
                        @endforeach
                    </tbody>
                </table>

                <p class="bg-info"><label>Đi nước ngoài</label></p>
                <input id="ktnuocngoai" value="<?php
for ($i = 1; $i <= $danhSachNuocNgoai; $i++) {
    echo "+" . $i;
}
if ($danhSachNuocNgoai == 0) {
                    echo "+1";
                }
?>" type="hidden" name="ktnuocngoai">
                <table class="table" data-height="299" id="POITable2">
                    <thead>
                    <th>Ngày đi</th> 
                    <th>Ngày về</th> 
                    <th>Quốc gia</th> 
                    <th>Lý do đi</th> 
                    <th class="col-md-1"><button class="form-control" type='button' onclick="insRow2();">Thêm</button></th>
                    </thead>
                    <tbody id="bodyPOITable2">
<?php $countNuocNgoai = 1; ?>
                        @foreach( $diNuocNgoai as $diNN)
                        <tr>
                            @if(date("d-m-Y", strtotime($diNN -> NGAYDI)) == '01-01-1970')
                            <td><input class="form-control" data-provide="datepicker" name="{{'nntungay'.$countNuocNgoai}}" type="text" value=""></td>  
                            @else
                            <td><input class="form-control" data-provide="datepicker" name="{{'nntungay'.$countNuocNgoai}}" type="text" value="{{date("d-m-Y", strtotime($diNN -> NGAYDI))}}"></td>  
                            @endif
                            @if(date("d-m-Y", strtotime($diNN -> NGAYDI)) == '01-01-1970')
                            <td><input class="form-control" data-provide="datepicker" name="{{'nndenngay'.$countNuocNgoai}}" type="text" value=""></td>
                            @else
                            <td><input class="form-control" data-provide="datepicker" name="{{'nndenngay'.$countNuocNgoai}}" type="text" value="{{date("d-m-Y", strtotime($diNN -> NGAYVE))}}"></td>
                            @endif
                            
                            <td><input class="form-control" name="{{'nnquocgia'.$countNuocNgoai}}" type="text" value="{{$diNN -> QUOCGIA}}">
                            <td><input class="form-control" name="{{'nnlido'.$countNuocNgoai}}" type="text" value="{{$diNN -> LYDODI}}"></td> 
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow3(this)">Xóa</button>
                            </td> 
                        </tr>
                <?php $countNuocNgoai++; ?>
                        @endforeach
                    </tbody>
                </table>

                <p class="bg-info"><lable><b>Người thân</b></lable></p>
                <input id="ktnguoithan" value="<?php
                for ($i = 1; $i <= $danhSachKTNguoiThan; $i++) {
                    echo "+" . $i;
                }
                if ($danhSachKTNguoiThan == 0) {
                    echo "+1";
                }
                ?>" type="hidden" name="ktnguoithan">
                <div class="nguoithan">
                    <table class="table" data-height="299" id="POITable3">
                        <thead>
                        <td class="col-md-1">Quan hệ</td> 
                        <td>Họ và tên</td> 
                        <td  class="col-md-1">Ngày sinh</td> 
                        <td>Cư trú</td> 
                        <td  class="col-md-1">Nghề nghiệp</td> 
                        <td>Đặc điểm chính trị</td> 
                        <th class="col-md-1"><button class="form-control" type='button' onclick="insRow3();">Thêm</button></th>
                        </thead>
                        <tbody id="bodyPOITable3">
<?php $countNguoiThan = 1; ?>
                            @foreach( $danhSachNguoiThan as $nguoiThan)
                            <tr>
                                <td><input class="form-control" name="{{'ntquanhe'.$countNguoiThan}}" type="text" value="{{$nguoiThan->QUANHE}}"></td>
                                <td><input class="form-control" name="{{'nthoten'.$countNguoiThan}}" type="text" value="{{$nguoiThan->TENNT}}"></td>
                                <td><input class="form-control" data-provide="datepicker"name="{{'ntnamsinh'.$countNguoiThan}}" value="{{date("d-m-Y", strtotime($nguoiThan->NGAYSINHNT))}}" type="text"></td>
                                <td><input class="form-control" name="{{'ntcutru'.$countNguoiThan}}" type="text" value="{{$nguoiThan->NOICUTRU}}"></td>
                                <td><input class="form-control" name="{{'ntnghenghiep'.$countNguoiThan}}" type="text" value="{{$nguoiThan->NGHENGHIEP}}"></td>
                                <td><input class="form-control" name="{{'ntddct'.$countNguoiThan}}" type="text" value="{{$nguoiThan->DACDIEMCT}}"></td>
                                <td>
                                    <button class="form-control" type="button" onclick="deleteRow3(this)">Xóa</button>
                                </td>
                            </tr>
<?php $countNguoiThan++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ Form::close() }}    
            </div>

        </div>
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script>
                                        $("#hider").click(function () {
                                            if ($(this).text() === 'Ẩn thông tin cơ bản') {
                                                $(this).text('Hiện thông tin cơ bản');
                                                $("#box1").hide("fast");
                                            } else {
                                                $(this).text('Ẩn thông tin cơ bản');
                                                $("#box1").show("fast");
                                            }
                                        });
                                        $("#shower").click(function () {
                                            if ($(this).text() === 'Ẩn thông tin khác') {
                                                $(this).text('Hiện thông tin khác');
                                                $("#box").hide("fast");
                                            } else {
                                                $(this).text('Ẩn thông tin khác');
                                                $("#box").show("fast");
                                            }
                                        });
        </script>
    </body>
</html>
