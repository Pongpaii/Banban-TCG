<?php

use Illuminate\Support\Facades\Route;

// หน้าแรก
Route::get('/', function () {
    return view('home');
});

// หน้าต่างๆ
Route::get('/scan', function () {
    return view('scan');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/add-card', function () {
    return view('admin.add-card');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/card/{slug}', function ($slug) {
    return view('card.show', compact('slug'));
});

// API Routes
Route::prefix('api')->group(function () {
    Route::get('/cards', function () {
        return response()->json([
            'success' => true,
            'data' => [
                [
                    'id' => 1,
                    'name' => 'Kijikigisu EX',
                    'nameTh' => 'คิจิคิกิสึ ex',
                    'number' => 'SV5s-104/166',
                    'price' => '฿2,800',
                    'rarity' => 'RR',
                    'image' => '/images/kiji.png'
                ]
            ]
        ]);
    });
});

