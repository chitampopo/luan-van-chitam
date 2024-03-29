<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <link rel="stylesheet" href="{{asset('public/css/styles-menu-vertical.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script-menu-vertical.js')}}"></script>
        <script src="{{asset('public/js/bootstrap.min.js')}}" type="text/javascript"></script>
    </head>
    <body>
        <div class="alert btn-primary" style="background-color: menu; font-size: 15px">
            <ul class="nav nav-pills nav-stacked ">
                <li class="dropdown">
                    <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                        Cập nhật danh mục
                        <span class="caret"></span>
                    </a>
                    <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-chi-bo'>Cập nhật danh mục chi bộ</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-chuc-vu'>Cập nhật danh mục chức vụ</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-chuyen-mon'>Cập nhật danh mục chuyên môn</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-dan-toc'>Cập nhật danh mục dân tộc</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-hinh-thuc-kl'>Cập nhật danh mục hình thức kỷ luật</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-hinh-thuc-kt'>Cập nhật danh mục hình thức khen thưởng</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-hoc-ham'>Cập nhật danh mục học hàm</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-hoc-vi'>Cập nhật danh mục học vị</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-luong-cb'>Cập nhật danh mục lương cơ bản</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-nghe-nghiep'>Cập nhật danh mục nghề nghiệp</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-nghiep-vu'>Cập nhật danh mục nghiệp vụ</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-ngoai-ngu'>Cập nhật danh mục ngoại ngữ</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-ton-giao'>Cập nhật danh mục tôn giáo</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-dia-chi'>Cập nhật danh mục địa chỉ</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-nhiem-ky'>Cập nhật danh mục nhiệm kỳ</a>
                        </li> 
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-trinh-do-vh'>Cập nhật danh mục trình độ văn hóa</a>
                        </li> 
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-danh-muc-trinh-do-ct'>Cập nhật danh mục trình độ chính trị</a>
                        </li> 
                    </ul>
                </li>
                <li class="dropdown"  role="presentation" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hồ sơ Đảng viên<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href='{{URL::to('/')}}/danh-sach-dang-vien'>Quản lý danh sách Đảng viên và Sổ Đảng tịch</a></li>
                        <li><a href='{{URL::to('/')}}/cap-nhat-chuc-vu'>Cập nhật chức vụ và Lí lịch trích ngang</a></li>
                    </ul>
                </li>
                <li class="dropdown"  role="presentation" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Công văn<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('/')}}/trang-so-cong-van-den">Công văn đến</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('/')}}/trang-so-cong-van-di">Công văn đi</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Đảng phí<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href='{{URL::to('/')}}/trang-dang-phi'>Trang đảng phí</a>
                        </li>
                        <li>
                            <a href='{{URL::to("/")}}/cap-nhat-cac-he-so'>Cập nhật các hệ số lương</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kết nạp Đảng<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href='{{URL::to('/')}}/danh-sach-cam-tinh-dang'>Danh sách cảm tình Đảng</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/trang-xin-y-kien-cam-tinh-dang'>Giấy xin ý kiến đoàn thể, chi bộ nơi cư trú</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/lap-danh-sach-di-hoc/{{Session::get("maChiBoTaiKhoan")}}'>Lập danh sách lớp bồi dưỡng kết nạp Đảng</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/trang-tong-hop-y-kien-cam-tinh-dang'>Tổng hợp ý kiến nhận xét nơi công tác</a>
                        </li>
                        <li>
                            <a href='#'>Phiếu thẩm tra, chứng nhận lí lịch Đảng viên</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Công nhận ĐV chính thức<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href='{{URL::to("/")}}/trang-lap-danh-sach-boi-duong-dvm'>Danh sách lớp bồi dưỡng Đảng viên mới</a>
                        </li>
                        <li>
                            <a href='{{URL::to("/")}}/trang-xin-y-kien-dang-vien-moi'>Phiếu xin YKNX ĐVDB ở Đoàn thể, Chi bộ nơi cư trú</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/trang-tong-hop-y-kien-dang-vien-moi'>Tổng hợp ý kiến nhận xét ĐVDB nơi công tác</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Nghị quyết, quyết định<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href='{{URL::to('/')}}/trang-nghi-quyet-ket-nap'>Nghị quyết đề nghị kết nạp Đảng</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/trang-nghi-quyet-cong-nhan'>Nghị quyết đề nghị công nhận Đảng viên chính thức</a>
                        </li>
                        <li>
                            <a href='{{URL::to("/")}}/trang-lap-quyet-dinh'>Quyết định Đảng ủy</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Khen thuởng, kỷ luật<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href='{{URL::to("/")}}/trang-khen-thuong-chi-bo'>Đảng bộ - Đề nghị khen thưởng</a>
                        </li>
                        <li>
                            <a href='{{URL::to("/")}}/trang-khen-thuong-dang-vien'>Chi bộ - Đề nghị khen thưởng</a>
                        </li>
                        <li>
                            <a href='{{URL::to("/")}}/trang-ky-luat-dang-vien'>Đề nghị kỷ luật</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Thẻ Đảng, Huy hiệu Đảng<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href='{{URL::to('/')}}/trang-cap-huy-hieu-dang'>Đề nghị cấp huy hiệu Đảng</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/trang-cap-lai-huy-hieu-dang'>Đề nghị cấp lại huy hiệu Đảng</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/trang-cap-the-moi'>Đề nghị cáp thẻ Đảng</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/trang-cap-lai-the-bi-mat'>Đề nghị cấp lại thẻ Đảng bị mất</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/trang-cap-lai-the-bi-hong'>Đề nghị cấp lại thẻ Đảng bị hỏng</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Chuyển sinh hoạt Đảng --</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href='#'>Báo cáo Đảng viên chuyển ra nước ngoài</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Đánh giá, xếp loại<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href='{{URL::to('/')}}/trang-danh-gia-dang-vien'>Đánh giá, xếp loại Đảng viên</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/trang-danh-gia-chi-bo'>Đánh giá, xếp loại Chi bộ</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Chức năng khác<span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href='{{URL::to('/')}}/trang-quan-ly-thong-bao'>Cập nhật thông báo</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/trang-tim-kiem'>Trang tìm kiếm</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </body>
    <html>
