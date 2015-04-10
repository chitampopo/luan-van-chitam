<?php

App::before(function($request) {
    //
});


App::after(function($request, $response) {
    //
});


Route::filter('auth', function() {
    if (Auth::guest()) {
        if (Request::ajax()) {
            return Response::make('Unauthorized', 401);
        } else {
            return Redirect::guest('login');
        }
    }
});


Route::filter('auth.basic', function() {
    return Auth::basic();
});


Route::filter('guest', function() {
    if (Auth::check())
        return Redirect::to('/');
});


Route::filter('csrf', function() {
    if (Session::token() != Input::get('_token')) {
        throw new Illuminate\Session\TokenMismatchException;
    }
});

Route::filter('filter.dangnhap', function() {
    $value = Session::get('coDangNhap');
    if ($value != "true") {
        return Redirect::to("admin");
    }
});

Route::filter('filter.chibo', function() {
    $maChiBo = Session::get("maChiBoTaiKhoan");
    if ($maChiBo == "0") {
        return View::make("trang-bao-loi")->with("thongBao", "Tài khoản của bạn không được xây dựng chức năng này");
    }
});

Route::filter('filter.admin', function() {
    $maChiBo = Session::get("maChiBoTaiKhoan");
    if ($maChiBo != "0") {
        return View::make("trang-bao-loi")->with("thongBao", "Tài khoản của bạn không được xây dựng chức năng này");
    }
});
