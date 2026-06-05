<?php

use Illuminate\Http\Request;

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post('/admin/login', function (Request $request) {

    if ($request->email == "admin@gmail.com" && $request->password == "12345") {

        session(['login' => true]);

        return redirect('/admin/dashboard'); // 👈 login ke baad panel open
    }

    return back();
});

Route::get('/admin/dashboard', function () {

    if (!session('login')) {
        return redirect('/admin/login'); // 👈 login zaroori hai
    }

    return view('admin.dashboard');
});
Route::get('/logout', function () {
    session()->forget('login');
    return redirect('/admin/login');
});