function deleteRow5(row)
{
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable5').deleteRow(i);
    var xxx = document.getElementById("ktkhenthuong");
    var str = xxx.value;
    var newStr = str.substr(0, 2 * i - 2);
    newStr += str.substr(2 * i, str.length);
    //alert(newStr);
    xxx.value = newStr;
}

function insRow5()
{
    var x3 = document.getElementById('bodyPOITable5');
    var x2 = document.getElementById('POITable5');
    var new_row2 = x2.rows[1].cloneNode(true);
    var len2 = x2.rows.length;
    var dsKhenThuong = document.getElementById("dsKhenThuong");
    new_row2.cells[0].innerHTML = "<select class='form-control' name='khenthuong" + len2 + "'>" + dsKhenThuong.innerHTML + "</select>";
    new_row2.cells[1].innerHTML = "<input class='form-control' data-provide='datepicker' name='ngaykt" + len2 + "' type='text'>";
    new_row2.cells[2].innerHTML = "<input class='form-control' name='capkt" + len2 + "' type='text'>";
    new_row2.cells[3].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow5(this)'>Xóa</button>";
    x3.appendChild(new_row2);
    var xxx = document.getElementById("ktkhenthuong");
    xxx.value += "+";
    xxx.value += len2;
}

function deleteRow(row)
{
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable').deleteRow(i);
    var xxx = document.getElementById("ktcongtac");
    var str = xxx.value;
    var newStr = str.substr(0, 2 * i - 2);
    newStr += str.substr(2 * i, str.length);
    //alert(newStr);
    xxx.value = newStr;
}

function insRow()
{
    var x = document.getElementById('POITable');
    var x3 = document.getElementById('bodyPOITable');
    var new_row = x.rows[1].cloneNode(true);
    var len = x.rows.length;
    new_row.cells[0].innerHTML = "<input class='form-control' data-provide='datepicker' name='cttungay" + len + "' type='text'>";
    new_row.cells[1].innerHTML = "<input class='form-control' data-provide='datepicker' name='ctdenngay" + len + "' type='text'>";
    new_row.cells[2].innerHTML = "<input class='form-control' name='ctchucvu" + len + "' type='text'>";
    new_row.cells[3].innerHTML = "<input class='form-control' name='ctdonvi" + len + "' type='text'>";
    new_row.cells[4].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow(this)'>Xóa</button>";
    x3.appendChild(new_row);
    var xxx = document.getElementById("ktcongtac");
    xxx.value += "+";
    xxx.value += len;
}

function deleteRow1(row)
{
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable1').deleteRow(i);
    var xxx = document.getElementById("ktdaotao");
    var str = xxx.value;
    var newStr = str.substr(0, 2 * i - 2);
    newStr += str.substr(2 * i, str.length);
    xxx.value = newStr;
}

function insRow1()
{
    var x1 = document.getElementById('POITable1');
    var x3 = document.getElementById('bodyPOITable1');
    var new_row1 = x1.rows[1].cloneNode(true);
    var len1 = x1.rows.length;
    new_row1.cells[0].innerHTML = "<input class='form-control' name='dttruong" + len1 + "' type='text'>";
    new_row1.cells[1].innerHTML = "<input class='form-control' name='dtnganh" + len1 + "' type='text'>";
    new_row1.cells[2].innerHTML = "<input class='form-control' name='dttu" + len1 + "' type='text'>";
    new_row1.cells[3].innerHTML = "<input class='form-control' name='dtden" + len1 + "' type='text'>";
    new_row1.cells[4].innerHTML = "<input class='form-control' name='dthinhthuc" + len1 + "' type='text'>";
    new_row1.cells[5].innerHTML = "<input class='form-control' name='dtvanbang" + len1 + "' type='text'>";
    new_row1.cells[6].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow1(this)'>Xóa</button>";
    x3.appendChild(new_row1);
    var xxx = document.getElementById("ktdaotao");
    xxx.value += "+";
    xxx.value += len1;
}

function deleteRow2(row)
{
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable2').deleteRow(i);
    var xxx = document.getElementById("ktnuocngoai");
    var str = xxx.value;
    var newStr = str.substr(0, 2 * i - 2);
    newStr += str.substr(2 * i, str.length);
    xxx.value = newStr;
}

function insRow2()
{
    var x2 = document.getElementById('POITable2');
    var new_row2 = x2.rows[1].cloneNode(true);
    var len2 = x2.rows.length;
    var x3 = document.getElementById('bodyPOITable2');
    new_row2.cells[0].innerHTML = "<input class='form-control' data-provide='datepicker' name='nntungay" + len2 + "' type='text'>";
    new_row2.cells[1].innerHTML = "<input class='form-control' data-provide='datepicker' name='nndenngay" + len2 + "' type='text'>";
    new_row2.cells[2].innerHTML = "<input class='form-control' name='nnquocgia" + len2 + "' type='text'>";
    new_row2.cells[3].innerHTML = "<input class='form-control' name='nnlido" + len2 + "' type='text'>";
    new_row2.cells[4].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow2(this)'>Xóa</button>";
    x3.appendChild(new_row2);
    var xxx = document.getElementById("ktnuocngoai");
    xxx.value += "+";
    xxx.value += len2;
}
function deleteRow3(row)
{
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable3').deleteRow(i);
    var xxx = document.getElementById("ktnguoithan");
    var str = xxx.value;
    var newStr = str.substr(0, 2 * i - 2);
    newStr += str.substr(2 * i, str.length);
    xxx.value = newStr;
}

