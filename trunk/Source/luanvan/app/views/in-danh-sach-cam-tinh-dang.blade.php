<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
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
            span {
                -webkit-transform: rotate(90deg);	
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
            }
        </style>
    </head>
    <body>
        <div class="col-md-12">
            <div class="col-md-3">
                <b>
                    <table>
                        <tr>
                            <td style="width: 500px;"><h3>ĐẢNG BỘ KHOA CNTT&TT</h3></td>
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
                        <center><h2>DANH SÁCH CẢM TÌNH ĐẢNG – KẾ HOẠCH KẾT NẠP ĐẢNG VIÊN</h2></center>
                        <center><h3>(Cập nhật hằng tháng)</h3></center>
                        {{ "<center><b><h3>THÁNG ".substr($thangNamChon, 0, 2)." NĂM ".substr($thangNamChon, 3, 6)."<h3><b></center><br><br>" }}
                    </div>
            </div>
        </div>

        <div class="col-md-12">
            <table class="tb">
                <tr>
                    <th style="width: 30px; text-align: center" rowspan="2"><lable>STT</lable></th>
                <th style="width: 150px; text-align: center" rowspan="2"><lable>Họ và tên</lable></th>
                <th style="width: 100px; text-align: center;" rowspan="2"><lable>NGÀY CÔNG NHẬN CẢM TÌNH ĐẢNG</lable></th>
                <th style="width: 100px; text-align: center" rowspan="2"><lable>GIẤY CHỨNG NHẬN HỌC LỚP BỒI DƯỠNG NHẬN THỨC VỀ ĐẢNG</lable></th>
                <th style="width: 150px; text-align: center" colspan="4"><lable>Lý Lịch</lable></th>
                <th style="width: 50px; text-align: center" rowspan="2"><lable>CTĐ LÀM ĐƠN XIN VÀO ĐẢNG</lable></th>
                <th style="width: 50px; text-align: center" colspan="2"><lable>XIN Ý KIẾN NHẬN XET</lable></th>
                <th style="width: 50px; text-align: center" colspan="2"><lable>LÀM GIẤY GIỚI THIÊU</lable></th>
                <th style="width: 50px; text-align: center" rowspan="2"><lable>CHI BỘ XÉT KẾT NẠP </lable></th>
                <th style="width: 50px; text-align: center" rowspan="2"><lable>CHUYỂN HỒ SƠ LÊN ĐẢNG UỶ</lable></th>
                <th style="width: 150px; text-align: center" rowspan="2"><lable>Người hướng dẫn</lable></th>
                </tr>
                <tr>
                    <th style="width: 50px; text-align: center"><lable>VIẾT LÝ LỊCH BẢN NHÁP</lable></th>
                <th style="width: 50px; text-align: center"><lable>CHI BỘ THÔNG QUA  LÝ LỊCH</lable></th>
                <th style="width: 50px; text-align: center"><lable>VIẾT LÝ LỊCH BẢN CHÍNH</lable></th>
                <th style="width: 50px; text-align: center"><lable>ĐÃ XÁC MINH LÝ LỊCH</lable></th>
                <th style="width: 50px; text-align: center"><lable>CẤP UỶ NƠI CƯ TRÚ</lable></th>
                <th style="width: 50px; text-align: center"><lable>CÔNG ĐOÀN ĐOÀN TN</lable></th>
                <th style="width: 50px; text-align: center"><lable>ĐẢNG VIÊN HƯƠNG DẪN</lable></th>
                <th style="width: 50px; text-align: center"><lable>ĐOÀN KHOA Hoặc CÔNG ĐOÀN</lable></th>
                </tr>
                <?php
                $count = 1;
                ?>
                @foreach ( $listCamTinhDang as $camTinhDang )
                <tr>
                    <td>{{$count++}}</td>
                    <td>{{$camTinhDang->HOVATEN }}</td>
                    <td>{{date("d-m-Y", strtotime($camTinhDang->NGAYCONGNHANCTD))}}</td>
                    <td>{{date("d-m-y", strtotime($camTinhDang->CHUNGNHANCTD))}}</td>
                    <td>
                        <?php
                        if ($camTinhDang->LLNHAP == "1") {
                            echo "X";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($camTinhDang->CBTHONGQUA == "1") {
                            echo "X";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($camTinhDang->LLCHINH == "1") {
                            echo "X";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($camTinhDang->XACMINH == "1") {
                            echo "X";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($camTinhDang->VIETDON == "1") {
                            echo "X";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($camTinhDang->YKIENCUTRU == "1") {
                            echo "X";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($camTinhDang->YKIENDOANTHE == "1") {
                            echo "X";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($camTinhDang->GIAYGTDANGVIEN == "1") {
                            echo "X";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($camTinhDang->GIAYGTDOANTHE == "1") {
                            echo "X";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($camTinhDang->XETKETNAP == "1") {
                            echo "X";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($camTinhDang->CHUYENDANGUY == "1") {
                            echo "X";
                        }
                        ?> 
                    </td>
                    <td>
                        <?php
                        $array = strripos($camTinhDang->NGUOIHD, "2)");
                        echo substr($camTinhDang->NGUOIHD, 0, $array);
                        echo "<Br>";
                        echo substr($camTinhDang->NGUOIHD, $array, strlen($camTinhDang->NGUOIHD));
                        ?>
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
