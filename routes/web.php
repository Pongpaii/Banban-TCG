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
})->name('register');


Route::get('/admin', function () {
    return view('admin.index');
});
use App\Http\Controllers\Api\CardController;

Route::post('/cards/store', [CardController::class, 'store'])->name('cards.store');


Route::get('addcard', function () {
    return view('addcard');
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

// <CHANGE> Updated card route with proper card data matching the API
Route::get('/card/{slug}', function ($slug) {
    
    // Card data that matches your API
    $cardData = [
        
        'mew-ex' => [
            'name' => 'Mew EX',
            'nameTh' => 'มิว ex',
            'number' => 'SV2a-151/165',
            'rarity' => 'RR',
            'rarityTh' => 'ดับเบิลแรร์',
            'set' => 'Pokemon 151',
            'setTh' => 'โปเกม่อน 151',
            'currentPrice' => 3500,
            'priceChange' => '+5.2%',
            'image' => '/images/mewex.png',
            'sources' => [
                ['name' => 'Pokemon TCG Thailand', 'price' => '฿3,500'],
                ['name' => 'Card Market TH', 'price' => '฿3,450'],
                ['name' => 'TCG Facebook Group', 'price' => '฿3,600'],
            ]
        ],
        'kijikigisu-ex' => [
            'name' => 'Kijikigisu EX',
            'nameTh' => 'คิจิคิกิสึ ex',
            'number' => 'SV5s-104/166',
            'rarity' => 'RR',
            'rarityTh' => 'ดับเบิลแรร์',
            'set' => 'Cyber Judge',
            'setTh' => 'ไซเบอร์ จัดจ์',
            'currentPrice' => 2800,
            'priceChange' => '+2.3%',
            'image' => '/images/kiji.png',
            'sources' => [
                ['name' => 'Pokemon TCG Thailand', 'price' => '฿2,800'],
                ['name' => 'Card Market TH', 'price' => '฾2,750'],
                ['name' => 'TCG Facebook Group', 'price' => '฿2,900'],
            ]
        ]
        
    ];
    
    $card = $cardData[$slug] ?? null;
    
    if (!$card) {
        abort(404, 'Card not found');
    }
    
    return view('card.show', compact('card', 'slug'));
});

// <CHANGE> Updated API route to match the card data above
Route::prefix('api')->group(function () {
    Route::get('/cards', function () {
        return response()->json([
            'success' => true,
            'data' => [
                [
                    'name' => 'Mew EX',
                    'nameTh' => 'มิว ex',
                    'number' => 'SV2a-151/165',
                    'price' => '฿3,500',
                    'rarity' => 'RR',
                    'image' => '/images/mewex.png'
                ],
                [
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