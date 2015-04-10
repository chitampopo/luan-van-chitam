<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Trang lập danh sách khen thưởng Đảng viên</title>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script2.js')}}" type="text/javascript"></script>
        <!-- Tích hợp editor -->
        <script type="text/javascript" src="{{asset('vendor/tinymce/tinymce/tinymce.min.js')}}"></script>
        <script type="text/javascript">
tinymce.init({
    selector: "textarea"
});
        </script>
        <script src="{{asset('public/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- DATA TABLES -->
        <link href="{{asset('public/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="col-md-9 alert alert-info">
            <div class="col-md-12 form-group form-inline ">
                <center><h2>Trang lập danh sách khen thưởng Đảng viên</h2></center><br>
                <form method="post" action="loc-danh-sach-khen-thuong-dang-vien">
                    Năm khen thưởng:
                    <select name="namKhenThuong" class="form-control">
                        @foreach($listNam as $nam)
                        <option value="{{$nam->NAM}}"
                        <?php
                        if ($nam->NAM == $namDuocChon) {
                            echo "selected";
                        }
                        ?>
                                >{{$nam->NAM}}</option>
                        @endforeach
                    </select>
                    <input type="submit" value="Lọc"  class="form-control">
                </form><br><br>
                <div class="box">
                    <div class="box-body">
                        <form method="post" action="luu-khen-thuong-dang-vien">
                            <input type="hidden" value="{{$namDuocChon}}" name="namIn">
                            <table class="table table-bordered table-striped" id="example1" data-height="299">
                                <thead>
                                    <tr>
                                        <th style="width: 30px">STT</th> 
                                        <th style="width: 120px">Chi bộ</th>
                                        <th style="width: 120px">Đảng viên</th>
                                        <th style="width: 150px">Hình thức khen thưởng</th> 
                                        <th style="width: 150px">Ngày lập quyết định</th> 
                                        <th style="width: 150px">Cấp quyết định</th> 
                                    </tr>
                                </thead>
                                <?php
                                $count = 1;
                                ?>
                                <tbody>
                                    @foreach($listDangVien as $dangVien)
                                    <tr>
                                        <td>{{$count++;}}</td>
                                        <td>
                                            @foreach($listChiBo as $chiBo)
                                            @if($chiBo->MACB == $dangVien->MACB)
                                            {{$chiBo->TENCB}}
                                            @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            {{$dangVien->HOTENSUDUNG}}
                                        </td>
                                        <td>
                                            <select name="{{"hinhThucKT".$dangVien->MADANGVIEN}}" class="form-control">
                                                <option value="0">Không</option>
                                                @foreach($listHTKT as $htkt)
                                                <option value="{{$htkt->MAHTKT}}"
                                                <?php
                                                foreach ($listKhenThuong as $khenThuong) {
                                                    if ($dangVien->MADANGVIEN == $khenThuong->MADANGVIEN && $khenThuong->MAHTKT == $htkt->MAHTKT) {
                                                        echo "selected";
                                                    }
                                                }
                                                ?>
                                                        >{{$htkt->TENHTKT}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input class="form-control" data-provide="datepicker" name="{{"ngayKT".$dangVien->MADANGVIEN}}" type="text"
                                            <?php
                                            foreach ($listKhenThuong as $khenThuong) {
                                                if ($dangVien->MADANGVIEN == $khenThuong->MADANGVIEN) {
                                                    echo "value = '" . date("d-m-Y", strtotime($khenThuong->NGAYLAPKT)) . "'";
                                                }
                                            }
                                            ?>
                                                   >
                                        </td>
                                        <td>
                                            <input type="text" name="{{"capQD".$dangVien->MADANGVIEN}}" class="form-control"
                                            <?php
                                            foreach ($listKhenThuong as $khenThuong) {
                                                if ($dangVien->MADANGVIEN == $khenThuong->MADANGVIEN) {
                                                    echo "value = '" . $khenThuong->CAPQUYETDINH . "'";
                                                }
                                            }
                                            ?>
                                                   >
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <input type="submit" value="Lưu" class="form-control">
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- DATA TABES SCRIPT -->
    <script src="{{asset('public/js/jquery.dataTables.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/js/dataTables.bootstrap.js')}}" type="text/javascript"></script>
    <script>
$(function () {
$("#example1").dataTable();
$('#example2').dataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": false,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false
});
});
    </script>
</body>
</html>

