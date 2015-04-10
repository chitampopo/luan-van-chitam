<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>In danh sách cấp thẻ Đảng viên mới</title>
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
            <H3><center>In danh sách cấp thẻ Đảng viên mới
                    <Br>Đợt {{$doiNgay}}
                </center></H3>

            <table class="tb">
                <tr>
                    <th style="width: 30px">STT</th>
                    <th>Họ và tên</th>
                    <th style="width: 90px">Ngày sinh</th>
                    <th style="width: 350px">Quê quán</th>
                    <th>Chi bộ</th>
                    <th style="width: 90px">Ngày vào Đảng</th>
                </tr>
                <?php
                $count = 1;
                ?>
                @foreach($listDangVienMoi as $dangVien)
                <tr>
                    <td>{{$count++;}}</td>
                    <td>{{$dangVien->HOTENSUDUNG}}</td>
                    <td>{{date("d-m-Y",strtotime($dangVien->NGAYSINH))}}</td>
                    <Td>
                        @foreach($listTinh as $tinh)
                        @foreach($listHuyen as $huyen)
                        @foreach($listXa as $xa)
                        @if($huyen->MATT == $tinh->MATT && $xa->MAQH == $huyen->MAQH && $xa->MAPX == $dangVien->PHU_MAPX)
                        {{$xa->TENPX.", ".$huyen->TENQH.", ".$tinh->TENTT}}
                        @endif
                        @endforeach
                        @endforeach
                        @endforeach
                    </td>
                    <td>
                        @foreach($listChiBo as $chiBo)
                        @if($chiBo -> MACB == $dangVien->MACB)
                        {{$chiBo->TENCB}}
                        @endif
                        @endforeach
                    </td>
                    <td>
                        {{date("d-m-Y",strtotime($dangVien->NGAYVAODANG))}}
                    </td>
                </tr>
                @endforeach
            </table>

            <table>
                <tr>
                    <td style="width: 200px; text-align: center">
                        Nơi nhận
                    </td>
                    <td style="text-align: center; padding-left:500px">
                        T/M Đảng ủy
                    </td>
                </tr>
                <tr>
                    <td>
                        {{$noiNhan}}
                    </td>
                    <td style="text-align: center; vertical-align: top; padding-left: 500px">
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td style="text-align: center; padding-left: 500px">
                        <br><br><br>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
