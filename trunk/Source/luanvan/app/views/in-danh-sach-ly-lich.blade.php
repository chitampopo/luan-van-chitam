<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>In sổ Đảng tịch</title>
        <style>
            .tb{
                border-collapse: collapse;
                border: 1px solid black;
            }
            .tb td, .tb th{
                border: 1px solid black;
            }
            .tenchibo{
                font-size: 14;
                color: blue;
            }
            body { 
                font-family: DejaVu Sans, sans-serif;
                font-size: 10;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="col-md-12">
            <center><h2>DANH SÁCH CHI ỦY CÁC CHI BỘ TRỰC THUỘC  ĐẢNG BỘ KHOA CNTT&TT</h2></center>
            <center><h3>Nhiệm kỳ {{$nhiemKy->TUNAM}} - {{$nhiemKy->DENNAM}}</h3></center>

            <table class="tb">
                <tr>
                    <th style="width: 30px; text-align: center"><lable>STT</lable></th>
                <th style="width: 150px; text-align: center"><lable>Họ và tên</lable></th>
                <th style="width: 100px; text-align: center">
                <lable>Ngày sinh</lable>
                </th>
                <th style="width: 200px; text-align: center"><lable>Quê quán</lable></th>
                <th style="width: 100px; text-align: center"><lable>Ngày vào Đảng</lable></th>
                <th style="width: 100px; text-align: center"><lable>Ngày chính thức</lable></th>
                <th style="width: 150px; text-align: center"><lable>Số lý lịch</lable></th>
                <th style="width: 150px; text-align: center"><lable>Số thẻ Đảng</lable></th>
                <th style="width: 150px; text-align: center"><lable>Chức danh/học vị</lable></th>
                <th style="width: 150px; text-align: center"><lable>Chức vụ trong chi ủy</lable></th>
                <th style="width: 150px; text-align: center"><lable>Ghi chú</lable></th>
                </tr>
                <?php
                $count = 1;
                ?>
                @foreach ($listChiBo as $chiBo)
                    <?php
                    $listDangVien = DB::select('select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0 and lylich.MACB ='.$chiBo->MACB);
                    ?>
                    <tr>
                        <td colspan="11" class='tenchibo'>
                            <?php
                            setlocale(LC_CTYPE, 'de_DE.UTF8');
                            echo mb_strtoupper($chiBo->TENCB,'UTF-8');
                            ?>
                        </td>
                    </tr>
                    @foreach ($listDangVien as $dangVien)
                        @if ($dangVien->MACB == $chiBo->MACB)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$dangVien->HOTENSUDUNG}}</td>
                            <td>{{date("d-m-Y", strtotime($dangVien->NGAYSINH))}}</td>
                            <td>
                                @foreach ($listTinh as $tinh)
                                @foreach ($listHuyen as $huyen)
                                @foreach ($listXa as $xa)
                                @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT && $dangVien->PHU_MAPX == $xa->MAPX )
                                {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }}
                                @endif
                                @endforeach
                                @endforeach   
                                @endforeach
                            </td>
                            <td>
                                {{ date("d-m-Y", strtotime($dangVien ->	NGAYVAODANG))}}
                            </td>
                            <td>
                                {{ date("d-m-Y", strtotime($dangVien -> NGAYVAODANGCHINHTHUC)) }}
                            </td>
                            <td>{{ $dangVien-> SOLL }}</td>
                            <td>
                                @foreach ( $listTheDang as $theDang )
                                @if ( $theDang->MADANGVIEN == $dangVien -> MADANGVIEN )
                                {{ $theDang -> SOTHE }}
                                @endif
                                @endforeach
                            </td>
                            <td>
                                <?php
                                $listChuyenMon = ChuyenMon::all();
                                $listHocVi = HocVi::all();
                                ?>
                                @foreach($listChuyenMon as $chuyenMon)
                                @if($chuyenMon->MACM == $dangVien->MACM)
                                {{$chuyenMon->TENCM}}
                                @endif
                                @endforeach
                                @foreach($listHocVi as $hocVi)
                                @if($hocVi->MAHOCVI == $dangVien->MAHOCVI)
                                {{"/ ".$hocVi->TENHOCVI}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                                <?php
                                $giuCV = DB::select("select * from giucv, chucvu where chucvu.MACV = giucv.MACV and giucv.MANHIEMKY = ".$nhiemKy->MANHIEMKY." and giucv.MADANGVIEN = ".$dangVien->MADANGVIEN)
                                ?>
                                @foreach($giuCV as $cv)
                                {{$cv->TENCV}}
                                @endforeach
                            </td>
                            <td></td>
                        </tr>
                        @endif
                    @endforeach
                @endforeach
            </table>
            <div style="margin-left: 700">
                <h3>Cần Thơ, ngày {{date("d")}} tháng {{date("m")}} năm {{date("Y")}}</h3>
                <h3>TM Đảng ủy khoa CNTT&TT</h3>
                <h3>{{$chucVuNguoiLap}}</h3>
                <br><br><br><br>
                <h3>{{$nguoiLap}}</h3>
            </div>
        </div>
    </body>
</html>
