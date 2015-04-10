<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>In quyết định</title>
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
                        ĐẢNG BỘ TRƯỜNG ĐAI HỌC CẦN THƠ
                    </td>
                    <td style="width: 300px; padding-left: 30px">ĐẢNG CỘNG SẢN VIỆT NAM</td>
                </tr>
                <tr>
                    <td style="width: 200px;">
                        ĐẢNG ỦY KHOA CNTT&TT
                    </td>
                    <td style="width: 220px; padding-left: 30px"></td>
                </tr>
                <tr>
                    <td style="width: 200px;">Số:............-NQ/ĐU
                        </td>
                    <td style="width: 220px; padding-left: 30px">
                        Cần Thơ, ngày {{date("d")}}, tháng {{date("m")}}, năm {{date("Y")}}
                    </td>
                </tr>
            </table>

            <h2><center>QUYẾT ĐỊNH</center></h2>
            <H3><center>{{$tenQuyetDinh}}<br>-------------</center></H3>

            <div style="text-align: justify;">
                {{$cacCanCu}}<br>
                <center><h3>BAN CHẤP HÀNH QUYẾT ĐỊNH</h3></center>
                {{$cacQuyetDinh}}<br>
                
                <table>
                    <tr>
                        <td style="width: 200px; text-align: center">
                            Nơi nhận:
                        </td>
                        <td style="text-align: center; padding-left: 200px">
                            T/M Đảng ủy
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{$noiNhan}}
                        </td>
                        <td style="text-align: center; vertical-align: top; padding-left: 200px">
                            {{$chucVuNguoiLap}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td style="text-align: center; padding-left: 200px">
                            <br><br><br>
                            {{$nguoiLap}}
                        </td>
                    </tr>
                </table>
            </div>   
        </div>
    </body>
</html>
