<?php

class ChucVuController extends Controller {

    public function TrangChucVu() {
        $listChucVu = ChucVu::all();
        return View::make('cap-nhat-danh-muc-chuc-vu')->with('listChucVu', $listChucVu);
    }

    public function ThemChucVu() {
        $tenchucvu = Input::get("tenchucvu");
        $chucvu = new ChucVu();
        $chucvu->TENCV = $tenchucvu;
        $chucvu->save();

        return Redirect::to('cap-nhat-danh-muc-chuc-vu');
    }

    public function TrangCapNhatChucVu() {
        $listChiBo = ChiBo::all();
        $listNhiemKy = NhiemKy::all();
        $listDangVien = DB::table('dangvien')
                ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
                ->where("dangvien.XOA", "=", "0")
                ->get();
        $listChucVu = ChucVu::all();
        return View::make("cap-nhat-chuc-vu")
                        ->with("listChiBo", $listChiBo)
                        ->with('listNhiemKy', $listNhiemKy)
                        ->with('listDangVien', $listDangVien)
                        ->with("listChucVu", $listChucVu)
                        ->with("maChiBoChon", "0")
                        ->with("maNhiemKy", "1")
                        ->with("listGiuChucVu", GiuChucVu::all())
        ;
    }

    public function LocTrangCapNhatChucVu() {
        $maChiBo = Input::get("maChiBoChon");
        $maNhiemKy = Input::get("maNhiemKy");
        $listChucVu = ChucVu::all();
        $listChiBo = ChiBo::all();
        $listNhiemKy = NhiemKy::all();
        $listGiuCV = GiuChucVu::all();
        if ($maChiBo == "0") {
            $listDangVien = DB::table('dangvien')
                    ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
                    ->where("dangvien.XOA", "=", "0")
                    ->get();
        } else {
            $listDangVien = DB::table('dangvien')
                    ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
                    ->where("dangvien.XOA", "=", "0")
                    ->where("lylich.MACB", "=", $maChiBo)
                    ->get();
        }
        return View::make("cap-nhat-chuc-vu")
                        ->with("maChiBoChon", $maChiBo)
                        ->with("maNhiemKy", $maNhiemKy)
                        ->with("listChiBo", $listChiBo)
                        ->with('listNhiemKy', $listNhiemKy)
                        ->with('listDangVien', $listDangVien)
                        ->with("listChucVu", $listChucVu)
                        ->with("listGiuChucVu", $listGiuCV)
        ;
    }

    public function ThemCapNhatChucVu() {
        $maChiBo = Input::get("maChiBoDuocChon");
        $maNhiemKy = Input::get("maNhiemKyDuocChon");
        $listMaDangVien = Input::get("listSubmit");
        $listMaDangVienNew = substr($listMaDangVien, 1);
        $array = explode(",", $listMaDangVienNew);
        $listChucVu = ChucVu::all();
        foreach ($array as $item) {
            $giucv = new GiuChucVu();
            $giucv->MANHIEMKY = $maNhiemKy;
            $giucv->MACV = Input::get("maChucVu" . $item);
            $giucv->MADANGVIEN = $item;
            if ($giucv->MACV != "0") {
                $giucv->save();
            }
        }

        Redirect::to("filter-cap-nhat-chuc-vu");
    }

