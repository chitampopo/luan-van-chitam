
<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('public/css/styles-menu-vertical.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script-menu-vertical.js')}}"></script>
        <title>CSS MenuMaker</title>
        <script>
     
        </script>
    </head>
    <body>
        <div id='cssmenu'>
            <ul>
                <li class='active has-sub'><a href=''>Hồ sơ Đảng viên</a>
                    <ul>
                        <li>
                            <a href='{{URL::to('/')}}/danh-sach-dang-vien'>Quản lý danh sách Đảng viên và Sổ Đảng tịch</a>
                        </li>
                        <li>
                            <a href='{{URL::to('/')}}/cap-nhat-dang-vien'>Cập nhật Đảng viên</a>
                        </li>
                        <li><a href='#'>Cập nhật chức vụ và Lí lịch trích ngang</a>
                        </li>
                    </ul>
                </li>
                <li class='active has-sub'><a href='#'>Công văn</a>
                    <ul>
                        <li>
                            <a href='#'>Công văn đến</a>
                        </li>
                        <li><a href='#'>Công văn đi</a>
                        </li>
                    </ul>
                </li>
                <li class='active has-sub'><a href='#'>Đảng phí</a>
                    <ul>
                        <li>
                            <a href='#'>Báo cáo cá nhân thu, nộp Đảng phí theo tháng</a>
                        </li>
                        <li>
                            <a href='#'>Báo cáo thu, nộp Đảng phí theo tháng</a>
                        </li>
                        <li>
                            <a href='#'>Báo cáo thu, nộp Đảng phí theo quí</a>
                        </li>
                        <li>
                            <a href='#'>Báo cáo thu, nộp Đảng phí theo năm</a>
                        </li>
                        <li>
                            <a href='#'>Cập nhật các hệ số lương</a>
                        </li>
                    </ul>
                </li>
                <li class='active has-sub'><a href='#'>Kết nạp Đảng</a>
                    <ul>
                        <li>
                            <a href='#'>Danh sách cảm tình Đảng</a>
                        </li>
                        <li>
                            <a href='#'>Báo cáo tạo nguồn kết nạp Đảng viên</a>
                        </li>
                        <li>
                            <a href='#'>Giấy xin ý kiến đoàn thể, chi bộ nơi cư trú</a>
                        </li>
                        <li>
                            <a href='#'>Lập danh sách lớp bồi dưỡng kết nạp Đảng</a>
                        </li>
                        <li>
                            <a href='#'>Tổng hợp ý kiến nhận xét nơi công tác</a>
                        </li>
                        <li>
                            <a href='#'>Phiếu thẩm tra, chứng nhận lí lịch Đảng viên</a>
                        </li>
                    </ul>
                </li>
                <li class='active has-sub'><a href='#'>Công nhận Đảng viên chính thức</a>
                    <ul>
                        <li>
                            <a href='#'>Danh sách lớp bồi dưỡng Đảng viên mới</a>
                        </li>
                        <li>
                            <a href='#'>Phiếu xin YKNX ĐVDB ở Đoàn thể, Chi bộ nơi cư trú</a>
                        </li>
                        <li>
                            <a href='#'>Tổng hợp ý kiến nhận xét ĐVDB nơi công tác</a>
                        </li>
                        <li>
                            <a href='#'>Phiếu báo công nhận ĐV chính thức</a>
                        </li>
                    </ul>
                </li>
                <li class='active has-sub'><a href='#'>Nghị quyết, quyết định</a>
                    <ul>
                        <li>
                            <a href='#'>Nghị quyết đề nghị kết nạp Đảng</a>
                        </li>
                        <li>
                            <a href='#'>Nghị quyết đề nghị công nhận Đảng viên chính thức</a>
                        </li>
                        <li>
                            <a href='#'>Quyết định Đảng ủy</a>
                        </li>
                        <li>
                            <a href='#'>Quyết định Chi ủy</a>
                        </li>
                    </ul>
                </li>
                <li class='active has-sub'><a href='#'>Khen thuởng, kỷ luật</a>
                    <ul>
                        <li>
                            <a href='#'>Đảng bộ - Đề nghị khen thưởng</a>
                        </li>
                        <li>
                            <a href='#'>Chi bộ - Đề nghị khen thưởng</a>
                        </li>
                        <li>
                            <a href='#'>Đề nghị kỷ luật</a>
                        </li>
                    </ul>
                </li><li class='active has-sub'><a href='#'>Thẻ Đảng, Huy hiệu Đảng</a>
                    <ul>
                        <li>
                            <a href='#'>Đề nghị cấp huy hiệu Đảng</a>
                        </li>
                        <li>
                            <a href='#'>Đề nghị cấp lại huy hiệu Đảng</a>
                        </li>
                        <li>
                            <a href='#'>Đề nghị cáp thẻ Đảng</a>
                        </li>
                        <li>
                            <a href='#'>Đề nghị cấp lại thẻ Đảng bị mất</a>
                        </li>
                        <li>
                            <a href='#'>Đề nghị cấp lại thẻ Đảng bị hỏng</a>
                        </li>
                    </ul>
                </li>
                <li class='active has-sub'><a href='#'>Chuyển sinh hoạt Đảng</a>
                    <ul>
                        <li>
                            <a href='#'>Báo cáo Đảng viên chuyển ra nước ngoài</a>
                        </li>
                    </ul>
                </li>
                <li class='active has-sub'><a href='#'>Đánh giá, xếp loại</a>
                    <ul>
                        <li>
                            <a href='#'>Đánh giá, xếp loại Đảng viên</a>
                        </li>
                        <li>
                            <a href='#'>Đánh giá, xếp loại Chi bộ</a>
                        </li>
                    </ul>
                </li>
                <li class='active has-sub scroll' id="back-to-top"><a href="">Chức năng khác</a>
                    <ul>
                        <li class='active has-sub scroll'><a href="">Cập nhật danh mục</a>
                            <ul>
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
                        <li>
                            <a href='#'>Cập nhật thông báo</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </body>
    <html>
