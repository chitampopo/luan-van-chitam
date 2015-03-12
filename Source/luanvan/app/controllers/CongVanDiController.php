<?php

class CongVanDiController extends Controller {

    public function TrangCongVanDi() {
        $nhiemKyHienTai = NhiemKy::first();
        $listCongVan = CongVanDi::
                        where("NGAYGOI", ">=", $nhiemKyHienTai->TUNAM . "/01/01")
                        ->where("NGAYGOI", "<=", $nhiemKyHienTai->DENNAM . "/12/31")
                        ->orderBy('SOCVDI', 'DESC')->get();
        return View::make('so-cong-van-di')->with('listCongVan', $listCongVan);
    }

    public function ThemCongVanDi() {
        $soCongVan = Input::get("soCongVan");
        $tenCongVan = Input::get("tenCongVan");
        $ngayGoi = date("Y-m-d", strtotime(Input::get("ngayGoiCongVan")));
        $noiGoiDi = Input::get("noiGoiDi");
        $nguoiGoi = Input::get("nguoiGoiCongVan");
        $ghiChu = Input::get("ghiChu");

        $congVanDi = new CongVanDi();
        $congVanDi -> SOCVDI = $soCongVan;
        
        if (Ngay::where("NGAY", "=", $ngayGoi)->count() == 0) {
            $ngay = new Ngay();
            $ngay->NGAY = $ngayGoi;
            $ngay->save();
        }
        $congVanDi->NGAYGOI = date("Y-m-d", strtotime($ngayGoi));
        $congVanDi->TENCVDI = $tenCongVan;
        $congVanDi->NOIGOIDI = $noiGoiDi;
        $congVanDi->NGUOIGOICV = $nguoiGoi;
        $congVanDi->GHICHUCVDI = $ghiChu;
        $congVanDi->save();

        return Redirect::to('trang-so-cong-van-di');
    }

    public function KetXuatSo() {
        $nhiemKyHienTai = NhiemKy::orderBy("MANHIEMKY")->first();
        $listCongVan = CongVanDi::
                        where("NGAYGOI", ">=", $nhiemKyHienTai->TUNAM . "/01/01")
                        ->where("NGAYGOI", "<=", $nhiemKyHienTai->DENNAM . "/12/31")
                        ->orderBy('SOCVDI', 'DESC')->get();

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $header = array('size' => 16, 'bold' => true);
        $phpWord->addFontStyle('rStyle', array('bold' => true, 'size' => 14));
        $phpWord->addFontStyle('rrrStyle', array('bold' => true, 'size' => 24));
        $phpWord->addParagraphStyle('pStyle', array('align' => 'center', 'spaceAfter' => 100));
        $phpWord->addFontStyle('rrStyle', array('bold' => true, 'size' => 14, 'underline'=>\PhpOffice\PhpWord\Style\Font::UNDERLINE_SINGLE));
        $tenChiBo = null;
        $section->addText(htmlspecialchars("ĐẢNG CỘNG SẢN VIỆT NAM"), "rStyle", "pStyle");
        $section->addText(htmlspecialchars("ĐẢNG ỦY TRƯỜNG ĐH CẦN THƠ"), "rStyle", "pStyle");
        $section->addText(htmlspecialchars("ĐẢNG BỘ KHOA CNTT&TT"), "rrStyle", "pStyle");
        $section->addText(htmlspecialchars(""));
        $section->addText(htmlspecialchars(""));
        $section->addText(htmlspecialchars(""));
        $section->addText(htmlspecialchars(""));
        $section->addText(htmlspecialchars(""));
        $section->addText(htmlspecialchars(""));
        $section->addText(htmlspecialchars(""));
        $section->addText(htmlspecialchars("SỔ"), "rrrStyle", "pStyle");
        $section->addText(htmlspecialchars("CÔNG VĂN ĐI"), "rrrStyle","pStyle");
        
        $section->addPageBreak();
        
        $styleTable = array('borderSize' => 6, 'borderColor' => '006699', 'cellMargin' => 80);
        $styleFirstRow = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '66BBFF');
        $styleCell = array('valign' => 'center');
        $styleCellBTLR = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
        $styleCellColSpan = array('gridSpan' => 9);
        $cellColSpan = array('gridSpan' => 9, 'valign' => 'center');
        $cellHCentered = array('align' => 'left');
        $fontStyle = array('bold' => true, 'align' => 'center');
        $phpWord->addTableStyle('Fancy Table', $styleTable, $styleFirstRow);
        $table = $section->addTable('Fancy Table');
        $table->addRow(900);
        $table->addCell(500, $styleCell)->addText(htmlspecialchars('STT'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Số CV'), $fontStyle);
        $table->addCell(1500, $styleCell)->addText(htmlspecialchars('Tên công văn'), $fontStyle);
        $table->addCell(3000, $styleCell)->addText(htmlspecialchars('Ngày'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Nơi gởi đi'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Người gởi'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Ghi chú'), $fontStyle);
        //$table->addCell(500, $styleCellBTLR)->addText(htmlspecialchars('Ngày vào Đảng'), $fontStyle);
        $count = 1;
        foreach ($listCongVan as $congVan) {
            $table->addRow();
            $table->addCell(500)->addText(htmlspecialchars($count++));
            $table->addCell(2000)->addText(htmlspecialchars($congVan->SOCVDI));
            $table->addCell(2000)->addText(htmlspecialchars($congVan->TENCVDI));
            $table->addCell(1500)->addText(htmlspecialchars(date("d-m-Y", strtotime($congVan->NGAYGOI))));
            $table->addCell(2000)->addText(htmlspecialchars($congVan->NOIGOIDI));
            $table->addCell(2000)->addText(htmlspecialchars($congVan->NGUOIGOICV));
            $table->addCell(2000)->addText(htmlspecialchars($congVan->GHICHUCVDI));
        }
        
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $filename = "SoCongVanDi.docx";
        $objWriter->save($filename);


        // The following offers file to user on client side: deletes temp version of file
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . $filename);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename));
        flush();
        readfile($filename);
        unlink($filename); // deletes the temporary file
    }

}