function insRow3()
{
    var x2 = document.getElementById('POITable3');
    var new_row2 = x2.rows[1].cloneNode(true);
    var len2 = x2.rows.length;
    var x3 = document.getElementById('bodyPOITable3');
    new_row2.cells[0].innerHTML = "<input class='form-control' name='ntquanhe" + len2 + "' type='text'>";
    new_row2.cells[1].innerHTML = "<input class='form-control' name='nthoten" + len2 + "' type='text'>";
    new_row2.cells[2].innerHTML = "<input class='form-control' name='ntnamsinh" + len2 + "' type='text'>";
    new_row2.cells[3].innerHTML = "<input class='form-control' name='ntcutru" + len2 + "' type='text'>";
    new_row2.cells[4].innerHTML = "<input class='form-control' name='ntnghenghiep" + len2 + "' type='text'>";
    new_row2.cells[5].innerHTML = "<input class='form-control' name='ntddct" + len2 + "' type='text'>";
    new_row2.cells[6].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow3(this)'>Xóa</button>";
    x3.appendChild(new_row2);
    var xxx = document.getElementById("ktnguoithan");
    xxx.value += "+";
    xxx.value += len2;
}
function deleteRow4(row)
{
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable4').deleteRow(i);
    var xxx = document.getElementById("ktngoaingu");
    var str = xxx.value;
    var newStr = str.substr(0, 2 * i - 2);
    newStr += str.substr(2 * i, str.length);
    xxx.value = newStr;
}

function insRow4()
{
    var x2 = document.getElementById('POITable4');
    var new_row2 = x2.rows[1].cloneNode(true);
    var len2 = x2.rows.length;
    var x3 = document.getElementById('bodyPOITable4');
    var dsNgoaiNgu = document.getElementById("dsNgoaiNgu");
    new_row2.cells[0].innerHTML = "<select class='form-control' name='trinhdongoaingu" + len2 + "'>" + dsNgoaiNgu.innerHTML + "</select>";
    new_row2.cells[1].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow4(this)'>Xóa</button>";
    x3.appendChild(new_row2);
    var xxx = document.getElementById("ktngoaingu");
    xxx.value += "+";
    xxx.value += len2;
}

function deleteRow6(row)
{
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable6').deleteRow(i);
    var xxx = document.getElementById("kthuyhieu");
    var str = xxx.value;
    var newStr = str.substr(0, 2 * i - 2);
    newStr += str.substr(2 * i, str.length);
    xxx.value = newStr;
}

function insRow6()
{
    var x2 = document.getElementById('POITable6');
    var new_row2 = x2.rows[1].cloneNode(true);
    var len2 = x2.rows.length;
    var x3 = document.getElementById('bodyPOITable6');
    new_row2.cells[0].innerHTML = "<input class='form-control' name='huyhieu" + len2 + "' type='text'>";
    new_row2.cells[1].innerHTML = "<input class='form-control' data-provide='datepicker' name='ngaykt" + len2 + "' type='text'>";
    new_row2.cells[2].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow6(this)'>Xóa</button>";
    x3.appendChild(new_row2);
    var xxx = document.getElementById("kthuyhieu");
    xxx.value += "+";
    xxx.value += len2;
}

function deleteRow7(row)
{
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable7').deleteRow(i);
    var xxx = document.getElementById("ktkyluat");
    var str = xxx.value;
    var newStr = str.substr(0, 2 * i - 2);
    newStr += str.substr(2 * i, str.length);
    xxx.value = newStr;
}

function insRow7()
{
    var x2 = document.getElementById('POITable7');
    var new_row2 = x2.rows[1].cloneNode(true);
    var len2 = x2.rows.length;
    var dsKyLuat = document.getElementById("dsKyLuat");
    var x3 = document.getElementById('bodyPOITable7');
    new_row2.cells[0].innerHTML = "<select class='form-control' name='kyluat" + len2 + "'>" + dsKyLuat.innerHTML + "</select>";
    new_row2.cells[1].innerHTML = "<input class='form-control'  name='ngaykl" + len2 + "' type='text'>";
    new_row2.cells[2].innerHTML = "<input class='form-control' name='lydokl" + len2 + "' type='text'>";
    new_row2.cells[3].innerHTML = "<button  class='form-control' type='button' onclick='deleteRow7(this)'>Xóa</button>";
    x3.appendChild(new_row2);
    var xxx = document.getElementById("ktkyluat");
    xxx.value += "+";
    xxx.value += len2;
}
