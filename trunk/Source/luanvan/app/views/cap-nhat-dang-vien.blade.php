<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật thông tin Đảng viên</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery.chained.js')}}" type="text/javascript"></script>
        <script>
            
            function deleteRow5(row)
            {
                var i=row.parentNode.parentNode.rowIndex;
                document.getElementById('POITable5').deleteRow(i);
                var xxx = document.getElementById("ktkhenthuong");
                var str = xxx.value;
                var newStr = str.substr(0,2*i-2);
                newStr += str.substr(2*i,str.length);
                //alert(newStr);
                xxx.value = newStr;
            }

            function insRow5()
            {
                var x3 = document.getElementById('bodyPOITable5');
                var x2=document.getElementById('POITable5');
                var new_row2 = x2.rows[1].cloneNode(true);
                var len2 = x2.rows.length ;
                var dsKhenThuong = document.getElementById("dsKhenThuong");
                new_row2.cells[0].innerHTML = "<select class='form-control' name='khenthuong" + len2 + "'>"+ dsKhenThuong.innerHTML +"</select>";
                new_row2.cells[1].innerHTML = "<input class='form-control' data-provide='datepicker' name='ngaykt" + len2 + "' type='text'>";
                new_row2.cells[2].innerHTML = "<input class='form-control' name='capkt" + len2 + "' type='text'>"; 
                new_row2.cells[3].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow5(this)'>Xóa</button>";
                x3.appendChild(new_row2);
                var xxx = document.getElementById("ktkhenthuong");
                xxx.value += "+";
                xxx.value += len2;
            }
            
            function deleteRow(row)
            {
                var i=row.parentNode.parentNode.rowIndex;
                document.getElementById('POITable').deleteRow(i);
                var xxx = document.getElementById("ktcongtac");
                var str = xxx.value;
                var newStr = str.substr(0,2*i-2);
                newStr += str.substr(2*i,str.length);
                //alert(newStr);
                xxx.value = newStr;
            }

            function insRow()
            {
                var x=document.getElementById('POITable');
                var x3 = document.getElementById('bodyPOITable');
                var new_row = x.rows[1].cloneNode(true);
                var len = x.rows.length;
                new_row.cells[0].innerHTML = "<input class='form-control' data-provide='datepicker' name='cttungay" + len + "' type='text'>";
                new_row.cells[1].innerHTML = "<input class='form-control' data-provide='datepicker' name='ctdenngay" + len + "' type='text'>";    
                new_row.cells[2].innerHTML = "<input class='form-control' name='ctchucvu" + len + "' type='text'>";
                new_row.cells[3].innerHTML = "<input class='form-control' name='ctdonvi" + len + "' type='text'>";
                new_row.cells[4].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow(this)'>Xóa</button>";
                x3.appendChild(new_row);
                var xxx = document.getElementById("ktcongtac");
                xxx.value += "+";
                xxx.value += len;
            }
            
            function deleteRow1(row)
            {
                var i=row.parentNode.parentNode.rowIndex;
                document.getElementById('POITable1').deleteRow(i);
                var xxx = document.getElementById("ktdaotao");
                var str = xxx.value;
                var newStr = str.substr(0,2*i-2);
                newStr += str.substr(2*i,str.length);
                xxx.value = newStr;
            }

            function insRow1()
            {
                var x1=document.getElementById('POITable1');
                var x3 = document.getElementById('bodyPOITable1');
                var new_row1 = x1.rows[1].cloneNode(true);
                var len1 = x1.rows.length;
                new_row1.cells[0].innerHTML = "<input class='form-control' name='dttruong" + len1 + "' type='text'>";
                new_row1.cells[1].innerHTML = "<input class='form-control' name='dtnganh" + len1 + "' type='text'>";    
                new_row1.cells[2].innerHTML = "<input class='form-control' name='dttu" + len1 + "' type='text'>";
                new_row1.cells[3].innerHTML = "<input class='form-control' name='dtden" + len1 + "' type='text'>";
                new_row1.cells[4].innerHTML = "<input class='form-control' name='dthinhthuc" + len1 + "' type='text'>";
                new_row1.cells[5].innerHTML = "<input class='form-control' name='dtvanbang" + len1 + "' type='text'>";
                new_row1.cells[6].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow1(this)'>Xóa</button>";
                x3.appendChild(new_row1);
                var xxx = document.getElementById("ktdaotao");
                xxx.value += "+";
                xxx.value += len1;
            }
            
            function deleteRow2(row)
            {
                var i=row.parentNode.parentNode.rowIndex;
                document.getElementById('POITable2').deleteRow(i);
                var xxx = document.getElementById("ktnuocngoai");
                var str = xxx.value;
                var newStr = str.substr(0,2*i-2);
                newStr += str.substr(2*i,str.length);
                xxx.value = newStr;
            }

            function insRow2()
            {
                var x2=document.getElementById('POITable2');
                var new_row2 = x2.rows[1].cloneNode(true);
                var len2 = x2.rows.length;
                var x3 = document.getElementById('bodyPOITable2');
                new_row2.cells[0].innerHTML = "<input class='form-control' data-provide='datepicker' name='nntungay" + len2 + "' type='text'>";
                new_row2.cells[1].innerHTML = "<input class='form-control' data-provide='datepicker' name='nndenngay" + len2 + "' type='text'>";    
                new_row2.cells[2].innerHTML = "<input class='form-control' name='nnquocgia" + len2 + "' type='text'>";
                new_row2.cells[3].innerHTML = "<input class='form-control' name='nnlido" + len2 + "' type='text'>";
                new_row2.cells[4].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow2(this)'>Xóa</button>";
                x3.appendChild(new_row2);
                var xxx = document.getElementById("ktnuocngoai");
                xxx.value += "+";
                xxx.value += len2;
            }
            function deleteRow3(row)
            {
                var i=row.parentNode.parentNode.rowIndex;
                document.getElementById('POITable3').deleteRow(i);
                var xxx = document.getElementById("ktnguoithan");
                var str = xxx.value;
                var newStr = str.substr(0,2*i-2);
                newStr += str.substr(2*i,str.length);
                xxx.value = newStr;
            }

            function insRow3()
            {
                var x2=document.getElementById('POITable3');
                var new_row2 = x2.rows[1].cloneNode(true);
                var len2 = x2.rows.length;
                var x3 = document.getElementById('bodyPOITable3');
                new_row2.cells[0].innerHTML = "<input class='form-control' name='ntquanhe" + len2 + "' type='text'>";
                new_row2.cells[1].innerHTML = "<input class='form-control' name='nthoten" + len2 + "' type='text'>";    
                new_row2.cells[2].innerHTML = "<input class='form-control' name='ntnamsinh" + len2 + "' type='text'>";
                new_row2.cells[3].innerHTML = "<input class='form-control' name='ntcutru" + len2 + "' type='text'>";
                new_row2.cells[4].innerHTML = "<input class='form-control' name='ntnghenghiep" + len2 + "' type='text'>";
                new_row2.cells[5].innerHTML = "<input class='form-control' name='ntddct" + len2 + "' type='text'>";
                new_row2.cells[6].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow3(this)'>Xóa</button>";
                x3.appendChild(new_row2);
                var xxx = document.getElementById("ktnguoithan");
                xxx.value += "+";
                xxx.value += len2;
            }
            function deleteRow4(row)
            {
                var i=row.parentNode.parentNode.rowIndex;
                document.getElementById('POITable4').deleteRow(i);
                var xxx = document.getElementById("ktngoaingu");
                var str = xxx.value;
                var newStr = str.substr(0,2*i-2);
                newStr += str.substr(2*i,str.length);
                xxx.value = newStr;
            }

            function insRow4()
            {
                var x2=document.getElementById('POITable4');
                var new_row2 = x2.rows[1].cloneNode(true);
                var len2 = x2.rows.length;
                var x3 = document.getElementById('bodyPOITable4');
                var dsNgoaiNgu = document.getElementById("dsNgoaiNgu");
                new_row2.cells[0].innerHTML = "<select class='form-control' name='ngoaingu" + len2 + "'>"+ dsNgoaiNgu.innerHTML +"</select>";
                new_row2.cells[1].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow4(this)'>Xóa</button>";
                x3.appendChild(new_row2);
                var xxx = document.getElementById("ktngoaingu");
                xxx.value += "+";
                xxx.value += len2;
            }
            
            function deleteRow6(row)
            {
                var i=row.parentNode.parentNode.rowIndex;
                document.getElementById('POITable6').deleteRow(i);
                var xxx = document.getElementById("kthuyhieu");
                var str = xxx.value;
                var newStr = str.substr(0,2*i-2);
                newStr += str.substr(2*i,str.length);
                xxx.value = newStr;
            }

            function insRow6()
            {
                var x2=document.getElementById('POITable6');
                var new_row2 = x2.rows[1].cloneNode(true);
                var len2 = x2.rows.length;
                var x3 = document.getElementById('bodyPOITable6');
                new_row2.cells[0].innerHTML = "<input class='form-control' name='huyhieu" + len2 + "' type='text'>"; 
                new_row2.cells[1].innerHTML = "<input class='form-control' data-provide='datepicker' name='ngaykt" + len2 + "' type='text'>";
                new_row2.cells[2].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow6(this)'>Xóa</button>";
                x3.appendChild(new_row2);
                var xxx = document.getElementById("kthuyhieu");
                xxx.value += "+";
                xxx.value += len2;
            }
            
            function deleteRow7(row)
            {
                var i=row.parentNode.parentNode.rowIndex;
                document.getElementById('POITable7').deleteRow(i);
                var xxx = document.getElementById("ktkyluat");
                var str = xxx.value;
                var newStr = str.substr(0,2*i-2);
                newStr += str.substr(2*i,str.length);
                xxx.value = newStr;
            }

            function insRow7()
            {
                var x2=document.getElementById('POITable7');
                var new_row2 = x2.rows[1].cloneNode(true);
                var len2 = x2.rows.length;
                var dsKyLuat = document.getElementById("dsKyLuat");
                var x3 = document.getElementById('bodyPOITable7');
                new_row2.cells[0].innerHTML = "<select class='form-control' name='kyluat" + len2 + "'>"+ dsKyLuat.innerHTML +"</select>";
                new_row2.cells[1].innerHTML = "<input class='form-control' data-provide='datepicker' name='ngaykl" + len2 + "' type='text'>";
                new_row2.cells[2].innerHTML = "<input class='form-control' name='lydokl" + len2 + "' type='text'>"; 
                new_row2.cells[3].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow7(this)'>Xóa</button>";
                x3.appendChild(new_row2);
                var xxx = document.getElementById("ktkyluat");
                xxx.value += "+";
                xxx.value += len2;
            }
        </script>
    </head>
    <body>
        <div class="col-md-12">
            @include('header')
        </div>
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="col-md-9 container">
            
            {{ Form::open(array('url' => 'dang-vien-action', 'files' => true)) }}    
            <div class="form-group col-md-6 container">
                <img src="{{asset('public/images/avatar1.jpg')}}" alt="Avatar" class="img-circle" width="160px" height="160px"><br><br>
                {{ Form::label('', 'Hình ảnh'); }}<br>
                <input name="hinhanh" type="file" class="form-control">
                
                {{ Form::label('', 'Giới tính'); }}<br>
                <div class="form-control">
                    <label>
                        <input type="radio" name="gioitinh" value="1"> Nam
                    </label>
                    <label>
                        <input type="radio" name="gioitinh" value="0"> Nữ<br>
                    </label>
                </div>

                {{ Form::label('', 'Nơi sinh'); }}<br>
                <select class="form-control" name="noisinh">
                    @foreach ($listTinh as $tinh)
                    @foreach ($listHuyen as $huyen)
                    @foreach ($listXa as $xa)
                    @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT )
                    <option value="{{$xa->MAPX}}"> {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }} </option>
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
                    <option value="{{$xa->MAPX}}"> {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }} </option>
                    @endif
                    @endforeach
                    @endforeach   
                    @endforeach
                </select>

                {{ Form::label('', 'Dân tộc'); }}<br>
                <select class="form-control" name="dantoc">
                    @foreach( $listDanToc as $danToc)
                        <option value="{{$danToc->MADT}}">{{$danToc->TENDT}}</option>
                    @endforeach
                </select>

                {{ Form::label('', 'Nghề nghiệp khi vào Đảng') }}<br>
                <select class="form-control" name="nghenghiepkhivaodang">
                    @foreach( $listNgheNghiep as $ngheNghiep)
                        <option value="{{$ngheNghiep->MANN}}">{{$ngheNghiep->TENNN}}</option>
                    @endforeach
                </select>

                {{ Form::label('', 'Ngày vào Đảng') }}<br>
                {{ Form::text('ngayvaodang', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}

                {{ Form::label('', 'Người giới thiệu 1'); }}<br>
                {{ Form::text('nguoigioithieu1', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Người giới thiệu 2'); }}<br>
                {{ Form::text('nguoigioithieu2', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Ngày chính thức'); }}<br>
                {{ Form::text('ngaychinhthuc', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}

                {{ Form::label('', 'Ngày vào Đoàn TNCSHCM'); }}<br>
                {{ Form::text('ngayvaodoan', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}

                {{ Form::label('', 'Trình độ văn hóa'); }}<br>
                <select class="form-control" name="trinhdovh">
                    @foreach( $listTrinhDoVH as $trinhDoVH)
                        <option value="{{$trinhDoVH->MATRINHDOVH}}">{{$trinhDoVH->TENTRINHDOVH}}</option>
                    @endforeach
                </select>

                {{ Form::label('', 'Chuyên môn'); }}<br>
                <select class="form-control" name="chuyenmon">
                    <option value="0">Không</option>
                    @foreach( $listChuyenMon as $chuyenMon)
                        <option value="{{$chuyenMon->MACM}}">{{$chuyenMon->TENCM}}</option>
                    @endforeach
                </select>

                {{ Form::label('', 'Học vị'); }}<br>
                <select class="form-control" name="hocvi">
                    <option value="0">Không</option>
                    @foreach( $listHocVi as $hocVi)
                        <option value="{{$hocVi->MAHOCVI}}">{{$hocVi->TENHOCVI}}</option>
                    @endforeach
                </select>

                {{ Form::label('', 'Tình trạng sức khỏe'); }}<br>
                {{ Form::text('suckhoe', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Gia đình liệt sĩ'); }}<br>
                <div class="form-control">
                    <label>
                        <input type="checkbox" name="lietsi" >
                    </label>
                </div>

                {{ Form::label('', 'Số thẻ Đảng'); }}<br>
                {{ Form::text('thedang', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Hệ số lương'); }}<br>
                {{ Form::text('hsluong', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Phụ cấp thâm niên'); }}<br>
                {{ Form::text('thamnien', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Ngày nhập ngũ'); }}<br>
                {{ Form::text('nhapngu', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}  
                
                {{ Form::label('', 'Ngày từ trần'); }}<br>
                {{ Form::text('ngaytutran', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}  
                
                {{ Form::label('', 'Chứng minh nhân dân'); }}<br>
                {{ Form::text('cmnd', null, array('class' => 'form-control')); }}
            </div>

            <div class="form-group col-md-6 container">

                <div>
                    <span></span>
                </div>
                {{ Form::label('', 'Họ tên khai sinh'); }}<br>
                {{ Form::text('hotenkhaisinh', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Họ tên đang sử dụng'); }}<br>
                {{ Form::text('hotensudung', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Bí danh'); }}<br>
                {{ Form::text('bidanh', null, array('class' => 'form-control')); }}
                
                {{ Form::label('', 'Chi bộ'); }}<br>
                <select class="form-control" name="chibo">
                    @foreach( $listChiBo as $chiBo)
                        <option value="{{$chiBo->MACB}}">{{$chiBo->TENCB}}</option>
                    @endforeach
                </select>
                
                {{ Form::label('', 'Ngày sinh'); }}<br>
                {{ Form::text('ngaysinh', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}

                {{ Form::label('', 'Quê quán'); }}<br>
                <select class="form-control" name="quequan">
                    @foreach ($listTinh as $tinh)
                    @foreach ($listHuyen as $huyen)
                    @foreach ($listXa as $xa)
                    @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT )
                    <option value="{{$xa->MAPX}}"> {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }} </option>
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
                    <option value="{{$xa->MAPX}}"> {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }} </option>
                    @endif
                    @endforeach
                    @endforeach   
                    @endforeach
                </select>

                {{ Form::label('', 'Tôn giáo'); }}<br>
                <select class="form-control" name="tongiao">
                    <option value="0">Không</option>
                    @foreach( $listTonGiao as $tonGiao)
                        <option value="{{$tonGiao->MATONGIAO}}">{{$tonGiao->TENTONGIAO}}</option>
                    @endforeach
                </select>

                {{ Form::label('', 'Nghề nghiệp đang làm'); }}<br>
                <select class="form-control" name="nghenghiepdanglam">
                    @foreach( $listNgheNghiep as $ngheNghiep)
                        <option value="{{$ngheNghiep->MANN}}">{{$ngheNghiep->TENNN}}</option>
                    @endforeach
                </select>

                {{ Form::label('', 'Tại chi bộ') }}<br>
                {{ Form::text('noivaodang', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Chức vụ người giới thiệu 1'); }}<br>
                {{ Form::text('cvnguoigioithieu1', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Chức vụ người giới thiệu 2'); }}<br>
                {{ Form::text('cvnguoigioithieu2', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Tại chi bộ'); }}<br>
                {{ Form::text('taichibochinhthuc', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Tại'); }}<br>
                {{ Form::text('noivaodoan', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Trình độ chính trị'); }}<br>
                <select class="form-control" name="trinhdoct">
                    @foreach( $listTrinhDoCT as $trinhDoCT)
                        <option value="{{$trinhDoCT->MATRINHDOCT}}">{{$trinhDoCT->TENTRINHDOCT}}</option>
                    @endforeach
                </select>
                
                {{ Form::label('', 'Nghiệp vụ'); }}<br>
                <select class="form-control" name="nghiepvu">
                    <option value="0">Không</option>
                    @foreach( $listNghiepVu as $nghiepVu)
                        <option value="{{$nghiepVu->MANV}}">{{$nghiepVu->TENNV}}</option>
                    @endforeach
                </select>

                {{ Form::label('', 'Học hàm'); }}<br>
                <select class="form-control" name="hocham">
                    <option value="0">Không</option>
                    @foreach( $listHocHam as $hocHam)
                        <option value="{{$hocHam->MAHOCHAM}}">{{$hocHam->TENHOCHAM}}</option>
                    @endforeach
                </select>
                
                {{ Form::label('', 'Thương binh'); }}<br>
                <select class="form-control" name="thuongbinh">
                    <option value="0">Không</option>
                    <option value="1">1/4</option>
                    <option value="2">2/4</option>
                    <option value="3">3/4</option>
                    <option value="4">4/4</option>
                </select>

                {{ Form::label('', 'Ngày miễn công tác và SHĐ'); }}<br>
                {{ Form::text('mienct', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}

                {{ Form::label('', 'Số lý lịch Đảng'); }}<br>
                {{ Form::text('lylich', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Phụ cấp chức vụ'); }}<br>
                {{ Form::text('pcchucvu', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Phụ cấp vượt khung'); }}<br>
                {{ Form::text('vuotkhung', null, array('class' => 'form-control')); }}

                {{ Form::label('', 'Ngày xuất ngũ'); }}<br>
                {{ Form::text('xuatngu', '', array('class' => 'form-control','data-provide' => 'datepicker')) }} 
                
                {{ Form::label('', 'Lý do từ trần'); }}<br>
                {{ Form::text('lydotutran', null, array('class' => 'form-control')); }}
                
                {{ Form::label('', 'Số điện thoại'); }}<br>
                {{ Form::text('dienthoai', null, array('class' => 'form-control')); }}
                
                {{ Form::label('', 'Email'); }}<br>
                {{ Form::email('email', null, array('class' => 'form-control')); }}
            </div>
            <div class="col-md-12">
                <p class="bg-info"><label>Khen thưởng</label></p>
                <input id="ktkhenthuong" value="+1" type="hidden" name="ktkhenthuong">
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
                        <tr>
                            <td>
                                <select class="form-control" name="khenthuong1" id="dsKhenThuong">
                                    <option value="0">Không</option>
                                    @foreach( $listHTKT as $khenThuong)
                                        <option value="{{$khenThuong->MAHTKT}}">{{$khenThuong->TENHTKT}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>{{ Form::text('ngaykt1', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}</td> 
                            <td>{{ Form::text('capkt1', null, array('class' => 'form-control')); }}</td> 
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow5(this)">Xóa</button>
                            </td> 
                        </tr>
                    </tbody>    
                </table>
                
                <p class="bg-info"><label>Kỷ luật</label></p>
                <input id="ktkyluat" value="+1" type="hidden" name="ktkyluat">
                <table class="table" data-height="299" id="POITable7">
                    <thead>
                        <tr>
                            <th>Hình thức kỷ luật</th> 
                            <th>Ngày kỷ luật</th> 
                            <th>Lý do</th> 
                            <th class="col-md-1"><button class="form-control" type='button' onclick="insRow7();">Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody id="bodyPOITable7">
                        <tr>
                            <td>
                                <select class="form-control" name="kyluat1" id="dsKyLuat">
                                    <option value="0">Không</option>
                                    @foreach( $listHTKL as $kyLuat)
                                        <option value="{{$kyLuat->MAHTKL}}">{{$kyLuat->TENHTKL}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>{{ Form::text('ngaykl1', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}</td> 
                            <td>{{ Form::text('lydokl1', null, array('class' => 'form-control')); }}</td> 
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow7(this)">Xóa</button>
                            </td> 
                        </tr>
                    </tbody>
                </table>
                
                <p class="bg-info"><label>Huy hiệu Đảng</label></p>
                <input id="kthuyhieu" value="+1" type="hidden" name="kthuyhieu">
                <table class="table" data-height="299" id="POITable6">
                    <thead>
                        <tr>
                            <th>Tên huy hiệu Đảng</th> 
                            <th>Ngày lập quyết định</th> 
                            <th class="col-md-1"><button class="form-control" type='button' onclick="insRow6();">Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody id="bodyPOITable6">    
                        <tr>
                            <td>{{ Form::text('huyhieu1', null, array('class' => 'form-control')); }}</td> 
                            <td>{{ Form::text('ngayhh1', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}</td> 
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow6(this)">Xóa</button>
                            </td> 
                        </tr>
                    </tbody>
                </table>
                
                <p class="bg-info"><label>Ngoại ngữ</label></p>
                <input id="ktngoaingu" value="+1" type="hidden" name="ktngoaingu">
                <table class="table" data-height="299" id="POITable4">
                    <thead>
                        <tr>
                            <th>Trình độ ngoại ngữ</th> 
                            <th class="col-md-1"><button class="form-control" type='button' onclick="insRow4();">Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody id="bodyPOITable4">
                        <tr>
                            <td>
                                <select class="form-control" name="trinhdongoaingu1" id="dsNgoaiNgu">
                                    <option value="0">Không</option>
                                    @foreach( $listNgoaiNgu as $ngoaiNgu)
                                        <option value="{{$ngoaiNgu->MANGOAINGU}}">{{$ngoaiNgu->TENNGOAINGU}}</option>
                                    @endforeach
                                </select>
                            </td> 
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow4(this)">Xóa</button>
                            </td> 
                        </tr>
                    </tbody>
                </table>
                
                <p class="bg-info"><label>Quá trình công tác</label></p>
                <input id="ktcongtac" value="+1" type="hidden" name="ktcongtac">
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
                        <tr>
                            <td>{{ Form::text('cttungay1', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}</td> 
                            <td>{{ Form::text('ctdenngay1', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}</td> 
                            <td>{{ Form::text('ctchucvu1', null, array('class' => 'form-control')); }}</td> 
                            <td>{{ Form::text('ctdonvi1', null, array('class' => 'form-control')); }}</td> 
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow(this)">Xóa</button>
                            </td> 
                        </tr>
                    </tbody>
                </table>
                
                <p class="bg-info"><label>Quá trình đào tạo</label></p>
                <input id="ktdaotao" value="+1" type="hidden" name="ktdaotao">
                <table class="table" data-height="299" id="POITable1">
                    <thead>
                        <th>Trường</th> 
                        <th>Ngành học</th> 
                        <th>Từ ngày</th> 
                        <th>Đến ngày</th> 
                        <th>Hình thức học</th> 
                        <th>Văn bằng, Chứng chỉ</th> 
                        <th class="col-md-1"><button class="form-control" type='button' onclick="insRow1();">Thêm</button></th>
                    </thead>
                    <tbody id="bodyPOITable1">
                        <tr>
                            <td>{{ Form::text('dttruong1', null, array('class' => 'form-control')); }}</td> 
                            <td>{{ Form::text('dtnganh1', null, array('class' => 'form-control')); }}</td> 
                            <td>{{ Form::text('dttu1', null, array('class' => 'form-control')); }}</td> 
                            <td>{{ Form::text('dtden1', null, array('class' => 'form-control')); }}</td> 
                            <td>{{ Form::text('dthinhthuc1', null, array('class' => 'form-control')); }}</td> 
                            <td>{{ Form::text('dtvanbang1', null, array('class' => 'form-control')); }}</td> 
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow1(this)">Xóa</button>
                            </td> 
                        </tr>
                    </tbody>
                </table>
                
                <p class="bg-info"><label>Đi nước ngoài</label></p>
                <input id="ktnuocngoai" value="+1" type="hidden" name="ktnuocngoai">
                <table class="table" data-height="299" id="POITable2">
                    <thead>
                        <th>Ngày đi</th> 
                        <th>Ngày về</th> 
                        <th>Quốc gia</th> 
                        <th>Lý do đi</th> 
                        <th class="col-md-1"><button class="form-control" type='button' onclick="insRow2();">Thêm</button></th>
                    </thead>
                    <tbody id="bodyPOITable2">
                        <tr>
                            <td>{{ Form::text('nntungay1', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}</td>  
                            <td>{{ Form::text('nndenngay1', '', array('class' => 'form-control','data-provide' => 'datepicker')) }}</td>
                            <td>{{ Form::text('nnquocgia1', null, array('class' => 'form-control')); }}</td> 
                            <td>{{ Form::text('nnlido1', null, array('class' => 'form-control')); }}</td> 
                            <td>
                                <button class="form-control" type="button" onclick="deleteRow3(this)">Xóa</button>
                            </td> 
                        </tr>
                    </tbody>
                </table>
                
                <p class="bg-info"><lable><b>Người thân</b></lable></p>
                <input id="ktnguoithan" value="+1" type="hidden" name="ktnguoithan">
                <div class="nguoithan">
                    <table class="table" data-height="299" id="POITable3">
                        <thead>
                            <td class="col-md-1">Quan hệ</td> 
                            <td>Họ và tên</td> 
                            <td  class="col-md-1">Năm sinh</td> 
                            <td>Cư trú</td> 
                            <td  class="col-md-1">Nghề nghiệp</td> 
                            <td>Đặc điểm chính trị</td> 
                            <th class="col-md-1"><button class="form-control" type='button' onclick="insRow3();">Thêm</button></th>
                        </thead>
                        <tbody id="bodyPOITable3">
                            <tr>
                                <td>{{ Form::text('ntquanhe1', null, array('class' => 'form-control')); }}</td>
                                <td>{{ Form::text('nthoten1', null, array('class' => 'form-control')); }}</td>
                                <td>{{ Form::text('ntnamsinh1', null, array('class' => 'form-control')); }}</td>
                                <td>{{ Form::text('ntcutru1', null, array('class' => 'form-control')); }}</td>
                                <td>{{ Form::text('ntnghenghiep1', null, array('class' => 'form-control')); }}</td>
                                <td>{{ Form::text('ntddct1', null, array('class' => 'form-control')); }}</td>
                                <td>
                                    <button class="form-control" type="button" onclick="deleteRow3(this)">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
            {{ Form::submit('Lưu lại', array('class' => 'btn btn-default')); }}
            {{ Form::close() }}
        </div>
    </body>
</html>