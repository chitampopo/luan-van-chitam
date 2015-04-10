<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>In đảng phí</title>
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
                margin-left: 50px;
                margin-right: 50px;
            }
        </style>
    </head>
    <body>
        <div class="col-md-12">
            <?php
            $luongCoBan = LuongCB::orderBy("STTLUONGCB", "DESC")->first();
            $listTongLuong = array();
            $listTongTruyThu = array();
            $tongLuongQuy = 0;
            $tongTruyThuQuy = 0;
            ?>
            <table style="text-align: center">
                <tr>
                    <td style="width: 500px;">
                        @if ($maChiBo != 0)
                        ĐẢNG BỘ KHOA CNTT&TT
                        @else
                        ĐẢNG BỘ TRƯỜNG ĐAI HỌC CẦN THƠ
                        @endif
                    </td>
                    <td style="width: 500px; padding-left: 30px">ĐẢNG CỘNG SẢN VIỆT NAM</td>
                </tr>
                <tr>
                    <td style="width: 500px;">
                        @if ($maChiBo != 0)
                        {{$chiBo->TENCB}}
                        @else
                        ĐẢNG ỦY KHOA CNTT&TT
                        @endif
                    </td>
                    <td style="width: 500px; padding-left: 30px"></td>
                </tr>
                <tr>
                    <td style="width: 500px;">
                    </td>
                    <td style="width: 500px; padding-left: 30px">
                        Cần Thơ, ngày {{date("d")}}, tháng {{date("m")}}, năm {{date("Y")}}
                    </td>
                </tr>
            </table>

            @foreach($listThang as $thang)
            <H3><center>BẢNG TÍNH ĐẢNG PHÍ
                    <Br>Năm {{$thang}}
                </center>
                Lương cơ bản {{$luongCoBan->LUONGCB}}
            </H3>
            <?php
            $count = 1;
            $tongLuong = 0;
            $tongTruyThu = 0;
            ?>
            <table class="tb">
                <tr>
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>HS lương</th>
                    <th>HS PCCV</th>
                    <th>HS PCTN</th>
                    <th>HS Vượt khung</th>
                    <th>Đảng phí</th>
                    <th>Truy thu</th>
                    <th>Đảng phí phải nộp</th>
                </tr>

                @foreach($listDangVien as $dangVien)
                @if($dangVien->THANGNAM == $thang)
                <tr>
                    <td>{{$count++;}}</td>
                    <td>{{$dangVien->HOTENSUDUNG}}</td>
                    <td>{{number_format($dangVien->HSLUONG, 2)}}</td>
                    <td>{{number_format($dangVien->HSCHUCVU ,2 )}}</td>
                    <td>{{number_format($dangVien->HSTHAMNIEN, 2)}}</td>
                    <td>{{number_format($dangVien->HSVUOTKHUNG, 2)}}</td>
                    <td>
                        <?php
                        $luong = $luongCoBan->LUONGCB * ( $dangVien->HSLUONG + $dangVien->HSCHUCVU ) * ( 1 + $dangVien->HSTHAMNIEN + $dangVien->HSVUOTKHUNG);
                        $tongLuong+=$luong;
                        ?>
                        {{number_format($luong,0)." VNĐ"}}
                    </td>
                    <td>
                        <?php
                        $tongTruyThu += $dangVien->TRUYTHUTHANG;
                        ?>
                        {{$dangVien->TRUYTHUTHANG." VNĐ"}}
                    </td>
                    <td>
                        {{number_format(0.01*($luongCoBan->LUONGCB * ( $dangVien->HSLUONG + $dangVien->HSCHUCVU ) * ( 1 + $dangVien->HSTHAMNIEN + $dangVien->HSVUOTKHUNG)) +  $dangVien->TRUYTHUTHANG, 0)." VNĐ"}}
                    </td>
                </tr>
                @endif
                @endforeach
                <tr>
                    <td colspan="6"></td>
                    <td>
                        <?php
                        $tongLuongQuy += $tongLuong;
                        array_push($listTongLuong, $tongLuong);
                        ?>
                        {{number_format($tongLuong, 0)}}  VNĐ
                    </td>
                    <td>
                        <?php
                        $tongTruyThu += $tongTruyThu;
                        array_push($listTongTruyThu, $tongTruyThu);
                        ?>
                        {{number_format($tongTruyThu, 0)}} VNĐ
                    </td>
                    <td>
                        {{number_format(0.01*$tongLuong + $tongTruyThu, 0) }} VNĐ
                    </td>
                </tr>
            </table>
            <br><br><br>
            @endforeach
            <br><br><br>

            <br><br><br>
            <table class="tb">
                <tr>
                    <th colspan="2" rowspan="2">Đảng phí đã thu</th>
                    <th rowspan="2">Chi bộ giữ lại (30%)</th>
                    <th colspan="3">Nộp Đảng bộ (70%)</th>
                </tr>
                <tr>
                    <th>ĐB Khoa (70%)</th>
                    <th>ĐB Trường (30%)</th>
                    <th>Tổng</th>
                </tr>
                <?php
                $countThang = 0;
                ?>
                @foreach($listThang as $thang)
                <tr>
                    <td>{{$thang}}</td>
                    <td>{{number_format(0.01*$listTongLuong[$countThang] + $listTongTruyThu[$countThang], 0) }} VNĐ</td>
                    <td>{{number_format(0.01*0.3*$listTongLuong[$countThang] + $listTongTruyThu[$countThang], 0) }} VNĐ</td>
                    <td>{{number_format(0.01*0.3*0.7*$listTongLuong[$countThang] + $listTongTruyThu[$countThang], 0) }} VNĐ</td>
                    <td>{{number_format(0.01*0.3*0.3*$listTongLuong[$countThang] + $listTongTruyThu[$countThang], 0) }} VNĐ</td>
                    <td>{{number_format(0.7*(0.01*$listTongLuong[$countThang] + $listTongTruyThu[$countThang]), 0) }} VNĐ</td>
                    <?php
                    $countThang++;
                    ?>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>

