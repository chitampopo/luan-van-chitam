<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>In sổ Đảng tịch</title>
        <style>
            .tb{
                border-collapse: collapse;
                border: 1px solid black;
            }
            .tb td, .tb th{
                border: 1px solid black;
            }
            body { 
                font-family: DejaVu Sans, sans-serif;
                font-size: 10;
            }
        </style>
    </head>
    <body>
        <div class="col-md-12">
            <div class="col-md-3">
                <b>
                    @if ($maChiBoChon == "0")
                    {{ "<center><b><h2>DANH SÁCH ĐẢNG VIÊN CỦA ĐẢNG BỘ KHOA CNTT&TT<h2><b></center>" }}
                    {{ "<center><b><h3>Tính đến ngày ".date("d-m-Y")."<h3><b></center><br><br>" }}
                    @else
                    <table>
                        <tr>
                            <td style="width: 500"><h3>ĐẢNG BỘ KHOA CNTT&TT</h3></td>
                            <td><h3>ĐẢNG BỘ KHOA CNTT&TT  ĐẢNG CỘNG SẢN VIỆT NAM</h3></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $dsChiBo = ChiBo::all();
                                $checkCB = false;
                                foreach ($dsChiBo as $chiBo) {
                                    if ($maChiBoChon == $chiBo->MACB) {
                                        echo "<h3>" . $chiBo->TENCB . "</h3>";
                                        $checkCB = true;
                                    }
                                }
                                ?>
                            </td>
                            <td></td>
                        </tr>
                    </table>

                    <div class="col-md-12">
                        <center><h2>DANH SÁCH ĐẢNG VIÊN CỦA
                                <?php
                                setlocale(LC_CTYPE, 'de_DE.UTF8');
                                $dsChiBo = ChiBo::all();
                                $checkCB = false;
                                foreach ($dsChiBo as $chiBo) {
                                    if ($maChiBoChon == $chiBo->MACB) {
                                        echo mb_strtoupper($chiBo->TENCB, 'UTF-8');
                                        $checkCB = true;
                                    }
                                }
                                ?>
                            </h2></center>
                        {{ "<center><b><h3>Tính đến ngày ".date("d-m-Y")."<h3><b></center><br><br>" }}
                    </div>
                    @endif
            </div>
        </div>

        <div class="col-md-12">
            <table class="tb">
                <tr>
                    <th style="width: 30px; text-align: center"><lable>STT</lable></th>
                <th style="width: 200px; text-align: center"><lable>Họ và tên</lable></th>
                <th style="width: 100px; text-align: center">
                <lable>Ngày sinh</lable>
                </th>
                <th style="width: 300px; text-align: center"><lable>Quê quán</lable></th>
                <th style="width: 150px; text-align: center"><lable>Ngày vào Đảng</lable></th>
                <th style="width: 150px; text-align: center"><lable>Ngày chính thức</lable></th>
                <th style="width: 150px; text-align: center"><lable>Số lý lịch</lable></th>
                <th style="width: 150px; text-align: center"><lable>Số thẻ Đảng</lable></th>
                <th style="width: 150px; text-align: center"><lable>Ghi chú</lable></th>
                </tr>
                <?php
                $count = 1;
                $listDanToc = DanToc::all();
                $listTonGiao = TonGiao::all();
                $listTinh = TinhThanh::all();
                $listHuyen = QuanHuyen::all();
                $listXa = PhuongXa::all();
                $listVH = TrinhDoVH::all();
                $listCT = TrinhDoCT::all();
                $listCM = ChuyenMon::all();
                $listNV = NghiepVu::all();
                $listTDNN = CoTrinhDoNN::all();
                $listNN = NgoaiNgu::all();
                $listNNghiep = NgheNghiep::all();
                $listTheDang = TheDang::all();
                ?>
                <tr>
                    <td colspan="9">Chính thức ( {{count($listDangVien) }} )</td>
                </tr>
                @foreach ($listDangVien as $item)
                <tr>
                    <td> {{$count++;}}</td>
                    <td>{{$item->HOTENSUDUNG}}</td>
                    <td>
                        {{ date("d-m-Y", strtotime($item->NGAYSINH))}}
                    </td>
                    <td>
                        @foreach ($listTinh as $tinh)
                        @foreach ($listHuyen as $huyen)
                        @foreach ($listXa as $xa)
                        @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT && $item->PHU_MAPX == $xa->MAPX )
                        {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }}
                        @endif
                        @endforeach
                        @endforeach   
                        @endforeach
                    </td>
                    <td>
                       {{ date("d-m-Y", strtotime($item ->	NGAYVAODANG))}}
                    </td>
                    <td>
                        {{ date("d-m-Y", strtotime($item -> NGAYVAODANGCHINHTHUC)) }}
                    </td>
                    <td>{{ $item-> SOLL }}</td>
                    <td>
                        @foreach ( $listTheDang as $theDang )
                        @if ( $theDang->MADANGVIEN == $item -> MADANGVIEN )
                        {{ $theDang -> SOTHE }}
                        @endif
                        @endforeach
                    </td>
                    <td></td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="9">Dự bị ( {{count($listDangVienDuBi) }} )</td>
                </tr>
                @foreach ($listDangVienDuBi as $item)
                <tr>
                    <td> {{$count++;}}</td>
                    <td>{{$item->HOTENSUDUNG}}</td>
                    <td>
                        {{ date("d-m-Y", strtotime($item->NGAYSINH))}}
                    </td>
                    <td>
                        @foreach ($listTinh as $tinh)
                        @foreach ($listHuyen as $huyen)
                        @foreach ($listXa as $xa)
                        @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT && $item->PHU_MAPX == $xa->MAPX )
                        {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }}
                        @endif
                        @endforeach
                        @endforeach   
                        @endforeach
                    </td>
                    <td>
                       {{ date("d-m-Y", strtotime($item ->	NGAYVAODANG))}}
                    </td>
                    <td>
                        {{ date("d-m-Y", strtotime($item -> NGAYVAODANGCHINHTHUC)) }}
                    </td>
                    <td>{{ $item-> SOLL }}</td>
                    <td>
                        @foreach ( $listTheDang as $theDang )
                        @if ( $theDang->MADANGVIEN == $item -> MADANGVIEN )
                        {{ $theDang -> SOTHE }}
                        @endif
                        @endforeach
                    </td>
                    <td></td>
                </tr>
                @endforeach
            </table>
            Tổng số: {{count($listDangVien) + count($listDangVienDuBi)}} ĐẢNG VIÊN– Chính thức: {{count($listDangVien)}} – Dự bị: {{count($listDangVienDuBi)}}
        </div>
    </body>
</html>