    public function InLyLichTrichNgang() {
        $maNhiemKy = Input::get("maNhiemKyDuocChon");
        $nhiemKy = NhiemKy::where("MANHIEMKY", "=", $maNhiemKy)->first();
        $chucVuNguoiLap = Input::get("chucVuNguoiLap");
        $nguoiLap = Input::get("nguoiLap");
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listTheDang = TheDang::all();
        $listChiBo = ChiBo::all();
        $listDangVien = DB::table('dangvien')
                ->leftJoin('lylich', 'dangvien.MADANGVIEN', '=', 'lylich.MADANGVIEN')
                ->where("dangvien.XOA", "=", "0")
                ->get();

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->createSection(array('orientation' => 'landscape'));
        $header = array('size' => 16, 'bold' => true);
        $phpWord->addFontStyle('rStyle', array('bold' => true, 'size' => 16));
        $phpWord->addFontStyle('rrStyle', array('size' => 13));
        $phpWord->addParagraphStyle('pStyle', array('align' => 'center', 'spaceAfter' => 100));
        $phpWord->addParagraphStyle('ppStyle', array('align' => 'right', 'spaceAfter' => 100));
        $section->addText(htmlspecialchars('DANH SÁCH CHI ỦY CÁC CHI BỘ TRỰC THUỘC ĐẢNG BỘ KHOA CNTT&TT'), 'rStyle', 'pStyle');
        $section->addText(htmlspecialchars('Nhiệm kỳ ' . $nhiemKy->TUNAM . " - " . $nhiemKy->DENNAM), 'rStyle', 'pStyle');

        $styleTable = array('borderSize' => 6, 'borderColor' => '006699', 'cellMargin' => 80);
        $styleFirstRow = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '66BBFF');
        $styleCell = array('valign' => 'center');
        $styleCellBTLR = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
        $cellColSpan = array('gridSpan' => 11, 'valign' => 'center');
        $cellHCentered = array('align' => 'left');
        $fontStyle = array('bold' => true, 'align' => 'center');
        $phpWord->addTableStyle('Fancy Table', $styleTable, $styleFirstRow);
        $table = $section->addTable('Fancy Table');
        $table->addRow(900);
        $table->addCell(500, $styleCell)->addText(htmlspecialchars('STT'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Họ và tên'), $fontStyle);
        $table->addCell(1500, $styleCell)->addText(htmlspecialchars('Ngày sinh'), $fontStyle);
        $table->addCell(3000, $styleCell)->addText(htmlspecialchars('Quê quán'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Ngày vào Đảng'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Ngày chính thức'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Số lý lịch'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Số thẻ Đảng'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Chức danh, học vị'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Chức vụ trong chi ủy'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Ghi chú'), $fontStyle);
        //$table->addCell(500, $styleCellBTLR)->addText(htmlspecialchars('Ngày vào Đảng'), $fontStyle);

        $count = 1;

        foreach ($listChiBo as $chiBo) {
            $table->addRow();
            $cell2 = $table->addCell(10000, $cellColSpan);
            $textrun2 = $cell2->addTextRun($cellHCentered);
            $textrun2->addText(htmlspecialchars($chiBo->TENCB));
            //$table->addCell(2000, $styleCell)->addText($chiBo->TENCB);
            foreach ($listDangVien as $dangVien) {
                if ($dangVien->MACB == $chiBo->MACB) {
                    $table->addRow();
                    $table->addCell(500)->addText(htmlspecialchars($count++));
                    $table->addCell(2000)->addText(htmlspecialchars($dangVien->HOTENSUDUNG));
                    $table->addCell(1500)->addText(htmlspecialchars(date("d-m-Y", strtotime($dangVien->NGAYSINH))));
                    foreach ($listTinh as $tinh) {
                        foreach ($listHuyen as $huyen) {
                            foreach ($listXa as $xa) {
                                if ($xa->MAQH == $huyen->MAQH && $huyen->MATT == $tinh->MATT && $dangVien->PHU_MAPX == $xa->MAPX) {
                                    $table->addCell(3000)->addText(htmlspecialchars($xa->TENPX . ", " . $huyen->TENQH . ", " . $tinh->TENTT));
                                }
                            }
                        }
                    }
                    $table->addCell(1500)->addText(htmlspecialchars(date("d-m-Y", strtotime($dangVien->NGAYVAODANG))));
                    $table->addCell(2000)->addText(htmlspecialchars(date("d-m-Y", strtotime($dangVien->NGAYVAODANGCHINHTHUC))));
                    $table->addCell(2000)->addText(htmlspecialchars($dangVien->SOLL));
                    $checkTheDang = false;
                    foreach ($listTheDang as $theDang) {
                        if ($theDang->MADANGVIEN == $dangVien->MADANGVIEN) {
                            $table->addCell(2000)->addText(htmlspecialchars($theDang->SOTHE));
                            $checkTheDang = true;
                        }
                    }
                    if ($checkTheDang == false) {
                        $table->addCell(2000)->addText(htmlspecialchars(null));
                    }
                    $table->addCell(2000)->addText(htmlspecialchars(null));
                    $table->addCell(2000)->addText(htmlspecialchars(null));
                    $table->addCell(2000)->addText(htmlspecialchars(null));
                }
            }
        }
//        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
//        $objWriter->save('C:\QuanLyDangVien\LyLichTrichNgang.docx');
//        echo "Danh sách đảng viên đã được lưu tại 'C:\QuanLyDangVien\LyLichTrichNgang.docx'";
        
        $section->addText(htmlspecialchars("Cần Thơ, ngày ".date("d")." tháng ".date("m")." năm ".date("Y")), 'rrStyle', 'ppStyle');
        $section->addText(htmlspecialchars("TM Đảng ủy Khoa CNTT&TT"), 'rrStyle', 'ppStyle');
        $section->addText(htmlspecialchars($chucVuNguoiLap), 'rrStyle', 'ppStyle');
        $section->addText(htmlspecialchars(""), 'rrStyle', 'ppStyle');
        $section->addText(htmlspecialchars(""), 'rrStyle', 'ppStyle');
        $section->addText(htmlspecialchars(""), 'rrStyle', 'ppStyle');
        $section->addText(htmlspecialchars(""), 'rrStyle', 'ppStyle');
        $section->addText(htmlspecialchars(""), 'rrStyle', 'ppStyle');
        
        $section->addText(htmlspecialchars($nguoiLap."     "), 'rStyle', 'ppStyle');
        
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
	$filename = "DanhSachLyLichTrichNgangDangVien.docx";
	$objWriter->save($filename);
 

        // The following offers file to user on client side: deletes temp version of file
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename='.$filename);
	header('Content-Transfer-Encoding: binary');
	header('Expires: 0');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Pragma: public');
	header('Content-Length: ' . filesize($filename));
	flush();
	readfile($filename);
	unlink($filename); // deletes the temporary file
    }

    public function InLyLichTrichNgangPDF() {
        $maNhiemKy = Input::get("maNhiemKyDuocChon");
        $nhiemKy = NhiemKy::where("MANHIEMKY", "=", $maNhiemKy)->first();
        $chucVuNguoiLap = Input::get("chucVuNguoiLap");
        $nguoiLap = Input::get("nguoiLap");
        $listTinh = TinhThanh::all();
        $listHuyen = QuanHuyen::all();
        $listXa = PhuongXa::all();
        $listTheDang = TheDang::all();
        $listChiBo = ChiBo::all();
        
        //$listDangVien = DB::select('select * from dangvien, lylich where dangvien.MADANGVIEN = lylich.MADANGVIEN and dangvien.XOA = 0');
        $pdf = App::make('dompdf');
        $pdf->loadHTML(View::make("in-danh-sach-ly-lich")
                        ->with("listChiBo", $listChiBo)
                        ->with("nhiemKy",$nhiemKy)
                        ->with("chucVuNguoiLap",$chucVuNguoiLap)
                        ->with("nguoiLap", $nguoiLap)
                        ->with("listTinh",$listTinh)
                        ->with("listHuyen",$listHuyen)
                        ->with("listXa",$listXa)
                        ->with("listTheDang",$listTheDang)
        );
        return $pdf->setPaper('a3')->setOrientation('landscape')->stream();
    }
}
