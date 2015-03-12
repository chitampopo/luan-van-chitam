<?php

class CongVanDenController extends Controller {

    public function TrangCongVanDen() {
        $nhiemKyHienTai = NhiemKy::first();
        $listCongVan = CongVanDen::
                        where("NGAY", ">=", $nhiemKyHienTai->TUNAM . "/01/01")
                        ->where("NGAY", "<=", $nhiemKyHienTai->DENNAM . "/12/31")
                        ->orderBy('STTCVDEN', 'DESC')->get();
        return View::make('so-cong-van-den')->with('listCongVan', $listCongVan);
    }

    public function ThemCongVanDen() {
        $soCongVan = Input::get("soCongVan");
        $tenCongVan = Input::get("tenCongVan");
        $noiGoiDen = Input::get("noiGoiDen");
        $tapHSLuu = Input::get("tapHSLuu");
        $ghiChu = Input::get("ghiChu");

        $congVanDen = new CongVanDen();
        $congVanDen -> SOCV = $soCongVan;
        $congVanDen->NGAY = date("Y-m-d");
        if (Ngay::where("NGAY", "=", $congVanDen->NGAY)->count() == 0) {
            $ngay = new Ngay();
            $ngay->NGAY = date("Y-m-d");
            $ngay->save();
        }
        $congVanDen->TENCVDEN = $tenCongVan;
        $congVanDen->NOIGOIDEN = $noiGoiDen;
        $congVanDen->TAPHSLUU = $tapHSLuu;
        $congVanDen->GHICHUCVDEN = $ghiChu;
        $congVanDen->save();

        return Redirect::to('trang-so-cong-van-den');
    }

    public function KetXuatSo() {
        $nhiemKyHienTai = NhiemKy::orderBy("MANHIEMKY")->first();
        $listCongVan = CongVanDen::
                        where("NGAY", ">=", $nhiemKyHienTai->TUNAM . "/01/01")
                        ->where("NGAY", "<=", $nhiemKyHienTai->DENNAM . "/12/31")
                        ->orderBy('STTCVDEN', 'DESC')->get();

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
        $section->addText(htmlspecialchars("CÔNG VĂN ĐẾN"), "rrrStyle","pStyle");
        
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
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Nơi gởi đến'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Tập HS lưu'), $fontStyle);
        $table->addCell(2000, $styleCell)->addText(htmlspecialchars('Ghi chú'), $fontStyle);
        //$table->addCell(500, $styleCellBTLR)->addText(htmlspecialchars('Ngày vào Đảng'), $fontStyle);
        $count = 1;
        foreach ($listCongVan as $congVan) {
            $table->addRow();
            $table->addCell(500)->addText(htmlspecialchars($count++));
            $table->addCell(2000)->addText(htmlspecialchars($congVan->SOCV));
            $table->addCell(2000)->addText(htmlspecialchars($congVan->TENCVDEN));
            $table->addCell(1500)->addText(htmlspecialchars(date("d-m-Y", strtotime($congVan->NGAY))));
            $table->addCell(2000)->addText(htmlspecialchars($congVan->NOIGOIDEN));
            $table->addCell(2000)->addText(htmlspecialchars($congVan->TAPHSLUU));
            $table->addCell(2000)->addText(htmlspecialchars($congVan->GHICHUCVDEN));
        }
        
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $filename = "SoCongVanDen.docx";
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
