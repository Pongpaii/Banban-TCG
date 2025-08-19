<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Card;

// ✅ หน้าแรก - โหลดการ์ดและส่งให้ view
Route::get('/', function () {
    $cards = Card::all();  // ดึงการ์ดทั้งหมดจาก DB
    return view('home', compact('cards'));
})->name('home');

// ✅ หน้าสแกน
Route::get('/scan', function () {
    return view('scan');
});

// ✅ หน้าล็อกอิน
Route::get('/login', function () {
    return view('login');
});

// ✅ หน้าสมัครสมาชิก
Route::get('/register', function () {
    return view('register');
})->name('register');

// ✅ หน้าแอดมิน
Route::get('/admin', function () {
    return view('admin.index');
});

// ✅ หน้าฟอร์มเพิ่มการ์ด
Route::get('/addcard', function () {
    return view('addcard');
})->name('cards.create');

// ✅ เชื่อม cardshow
use App\Http\Controllers\Api\CardController;

Route::get('/cards/{slug}', [CardController::class, 'show'])->name('cards.show');

// ✅ บันทึกการ์ดใหม่
Route::post('/cards', function (Request $request) {
    $validated = $request->validate([
        'name_th' => 'required|string|max:255',
        'name_en' => 'required|string|max:255',
        'set_name' => 'required|string|max:255',
        'rarity' => 'required|string|max:255',
        'card_number' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image_url' => 'nullable|url',
        'slug' => 'required|string|unique:cards,slug',
    ]);

    Card::create($validated);

    return redirect()->route('uploadsuccess');
})->name('cards.store');

// ✅ หน้า upload success
Route::get('/uploadsuccess', function () {
    return view('uploadsuccess');
})->name('uploadsuccess');

// ✅ หน้าประวัติ
Route::get('/history', function () {
    return view('history');
});

// ✅ หน้าโปรไฟล์
Route::get('/profile', function () {
    return view('profile');
});

// ✅ หน้าเกี่ยวกับ
Route::get('/about', function () {
    return view('about');
});

// ✅ หน้าupdatecard
Route::post('/cards/{card}/update-price', [CardController::class, 'updatePrice'])->name('cards.updatePrice');
Route::delete('/cards/{card}', [CardController::class, 'destroy'])->name('cards.destroy');

// ✅ API สำหรับการ์ด (mock data)
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
