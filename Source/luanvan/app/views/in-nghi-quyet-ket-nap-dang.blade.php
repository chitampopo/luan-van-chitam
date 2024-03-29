<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>In nghị quyết kết nạp Đảng</title>
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
                    <td style="width: 270px;">
                        @if ($maChiBo != 0)
                        ĐẢNG BỘ KHOA CNTT&TT
                        @else
                        ĐẢNG BỘ TRƯỜNG ĐAI HỌC CẦN THƠ
                        @endif
                    </td>
                    <td style="width: 300px; padding-left: 30px">ĐẢNG CỘNG SẢN VIỆT NAM</td>
                </tr>
                <tr>
                    <td style="width: 200px;">
                        @if ($maChiBo != 0)
                        {{$chiBo->TENCB}}
                        @else
                        ĐẢNG ỦY KHOA CNTT&TT
                        @endif
                    </td>
                    <td style="width: 220px; padding-left: 30px"></td>
                </tr>
                <tr>
                    <td style="width: 200px;">
                    <td style="width: 220px; padding-left: 30px">
                        Cần Thơ, ngày {{date("d")}}, tháng {{date("m")}}, năm {{date("Y")}}
                    </td>
                </tr>
            </table>
            
            <h2><center>NGHỊ QUYẾT</center></h2>
            <H3><center>Đề nghị kết nạp đảng viên</center></H3>
            
            <div style="text-align: justify;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Căn cứ Điều 4, Điều lệ Đảng Cộng sản Việt Nam.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ngày {{date("d")}}, tháng {{date("m")}}, năm {{date("Y")}}. Ban chấp hành
                @if ($maChiBo != 0)
                Đảng ủy {{$chiBo->TENCB}}
                @else
                Đảng bộ Khoa CNTT&TT
                @endif
                đã họp để xét, đề nghị kết nạp quần chúng {{$camTinhDang->HOVATEN}} vào Đảng.<br>
                @if($maChiBo == 0)
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tổng số ủy viên Ban chấp hành {{$soUyVienBanChapHanh}} đồng chí, có mặt {{$soUyVienBanChapHanhCoMat}} đồng chí, vắng mặt {{$soUyVienBanChapHanhVangMat}} đồng chí.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lý do vắng mặt: {{$lyDoUyVienBanChapHanhVangMat}}.<br>
                @else
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tổng số đảng viên của Chi bộ {{$soDangVien}} đảng viên,
                trong đó chính thức {{$soDangVienChinhThuc}} đồng chí, dự bị {{$soDangVienDuBi}}.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Có mặt: {{$soDangVienCoMat}} đảng viên, trong đó chính thức {{$soDangVienChinhThucCoMat}} đồng chí,
                dự bị: {{$soDangVienDuBiCoMat}}.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vắng mặt: {{$soDangVienVangMat}} đảng viên, trong đó chính thức {{$soDangVienChinhThucVangMat}} đồng chí,
                dự bị {{$soDangVienDuBiVangMat}} đồng chí.<br>
                @endif
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chủ tọa hội nghị: đồng chí {{$chuTri}}. Chức vụ: {{$chucVuNguoiChuTri}}<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thư ký hội nghị: {{$thuKy}}<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sau khi nghe báo cáo và thảo luận, Đảng ủy thông nhất kết luận về quần chúng {{$camTinhDang->HOVATEN}} như sau:<br>
                Những ưu khuyết điểm chính:<br>
                {{$uuKhuyetDiem}}<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đối chiếu với quy định của Điều lệ Đảng về tiêu chuẩn 
                và điều kiện kết nạp đảng viên, Đảng viên đã xét và biểu quyết kết nạp quần chúng {{$camTinhDang->HOVATEN}} 
                vào Đảng, kết quả như sau:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Đồng ý kết nạp vào Đảng {{$soTanThanh}} đồng chí (đạt {{$soTanThanh / ($soTanThanh + $soKhongTanThanh)  * 100}} %) so với tổng số cấp ủy viên.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Không đồng ý kết nạp vào Đảng {{$soKhongTanThanh}} đồng chí (chiếm {{$soKhongTanThanh / ($soTanThanh + $soKhongTanThanh)  * 100}} %) với lý do {{$lyDoKhongTanThanh}}.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @if ($maChiBo != 0)
                Đề nghị Ban thường vụ đảng ủy Khoa CNTT&TT
                @else
                Đề nghị Ban Thường vụ đảng ủy trường Đại học Cần Thơ
                @endif
                 xét quyết định kết nạp quần chúng {{$camTinhDang->HOVATEN}} vào Đảng.
                <table>
                    <tr>
                        <td style="width: 200px; text-align: center">
                            Nơi nhận:
                        </td>
                        <td style="text-align: center; padding-left: 200px">
                            T/M Chi ủy
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{$noiNhan}}
                        </td>
                        <td style="text-align: center; padding-left: 200px">
                            {{$chucVuNguoiLap}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td style="text-align: center; padding-left: 200px">
                            <br><br><br><br><br>
                            {{$nguoiLap}}
                        </td>
                    </tr>
                </table>
            </div>   
        </div>
    </body>
</html>
