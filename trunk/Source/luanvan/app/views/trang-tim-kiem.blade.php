<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Shortcut Icon" href="{{asset('public/images/logo.ico')}}" type="image/x-icon" />  
        <title>Trang Văn Phòng Đảng Ủy Khoa CNTT&TT - Đại Học Cần Thơ</title>
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}"/>
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap-datepicker.css')}}">
        <script src="{{asset('public/js/jquery-latest.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/script2.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/js/unslider.min.js')}}" type="text/javascript"></script>
        <link rel="stylesheet" href="{{asset('public/css/stylesMenu.css')}}">
        <!-- DataTables CSS -->
        <style>
            body{
                width: 1200px;
                margin: 20px auto;
            }
            .banner { position: relative; overflow: auto; min-height: 300px; }
            .banner li { list-style: none; height: auto }
            .banner ul li { float: left; }
            .custom-combobox {
                position: relative;
                display: inline-block;
            }
            .custom-combobox-toggle {
                position: absolute;
                top: 0;
                bottom: 0;
                margin-left: -1px;
                padding: 0;
            }
            .custom-combobox-input {
                margin: 0;
                padding: 5px 10px;
            }
        </style>
        <?php
        $queries = DB::select("select * from tinhthanh, quanhuyen, phuongxa where phuongxa.MAQH = quanhuyen.MAQH and quanhuyen.MATT = tinhthanh.MATT");
        ?>
        <script>
$(function () {
    var availableTags = [
        <?php
        foreach ($queries as $item) {
            echo "'" . $item->TENPX . " - " . $item->TENQH . " - " . $item->TENTT . "',";
        }
        ?>
    ];
    $("#tags").autocomplete({
        source: availableTags
    });
});


(function ($) {
    $.widget("custom.combobox", {
        _create: function () {
            this.wrapper = $("<span>")
                    .addClass("custom-combobox")
                    .insertAfter(this.element);

            this.element.hide();
            this._createAutocomplete();
            this._createShowAllButton();
        },
        _createAutocomplete: function () {
            var selected = this.element.children(":selected"),
                    value = selected.val() ? selected.text() : "";

            this.input = $("<input>")
                    .appendTo(this.wrapper)
                    .val(value)
                    .attr("title", "")
                    .addClass("custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left")
                    .autocomplete({
                        delay: 0,
                        minLength: 0,
                        source: $.proxy(this, "_source")
                    })
                    .tooltip({
                        tooltipClass: "ui-state-highlight"
                    });

            this._on(this.input, {
                autocompleteselect: function (event, ui) {
                    ui.item.option.selected = true;
                    this._trigger("select", event, {
                        item: ui.item.option
                    });
                },
                autocompletechange: "_removeIfInvalid"
            });
        },
        _createShowAllButton: function () {
            var input = this.input,
                    wasOpen = false;

            $("<a>")
                    .attr("tabIndex", -1)
                    .attr("title", "Show All Items")
                    .tooltip()
                    .appendTo(this.wrapper)
                    .button({
                        icons: {
                            primary: "ui-icon-triangle-1-s"
                        },
                        text: false
                    })
                    .removeClass("ui-corner-all")
                    .addClass("custom-combobox-toggle ui-corner-right")
                    .mousedown(function () {
                        wasOpen = input.autocomplete("widget").is(":visible");
                    })
                    .click(function () {
                        input.focus();

                        // Close if already visible
                        if (wasOpen) {
                            return;
                        }

                        // Pass empty string as value to search for, displaying all results
                        input.autocomplete("search", "");
                    });
        },
        _source: function (request, response) {
            var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), "i");
            response(this.element.children("option").map(function () {
                var text = $(this).text();
                if (this.value && (!request.term || matcher.test(text)))
                    return {
                        label: text,
                        value: text,
                        option: this
                    };
            }));
        },
        _removeIfInvalid: function (event, ui) {

            // Selected an item, nothing to do
            if (ui.item) {
                return;
            }

            // Search for a match (case-insensitive)
            var value = this.input.val(),
                    valueLowerCase = value.toLowerCase(),
                    valid = false;
            this.element.children("option").each(function () {
                if ($(this).text().toLowerCase() === valueLowerCase) {
                    this.selected = valid = true;
                    return false;
                }
            });

            // Found a match, nothing to do
            if (valid) {
                return;
            }

            // Remove invalid value
            this.input
                    .val("")
                    .attr("title", value + " didn't match any item")
                    .tooltip("open");
            this.element.val("");
            this._delay(function () {
                this.input.tooltip("close").attr("title", "");
            }, 2500);
            this.input.autocomplete("instance").term = "";
        },
        _destroy: function () {
            this.wrapper.remove();
            this.element.show();
        }
    });
})(jQuery);

