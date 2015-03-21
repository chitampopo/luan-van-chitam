<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>In sổ Đảng tịch</title>
        <style>
            table{
                border-collapse: collapse;
                border: 1px solid black;
              }
              table td, table th{
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
                TRƯỜNG ĐẠI HỌC CẦN THƠ
                
                <span style="margin-left: 500px">ĐẢNG CỘNG SẢN VIỆT NAM</span><br>
                ĐẢNG BỘ KHOA CNTT&TT<br>
                    <?php 
                    $dsChiBo = ChiBo::all();
                    $checkCB = false;
                    foreach( $dsChiBo as $chiBo ){
                        if( $maChiBoChon == $chiBo->MACB){
                            echo $chiBo->TENCB;
                            $checkCB = true;
                        }
                    }
                    if ($checkCB == false){
                        //echo "Toàn Đảng Bộ";
                    }
                    ?>
                <br>
                <br>
            </div>
        </div>
        <div class="col-md-12">
            <center><h2>SỔ DANH SÁCH ĐẢNG VIÊN</h2></center>
        </div>
        <div class="col-md-12">
            <table>
                <tr>
                    <th style="width: 30px; text-align: center"><lable>STT</lable></th>
                    <th style="width: 150px; text-align: center"><lable>Họ và tên</lable></th>
                    <th style="width: 80px; text-align: center">
                        <lable>Nam, nữ<br> dân tộc,<br>tôn giáo</lable>
                    </th>
                    <th style="width: 250px; text-align: center"><lable>Quê quán</lable></th>
                    <th style="width: 120px; text-align: center"><lable>Văn hóa,<br>Lý luận,<br>CMNV,<br>Ngoại ngữ</lable></th>
                    <th style="width: 90px; text-align: center"><lable>Nghề nghiệp trước khi vào Đảng,<br>nghề nghiệp hiện nay</lable></th>
                    <th style="width: 120px; text-align: center"><lable>Ngày vào Đảng,<br> ngày chính thức</lable></th>
                    <th style="width: 100px; text-align: center"><lable>Số thẻ đảng viên,<br> số lý lịch đảng viên</lable></th>
                    <th style="width: 70px; text-align: center"><lable>Bộ đội,<br>công an,<br> hưu trí</lable></th>
                    <th style="width: 70px; text-align: center"><lable>Ngày chuyển đi đến đảng bộ cơ sở</lable></th>
                    <th style="width: 70px; text-align: center"><lable>Ngày chuyển đến, ở đảng bộ cơ sở nào đến</lable></th>
                    <th style="width: 70px; text-align: center"><lable>Ngày từ trần,<br>lý do</lable></th>
                    <th style="width: 70px; text-align: center"><lable>Ngày ra khỏi Đảng,<br>hình thức ra Đảng</lable></th>
                    <th><lable>Ghi chú</lable></th>
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
                @foreach ($listDangVien as $item)
                    <tr>
                        <td> {{$count++;}}</td>
                        <td>{{$item->HOTENSUDUNG}}</td>
                        <td>
                            <?php 
                            if ($item->GIOITINH == "1"){
                                echo "Nam, <br>";
                            } else{
                                echo "Nữ, <br>";
                            }
                            foreach( $listDanToc as $danToc){
                                if ( $item->MADT == $danToc -> MADT){
                                    echo $danToc->TENDT.", ";
                                }
                            }
                            echo "<br>";
                            $check = false;
                            foreach( $listTonGiao as $tonGiao){
                                if ( $item->MATONGIAO == $tonGiao -> MATONGIAO){
                                    echo $tonGiao->TENTONGIAO;
                                    $check = true;
                                }
                            }
                            if($check == false){
                                echo "Không";
                            }
                            echo "<br>";
                        ?>
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
                            <?php $checkCM = false;
                                  $checkNV = false;
                            ?>
                            @foreach ($listVH as $vH)
                                @if ( $vH->MATRINHDOVH == $item->MATRINHDOVH )
                                {{ $vH->TENTRINHDOVH.", "; }}
                                @endif
                            @endforeach<br>
                            @foreach ($listCT as $cT)
                                @if ( $cT->MATRINHDOCT == $item->MATRINHDOCT )
                                {{ $cT->TENTRINHDOCT.", "; }}
                                @endif
                            @endforeach<br>
                            @foreach ($listCM as $cM)
                                @if ( $cM->MACM == $item->MACM )
                                <?php
                                    echo $cM->TENCM;
                                    $checkCM = true;
                                ?>
                                @endif
                            @endforeach
                            @if ( $checkCM == false )
                                {{ "" }}
                            @endif
                            <br>
                            @foreach ($listNV as $nV)
                                @if ( $cT->MANV == $item->MANV )
                                <?php
                                    echo  $cT->TENNV;
                                    $checkNV = true;
                                ?>
                                @endif
                            @endforeach
                            @if ( $checkNV == false )
                                {{ "" }}
                            @endif
                            <br>
                            @foreach ($listNN as $nN)
                            @foreach ($listTDNN as $tDNN )
                                @if ( $nN->MANGOAINGU == $tDNN->MANGOAINGU && $tDNN -> MADANGVIEN == $item->MADANGVIEN )
                                <?php
                                    echo  $nN->TENNGOAINGU."<br>";
                                ?>
                                @endif
                            @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach ( $listNNghiep as $nNghiep )
                                @if ( $item -> NGHENGHIEPTRUOCKHIVAODANG == $nNghiep->MANN )
                                {{ $nNghiep->TENNN.", " }}
                                @endif
                            @endforeach
                            @foreach ( $listNNghiep as $nNghiep )
                                @if ( $item -> MANN == $nNghiep->MANN )
                                {{ $nNghiep->TENNN }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            {{ date("d-m-Y", strtotime($item ->	NGAYVAODANG)).", " }}
                            <br>
                            @if ( $item -> NGAYVAODANGCHINHTHUC == null )
                            {{ "" }}
                            @else
                            {{ date("d-m-Y", strtotime($item -> NGAYVAODANGCHINHTHUC)) }}
                            @endif
                        </td>
                        <td>
                            @foreach ( $listTheDang as $theDang )
                            @if ( $theDang->MADANGVIEN == $item -> MADANGVIEN )
                            {{ $theDang -> SOTHE.", " }}
                            @endif
                            @endforeach
                            <br>
                            {{ $item-> SOLL }}
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
                
            </table>
        </div>
    </body>
</html>
