<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>In phiếu tổng hợp ý kiến đánh giá đảng viên mới</title>
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
                margin-left: 80px;
                margin-right: 80px;
            }
        </style>
    </head>
    <body>
        <div class="col-md-12">
            <table style="text-align: center">
                <tr>
                    <td style="width: 200px;">ĐẢNG BỘ KHOA CNTT&TT</td>
                    <td style="width: 220px; padding-left: 30px">ĐẢNG CỘNG SẢN VIỆT NAM</td>
                </tr>
                <tr>
                    <td style="width: 200px;">CHI ỦY {{$chiBo->TENCB}}</td>
                    <td style="width: 220px; padding-left: 30px">------------------------</td>
                </tr>
                <tr>
                    <td style="width: 200px;"></td>
                    <td style="width: 220px; padding-left: 30px">
                        Cần Thơ, ngày {{date("d")}}, tháng {{date("m")}}, năm {{date("Y")}}
                    </td>
                </tr>
            </table>
            
            <h2><center>Ý KIẾN NHẬN XÉT</center></h2>
            <H3><center>Của tổ chức đoàn thể nơi làm việc và chi ủy nơi cư trú <br>đồi với đảng viên dự bị</center></H3>
            
            <div style="text-align: justify;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Căn cứ ý kiến nhận xét của đại diện các tổ chức chính trị - xã hội thuộc
                phạm vi của chi bộ nơi làm việc và chi ủy nơi cư trú đối với quần chúng {{$dangVienMoi->HOTENSUDUNG}} xin vào Đảng.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Tên các tổ chức đoàn thể nơi làm việc: {{$noiLamViec}}, <br>
                tổng số có {{$soLuongNoiLamViec}} đồng chí.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Tên Chi ủy nơi cư trú: {{$noiCuTru}} có {{$soLuongNoiCuTru}} đồng chí<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chi ủy Chi bộ tổng hợp các ý kiến nhận xét đó như sau:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Những ưu, khuyết điểm chính:</b><br>
                {{$noiDung}}<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số đồng chí trong đại diện các tổ chức chính trị - xã hội nơi làm việc và
                trong chi ủy nơi cư trú tán thành kết nạp {{$dangVienMoi->HOTENSUDUNG}} vào Đảng là {{$soTanThanh}} đồng chí, 
                trong tổng số {{$soTanThanh + $soKhongTanThanh}} đồng chí được hỏi ý kiến (đạt {{$soTanThanh / ($soTanThanh + $soKhongTanThanh)  * 100}} %)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số không tán thành {{$soKhongTanThanh}} đồng chí (chiếm {{$soKhongTanThanh / ($soTanThanh + $soKhongTanThanh) * 100}} %) với lý do:<br>
                {{$lyDoKhongTanThanh }}
                <table>
                    <tr>
                        <td style="width: 200px; text-align: center">
                            
                        </td>
                        <td style="text-align: center; padding-left: 200px">
                            T/M Chi ủy<br>
                            {{$chucVuNguoiLap}}
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align: center; padding-left: 200px"><br><br><br><br><br>{{$nguoiLap}}</td>
                    </tr>
                </table>
            </div>   
        </div>
    </body>
</html>
