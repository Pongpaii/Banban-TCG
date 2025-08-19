@extends('layouts.app')

@section('title', 'Banban TCG - ร้านการ์ดโปเกมอน')

@section('content')

<div class="min-h-screen bg-white">

    <!-- Top Navigation (เหมือนหน้า home) -->
    <nav class="bg-white border-b border-gray-100 px-4 py-3">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <!-- Logo -->
            <div>
                <h1 class="text-xl font-bold text-gray-800">TCG บ้านบ้าน</h1>
            </div>

            <!-- Main Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="flex items-center space-x-2 text-yellow-600 font-medium">
                    <i data-lucide="home" class="h-4 w-4"></i>
                    <span>หน้าแรก</span>
                </a>
                <a href="/store" class="flex items-center space-x-2 text-yellow-600 font-medium underline">
                    <i data-lucide="shopping-cart" class="h-4 w-4"></i>
                    <span>ร้านค้า</span>
                </a>
                <a href="/history" class="flex items-center space-x-2 text-gray-600 hover:text-gray-800">
                    <i data-lucide="clock" class="h-4 w-4"></i>
                    <span>ประวัติ</span>
                </a>
                <a href="/profile" class="flex items-center space-x-2 text-gray-600 hover:text-gray-800">
                    <i data-lucide="user" class="h-4 w-4"></i>
                    <span>โปรไฟล์</span>
                </a>
            </div>

            <!-- Auth Buttons -->
            <div class="flex items-center space-x-3">
                <a href="/admin"
                    class="inline-flex items-center px-3 py-2 border border-red-200 text-sm font-medium rounded-md text-red-600 bg-transparent hover:bg-red-50">
                    Admin
                </a>
                <a href="/login"
                    class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-transparent hover:bg-gray-50">
                    <i data-lucide="log-in" class="h-4 w-4 mr-2"></i>
                    เข้าสู่ระบบ
                </a>
                <a href="/register"
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-800 bg-yellow-400 hover:bg-yellow-500">
                    สมัครสมาชิก
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-12">

        <h2 class="text-3xl font-bold text-gray-800 mb-8">ร้านการ์ดโปเกมอน</h2>
        <p class="mb-8 text-gray-600">นี่คือการ์ดที่เพิ่งเพิ่มเข้ามาในร้านของเรา</p>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse ($cards as $card)
                <a href="{{ url('/card/'.$card->slug) }}" class="block bg-white border-2 border-transparent hover:border-yellow-200 rounded-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="aspect-[3/4] relative overflow-hidden bg-gray-100">
                        <img src="{{ $card->image_url }}" alt="{{ $card->name_th }}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        <div class="absolute top-3 right-3">
                            <div class="px-2 py-1 bg-black bg-opacity-70 text-white text-xs font-medium rounded">
                                {{ $card->rarity }}
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 text-lg mb-1">{{ $card->name_th }}</h3>
                        <p class="text-sm text-gray-600 mb-2">{{ $card->card_number }}</p>
                        <div class="flex items-center justify-between">
                            <div class="text-xl font-bold text-yellow-600">{{ number_format($card->current_price, 0) }} ฿</div>
                            <div class="flex items-center text-green-600 text-sm">
                                <i data-lucide="trending-up" class="h-4 w-4 mr-1"></i>
                                <span>+2.3%</span> {{-- หรือดึงข้อมูลราคาขึ้นลงจริง --}}
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <p class="col-span-full text-center text-gray-500">ไม่มีการ์ดในระบบ</p>
            @endforelse
        </div>

    </main>

    <footer class="bg-gray-50 border-t border-gray-200 mt-16">
        <div class="max-w-6xl mx-auto px-4 py-12 grid md:grid-cols-4 gap-8 text-sm text-gray-700">
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Banban TCG</h3>
                <p>แอปพลิเคชันสำหรับนักสะสมการ์ดโปเกมอนในประเทศไทย</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">เมนู</h3>
                <ul class="space-y-2">
                    <li><a href="/" class="hover:underline">หน้าแรก</a></li>
                    <li><a href="/deck" class="hover:underline">เด็ค</a></li>
                    <li><a href="/history" class="hover:underline">ประวัติ</a></li>
                    <li><a href="/profile" class="hover:underline">โปรไฟล์</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">ข้อมูล</h3>
                <ul class="space-y-2">
                    <li><a href="/about" class="hover:underline">เกี่ยวกับเรา</a></li>
                    <li><a href="/terms" class="hover:underline">ข้อกำหนดการใช้งาน</a></li>
                    <li><a href="/privacy" class="hover:underline">นโยบายความเป็นส่วนตัว</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">ติดต่อเรา</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="mailto:support@banbantcg.com" class="hover:underline">
                            📧 support@banbantcg.com
                        </a>
                    </li>
                    <li>
                        <a href="https://facebook.com/BanbanTCGThailand" target="_blank" class="hover:underline">
                            📱 Facebook: Banban TCG Thailand
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-200 py-4 text-center text-gray-500 text-sm">
            © 2024 Banban TCG. สร้างด้วยความรักสำหรับชุมชนโปเกมอนไทย
        </div>
    </footer>

</div>

@endsection