$(function () {
    $("#combobox").combobox();
    $("#toggle").click(function () {
        $("#combobox").toggle();
    });
});


        </script>
    </head>
    <body>
        <div class="col-md-12" style="margin-left: 10px"><!-- thẻ div chứa header -->
            <img src="{{asset('public/images/banner.jpg')}}" width="90%" height="150px">
        </div><!-- hết thẻ div chứa header -->
        <div class="col-md-12" style="margin-left: 10px">
            <br>
        </div>
        <div id="cssmenu" class="col-md-12" style="margin-left: 25px">
            <ul>
                <li class='active'><a href='#'><span>Đại học Cần Thơ</span></a></li>
                <li><a href='#'><span>Đảng ủy trường</span></a></li>
                <li><a href='#'><span>Giới thiệu</span></a></li>
                <li><a href='#'><span>Tin tức, sự kiện</span></a></li>
                <li><a href='#'><span>Nghiệp vụ &nbsp;&nbsp;&nbsp;</span></a></li>
                <li><a href='#'><span>Văn bản &nbsp;&nbsp;&nbsp;</span></a></li>
                <li class='last'><a href='#'><span>Liên hệ</span></a></li>
            </ul>
        </div>
        <div class="col-md-12" style="margin-left: 10px">
            <br>
        </div>
        <div class="col-lg-4" style="margin-left: 10px; min-height: 300px">
            <div class="banner">
                <ul>
                    <li><img src="{{asset('public/images/slider1.jpg')}}"></li>
                    <li><img src="{{asset('public/images/slider2.jpg')}}"></li>
                    <li><img src="{{asset('public/images/slider3.gif')}}"></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-7 alert alert-info" style="margin-left: 20px">
            Họ tên:<br>
            <input type="text" class="form-control" id="key" name="hoTen">
            Giới tính:<br>
            <input type="radio" name="gioiTinh" value="0">Nam
            <input type="radio" name="gioiTinh" value="1">Nữ
            <div class="ui-widget">
                {{ Form::open(['url' => ['tim-kiem'], 'method' => 'post']) }}
                <label>Địa chỉ: </label>
                <select id="combobox" name="loai" class="form-control">
                    <option value="0"></option>
                    @foreach($queries as $item)
                    <option value="{{$item->MAPX}}">{{$item->TENPX . ", " . $item->TENQH . ", " . $item->TENTT}}</option>
                    @endforeach
                </select><br>
                {{ Form::submit('Tìm', array('class' => 'button expand')) }}
                {{ Form::close() }}
            </div>
        </div>

        <!-- DataTables -->

        <script type="text/javascript" charset="utf8">
            $(document).ready(function () {
                $('#table_id').DataTable();
            });
            var unslider = $('.banner').unslider(
                    );

            $('.unslider-arrow').click(function () {
                var fn = this.className.split(' ')[1];

                //  Either do unslider.data('unslider').next() or .prev() depending on the className
                unslider.data('unslider')[fn]();
            });
        </script>
    </body>
</html>

