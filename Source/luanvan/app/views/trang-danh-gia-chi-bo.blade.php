<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang cập nhật đánh giá và phân loại Chi bộ</title>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery.validate.min')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
    </head>
    <body>
        @include('header')
        <div class="col-md-3"> 
            @include('menu')
        </div>
        <div >
            <div class="col-md-9 container alert alert-success" style="padding: 0 30px 0 30px">
                <center><h2>Trang cập nhật đánh giá và phân loại Chi bộ</h2></center><br>
                <form action="filter-danh-gia-chi-bo" method="post" class="form-group">
                    <div class="col-md-4">
                        <select class="form-control" name="namChon">
                            @foreach( $listNam as $nam )
                            <option value="{{$nam->NAM}}"
                                    <?php
                                    if ($nam->NAM == $namDuocChon) {
                                        echo "selected";
                                    }
                                    ?>
                                    >{{$nam->NAM}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input class="btn btn-default"  type="submit" value="Liệt kê">
                    </div>
                </form>
                <form action="luu-danh-gia-chi-bo" method="post" class="form-group">
                    <input type="hidden" name="namChon" value="{{$namDuocChon}}">
                    <br><br>
                    <table class="table col-md-8">
                        <thead>
                            <tr>
                                <th>Tên Chi bộ</th> 
                                <th>Mức phân loại</th>
                            </tr>
                        </thead>
                        @foreach ($listChiBo as $item)
                        <tr>
                            <td>{{$item->TENCB}}</td> 
                            <td>
                                <select name="{{'mucPhanLoai'.$item->MACB }}" class="form-control">
                                    <?php
                                    $phanLoai = PhanLoaiChiBo::where("MACB","=",$item->MACB)->where("NAM","=",$namDuocChon)->first();
                                    if(count($phanLoai)==0){
                                        $phanLoai = new PhanLoaiDangVien();
                                        $phanLoai->MUCPLCB = 0;
                                    }
                                    ?>
                                    @if($phanLoai->MUCPL == 0 )
                                    <option>Chưa chọn</option>
                                    @endif
                                    <option value='1'
                                            <?php
                                            if($phanLoai->MUCPLCB == 1){
                                                echo "selected";
                                            }
                                            ?>
                                            >Chi bộ trong sạch, vững mạnh:</option>
                                    <option value='2'
                                            <?php
                                            if($phanLoai->MUCPLCB == 2){
                                                echo "selected";
                                            }
                                            ?>
                                            >Chi bộ hoàn thành tốt nhiệm vụ</option>
                                    <option value='3'
                                            <?php
                                            if($phanLoai->MUCPLCB == 3){
                                                echo "selected";
                                            }
                                            ?>
                                            >Chi bộ hoàn thành nhiệm vụ</option>
                                    <option value='4'
                                            <?php
                                            if($phanLoai->MUCPLCB == 4){
                                                echo "selected";
                                            }
                                            ?>
                                            >Chi bộ yếu kém</option>
                                </select>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div style="float:right">
                        <input class="btn btn-default"  type="submit"  value="Lưu lại">
                        <br><br>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
