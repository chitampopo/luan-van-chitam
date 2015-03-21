<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>In sổ Danh sách cảm tình Đảng</title>
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
                font-size: 10px;
            }
        </style>
    </head>
    <body>
        <div class="col-md-12">
            <div class="col-md-3">
                    <table>
                        <tr>
                            <td style="width: 800px;"><h3>ĐẢNG BỘ TRƯỜNG ĐẠI HỌC CẦN THƠ</h3></td>
                            <td><h3>ĐẢNG CỘNG SẢN VIỆT NAM</h3></td>
                        </tr>
                        <tr>
                            <td><h3>ĐẢNG ỦY KHOA CNTT&TT</h3></td>
                        </tr>
                        
                        <tr>
                            @foreach($listChiBo as $chiBo )
                            @if($maChiBoChon == $chiBo->MACB )
                            <td><h3> {{ $chiBo->TENCB }}</h3></td>
                            @endif
                            @endforeach
                        </tr>
                    </table>
                @if ($maChiBoChon != 0 )
                <center><h3>DANH SÁCH TRÍCH NGANG CẢM TÌNH ĐẢNG<h3></center>
                <center><h3>DỰ LỚP HỌC BỒI DƯỠNG KẾT NẠP</h3></center>
                <center><h3>KHÓA NGÀY {{$khoaNgay}}</h3></center>
                @else
                <center><h3>DANH SÁCH TRÍCH NGANG CẢM TÌNH ĐẢNG<h3></center>
                <center><h3>DỰ LỚP HỌC BỒI DƯỠNG KẾT NẠP (DÀNH CHO CÁN BỘ)</h3></center>
                <center><h3>KHÓA NGÀY {{$khoaNgay}}</h3></center>
                @endif
            </div>
        </div>
        <div class="col-md-12">
            <table class="tb">
                <tr>
                    <th style="width: 30px; text-align: center" rowspan="2"><lable>STT</lable></th>
                <th style="width: 120px; text-align: center" rowspan="2"><lable>Họ và tên</lable></th>
                <th style="width: 120px; text-align: center;" colspan="2"><lable>Ngày, tháng, năm sinh</lable></th>
                <th style="width: 50px; text-align: center" rowspan="2"><lable> Dân tộc </lable></th>
                <th style="width: 70px; text-align: center" rowspan="2"><lable> Tôn giáo</lable></th>
                <th style="width: 200px; text-align: center" rowspan="2"><lable> Quê quán </lable></th>
                <th style="width: 200px; text-align: center" rowspan="2"><lable> Chổ ở hiện nay</lable></th>
                <th style="width: 100px; text-align: center" rowspan="2"><lable> Trình độ chuyên môn</lable></th>
                <th style="width: 160px; text-align: center" colspan="2"><lable> Chức vụ </lable></th>
                <th style="width: 100px; text-align: center" rowspan="2"><lable> Ngày chi bộ công nhận là cảm tình Đảng</lable></th>
                </tr>
                <tr>
                    <th style="width: 60px; text-align: center"><lable>Nam</lable></th>
                <th style="width: 60px; text-align: center"><lable>Nữ</lable></th>
                <th style="width: 80px; text-align: center"><lable>Chính quyền</lable></th>
                <th style="width: 80px; text-align: center"><lable>Đoàn thể</lable></th>
                </tr>
                <?php
                $count = 1;
                ?>
                @foreach ( $listCamTinhDang as $camTinhDang )
                <tr>
                    <td>{{$count++}}</td>
                    <td>{{$camTinhDang->HOVATEN }}</td>
                    <td>
                        @if ( $camTinhDang -> gioitinh == "1")
                        {{date("d-m-Y", strtotime($camTinhDang->ngaysinh))}}
                        @endif
                    </td>
                    <td>
                        @if ( $camTinhDang->gioitinh == "0" )
                        {{date("d-m-Y", strtotime($camTinhDang->ngaysinh))}}
                        @endif
                    </td>
                    <td>
                        @foreach ( $listDanToc as $danToc )
                        @if ( $danToc->MADT == $camTinhDang->madt )
                        {{ $danToc->TENDT }}
                        @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ( $listTonGiao as $tonGiao )
                        @if ( $tonGiao->MATONGIAO == $camTinhDang->matongiao )
                        {{ $tonGiao->TENTONGIAO }}
                        @endif
                        @endforeach
                        @if ( $camTinhDang->matongiao == null )
                        {{ "Không" }}
                        @endif
                    </td>
                    <td>
                        @foreach ($listTinh as $tinh)
                        @foreach ($listHuyen as $huyen)
                        @foreach ($listXa as $xa)
                        @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT && $xa->MAPX == $camTinhDang->maquequan )
                        {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }}
                        @endif
                        @endforeach
                        @endforeach   
                        @endforeach
                    </td>
                    <td>
                        @foreach ($listTinh as $tinh)
                        @foreach ($listHuyen as $huyen)
                        @foreach ($listXa as $xa)
                        @if ( $xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT && $xa->MAPX == $camTinhDang->manoio )
                        {{ $xa->TENPX }}, {{ $huyen->TENQH }}, {{ $tinh->TENTT }}
                        @endif
                        @endforeach
                        @endforeach   
                        @endforeach
                    </td>
                    <td>
                        @foreach ( $listChuyenMon as $chuyenMon )
                        @if ( $chuyenMon -> MACM == $camTinhDang -> MACM )
                        {{$chuyenMon -> TENCM }}
                        @endif
                        @endforeach
                    </td>
                    <td>
                        {{$camTinhDang -> CVCQ }}
                    </td>
                    <td>
                        {{$camTinhDang -> CVDT }}
                    </td>
                    <td>
                       {{ date("d-m-Y", strtotime ( $camTinhDang -> NGAYCONGNHANCTD)) }}
                    </td>
                </tr>
                @endforeach
            </table>

            <div style="margin-left: 700px; text-align: center">
                <br>
                Cần thơ, ngày  {{date("d")}}  tháng {{date("m")}}    năm {{date("Y")}}<br>
                TM chi ủy<br><br><br><br>
                Bi thư

            </div>
        </div>

    </body>
</html>
