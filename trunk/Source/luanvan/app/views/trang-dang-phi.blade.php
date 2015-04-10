<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Đảng phí</title>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- DATA TABLES -->
        <link href="{{asset('public/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="col-md-12">
            <br>
        </div>
        @include('header')
        <br>
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div class="col-md-9 container alert alert-info">
            <center><h2><br>Trang tính Đảng phí {{$thangNam}}</h2></center><br>
            <form method="post" action="in-dang-phi-theo-thang" >
                <input type="hidden" name="thangNam" value="{{$thangNam}}">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <input type="submit" value="In Đảng phí tháng" class="form-control" >
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="form-control" data-toggle="modal" data-target="#myModal2">Đảng phí các quí</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="form-control" data-toggle="modal" data-target="#myModal1">Đảng phí các năm</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="form-control" data-toggle="modal" data-target="#myModal">Đảng phí các tháng</button>
                    </div>
                </div>
                <br><br><br>
            </form>
            <!-- Modal các tháng -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                            <h3 class="modal-title custom_align" id="Heading" style="color: #228B22">Đảng phí các tháng trước</h3>
                        </div>
                        <div class="modal-body">
                            <?php
                            $listDangPhiThang = DB::select("select distinct dangphi.THANGNAM from dangphi, thangnam where dangphi.THANGNAM = thangnam.THANGNAM");
                            ?>
                            @foreach($listDangPhiThang as $dangPhiThang)
                            <a href="{{URL::to("/")}}/in-dang-phi-thang/{{$dangPhiThang->THANGNAM}}">{{$dangPhiThang->THANGNAM}}</a><br>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.modal-content --> 
                </div>
            </div>
            <!-- Modal các năm -->
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                            <h3 class="modal-title custom_align" id="Heading" style="color: #228B22">Đảng phí các năm</h3>
                        </div>
                        <div class="modal-body">
                            <?php
                            $listNam = DB::select("select distinct mid(THANGNAM, 4, 4) as NAM from dangphi");
                            ?>
                            @foreach($listNam as $nam)
                            <a href="{{URL::to("/")}}/trang-dang-phi-theo-nam/{{$nam->NAM}}">{{$nam->NAM}}</a><br>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.modal-content --> 
                </div>
            </div>
            <!-- Modal các quí-->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                            <h3 class="modal-title custom_align" id="Heading" style="color: #228B22">Đảng phí các năm</h3>
                        </div>
                        <div class="modal-body">
                            <?php
                            $listNam = DB::select("select distinct mid(THANGNAM, 4, 4) as NAM from dangphi");
                            $listQui = array();
                            foreach ($listNam as $nam) {
                                if (count(DB::select("select * from dangphi where dangphi.THANGNAM = '01-" . $nam->NAM . "'")) != 0 &&
                                        count(DB::select("select * from dangphi where dangphi.THANGNAM = '02-" . $nam->NAM . "'")) != 0 &&
                                        count(DB::select("select * from dangphi where dangphi.THANGNAM = '03-" . $nam->NAM . "'")) != 0
                                ) {
                                    array_push($listQui, "01-" . $nam->NAM);
                                }
                                if (count(DB::select("select * from dangphi where dangphi.THANGNAM = '04-" . $nam->NAM . "'")) != 0 &&
                                        count(DB::select("select * from dangphi where dangphi.THANGNAM = '05-" . $nam->NAM . "'")) != 0 &&
                                        count(DB::select("select * from dangphi where dangphi.THANGNAM = '06-" . $nam->NAM . "'")) != 0
                                ) {
                                    array_push($listQui, "02-" . $nam->NAM);
                                }
                                if (count(DB::select("select * from dangphi where dangphi.THANGNAM = '07-" . $nam->NAM . "'")) != 0 &&
                                        count(DB::select("select * from dangphi where dangphi.THANGNAM = '08-" . $nam->NAM . "'")) != 0 &&
                                        count(DB::select("select * from dangphi where dangphi.THANGNAM = '09-" . $nam->NAM . "'")) != 0
                                ) {
                                    array_push($listQui, "03-" . $nam->NAM);
                                }
                                if (count(DB::select("select * from dangphi where dangphi.THANGNAM = '10-" . $nam->NAM . "'")) != 0 &&
                                        count(DB::select("select * from dangphi where dangphi.THANGNAM = '11-" . $nam->NAM . "'")) != 0 &&
                                        count(DB::select("select * from dangphi where dangphi.THANGNAM = '12-" . $nam->NAM . "'")) != 0
                                ) {
                                    array_push($listQui, "04-" . $nam->NAM);
                                }
                            }
                            ?>
                            @foreach($listQui as $qui)
                            <a href="{{URL::to("/")}}/trang-dang-phi-theo-quy/{{$qui}}">{{$qui}}</a><br>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.modal-content --> 
                </div>
            </div>

            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered table-striped" id="example1" data-height="299">
                        <thead>
                            <tr>
                                <th style="width: 30px">STT</th> 
                                <th style="width: 120px">Họ và tên</th> 
                                <th style="width: 150px">Chi bộ</th> 
                                <th style="width: 35px">Hệ số lương</th> 
                                <th style="width: 35px">Phụ cấp chức vụ</th> 
                                <th style="width: 35px">Phụ cấp thâm niên</th> 
                                <th style="width: 40px">Phụ cấp vượt khung</th> 
                                <th style="width: 110px">Tổng lương</th> 
                                <th style="width: 50px">Truy thu</th> 
                            </tr>
                        </thead>
                        <?php
                        $count = 1;
                        $listChiBo = ChiBo::all();
                        $luongCoBan = LuongCB::orderBy("STTLUONGCB", "DESC")->first();
                        ?>
                        @foreach( $listDangVien as $dangVien )
                        <tr>
                            <td data-field="id" >{{$count++;}}</td> 
                            <td data-field="id" >{{$dangVien->HOTENSUDUNG}}</td> 
                            <td data-field="id"  >
                                @foreach( $listChiBo as $chiBo )
                                @if ($chiBo->MACB == $dangVien->MACB)
                                {{$chiBo->TENCB}}
                                @endif
                                @endforeach

                                </th> 
                            <td data-field="id" >{{number_format($dangVien->HSLUONG, 2)}}</td> 
                            <td data-field="id" >{{number_format($dangVien->HSCHUCVU ,2 )}}</td> 
                            <td data-field="id" >{{number_format($dangVien->HSTHAMNIEN, 2)}}</td> 
                            <td data-field="id" >{{number_format($dangVien->HSVUOTKHUNG, 2)}}</td> 
                            <td data-field="id" >
                                <?php
                                $luong = number_format($luongCoBan->LUONGCB * ( $dangVien->HSLUONG + $dangVien->HSCHUCVU ) * ( 1 + $dangVien->HSTHAMNIEN + $dangVien->HSVUOTKHUNG), 0);
                                ?>
                                {{$luong;}} VNĐ
                            </td>
                            <td>
                                <?php
                                $truyThu = DangPhi::where("MADANGVIEN", "=", $dangVien->MADANGVIEN)->where("THANGNAM", "=", $thangNam)->first();
                                ?>
                                <input type="number" style="width: 7em" class="form-control" name="{{"TRUYTHU".$dangVien->MADANGVIEN}}" value="{{$truyThu->TRUYTHUTHANG or null}}">
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div>
        <!-- DATA TABES SCRIPT -->
        <script src="{{asset('public/js/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/dataTables.bootstrap.js')}}" type="text/javascript"></script>
        <script>
$('#button1').click(function () {
    window.location = "http://localhost/luanvan/trang-dang-phi-theo-quy/01-2015";
});
$('#button2').click(function () {
    window.location = "http://localhost/luanvan/trang-dang-phi-theo-nam/2015";
});
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
