<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>In phiếu xin ý kiến đánh giá Đảng viên mới</title>
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
            
            <h2><center>PHIẾU XIN Ý KIẾN</center></h2>
            <H3><center>Nhận xét về đảng viên dự bị</center></H3>
            
            <center><b>Kính gửi: </b> {{$noiGoiDen}}</center>
            <div style="text-align: justify">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Căn cứ vào văn bản số 03-HD/BTCTW ngày 29/12/2006 của Ban Tổ
                chức Trung ương về việc lấy ý kiến của đại diện cá tổ chức chính trị - xã hội
                trong phạm vi lãnh đạo của chi bộ nơi đảng viên dự bị đang là thành viên.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Để có cơ sở xem xét đề nghị công nhận đảng viên dự bị trở thành 
                đảng viên chính thức của đồng chí {{$dangVienMoi->HOTENSUDUNG}},
                sinh ngày {{date('d', strtotime($dangVienMoi->NGAYSINH))}}, tháng {{date('m', strtotime($dangVienMoi->NGAYSINH))}}, 
                năm {{ date('Y', strtotime($dangVienMoi->NGAYSINH)) }}.<br>
                Quê quán {{$queQuan}}. <br>
                Đang cư trú tại nhà số {{ $cuTru }}.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đề nghị Ban chấp hành cho ý kiến nhận xét ưu và khuyết điểm chính:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1- Về phẩm chất chính trị:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2- Về đạo đức, lối sống:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3- Về mối quan hệ với quần chúng nơi đang công tác (học tập).<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số đồng chí tán thành quần chúng {{$dangVienMoi->HOTENSUDUNG}} trở
                thành đảng viên là {{$soTanThanh}} đồng chí.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số không tán thành {{$soKhongTanThanh}}, lý do {{$lyDoKhongTanThanh}}<br>
                <center>Kính mong các đồng chí nhiệt tình hỗ trợ, giúp đỡ.</center><br>
                <center>Trân trọng.</center><br>
                <table>
                    <tr>
                        <td style="width: 200px; text-align: center">
                            @if ($loaiPhieu == "1" )
                            XÁC NHẬN CỦA CẤP ỦY CƠ SỞ<br>
                            T/M
                            @endif
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
