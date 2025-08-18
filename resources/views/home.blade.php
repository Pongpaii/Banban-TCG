@extends('layouts.app')

@section('title', 'Banban TCG - การ์ดโปเกมอน ราคายุติธรรม')

@section('content')

    <div class="min-h-screen bg-white">
        <!-- Top Navigation -->
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

        <!-- Hero Section -->
        <section class="relative overflow-hidden bg-gradient-to-br from-yellow-50 via-yellow-100 to-white">
            <div class="max-w-6xl mx-auto px-4 py-12 lg:py-20">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <!-- Left Content -->
                    <div class="text-center lg:text-left">
                        <h1 class="text-3xl lg:text-5xl font-bold text-gray-800 mb-4 leading-tight">
                            TCG บ้านบ้าน –<br />
                            <span class="text-yellow-600">เช็คราคา หาเด็ค</span><br />
                            การ์ดโปเกม่อน
                        </h1>

                        <p class="text-lg lg:text-xl text-gray-600 mb-8 leading-relaxed">
                            ค้นหามูลค่าการ์ดได้ทันที<br />
                            รู้ราคาตลาดจากหลายแหล่ง<br />
                            สร้างเด็คในฝัน
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <a href="/scan"
                                class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-xl font-bold rounded-2xl text-gray-800 bg-yellow-400 hover:bg-yellow-500 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                <i data-lucide="camera" class="mr-4 h-7 w-7"></i>
                                สแกนการ์ดเลย
                            </a>
                        </div>
                    </div>

                    <!-- Right Illustration -->
                    <div class="flex justify-center lg:justify-end">
                        <div class="relative">
                            <div class="relative w-64 h-80">
                                <!-- Background Cards -->
                                <div
                                    class="absolute top-2 left-2 w-48 h-64 bg-gradient-to-br from-blue-200 to-blue-300 rounded-xl shadow-lg transform rotate-6">
                                </div>
                                <div
                                    class="absolute top-1 left-1 w-48 h-64 bg-gradient-to-br from-red-200 to-red-300 rounded-xl shadow-lg transform rotate-3">
                                </div>

                                <!-- Front Card -->
                                <div
                                    class="relative w-48 h-64 bg-white rounded-xl shadow-xl border-4 border-yellow-200 overflow-hidden">
                                    <img src="/images/mewex.png" alt="Mew EX" class="w-full h-full object-cover">
                                </div>

                                <!-- Scanner Effect -->
                                <div
                                    class="absolute -top-4 -right-4 w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center shadow-lg">
                                    <i data-lucide="camera" class="h-6 w-6 text-gray-800"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Actions -->
        <main class="max-w-6xl mx-auto px-4 py-12">
            <div class="grid md:grid-cols-2 gap-6 mb-16">
                <a href="/scan"
                    class="block p-8 bg-gradient-to-br from-yellow-50 to-white border-2 border-transparent hover:border-yellow-200 rounded-lg hover:shadow-lg transition-all duration-300">
                    <div class="flex items-center space-x-4">
                        <div class="w-16 h-16 bg-yellow-200 rounded-2xl flex items-center justify-center">
                            <i data-lucide="camera" class="h-8 w-8 text-gray-800"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">สแกนการ์ด</h3>
                            <p class="text-gray-600">ใช้กล้องสแกนการ์ดของคุณ</p>
                        </div>
                    </div>
                </a>

                <a href="/addcard"
                    class="block p-8 bg-gradient-to-br from-green-50 to-white border-2 border-transparent hover:border-green-200 rounded-lg hover:shadow-lg transition-all duration-300">
                    <div class="flex items-center space-x-4">
                        <div class="w-16 h-16 bg-green-200 rounded-2xl flex items-center justify-center">
                            <i data-lucide="plus" class="h-8 w-8 text-gray-800"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">เพิ่มการ์ด</h3>
                            <p class="text-gray-600">เพิ่มการ์ดใหม่เข้าสู่ระบบ</p>
                        </div>
                    </div>
                </a>

            </div>


      <!-- ADD Cards Section -->
      <div class="mb-12">
        <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-8">การ์ด ล่าสุด</h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" id="popular-cards">
            <!-- Cards will be loaded here via JavaScript -->
        </div>
    </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" id="popular-cards">
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
            


            <!-- Popular Cards Section -->
            <div class="mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-8">การ์ดยอดนิยม</h2>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" id="popular-cards">
                    <!-- Cards will be loaded here via JavaScript -->
                </div>
            </div>
        </main>
    </div>

    <script>
        // Load popular cards
        fetch('/api/cards')
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('popular-cards');
                if (data.success && data.data) {
                    container.innerHTML = data.data.map(card => `
                <a href="/card/${card.name.toLowerCase().replace(/\s+/g, '-')}" class="block bg-white border-2 border-transparent hover:border-yellow-200 rounded-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="aspect-[3/4] relative overflow-hidden bg-gray-100">
                        <img src="${card.image}" alt="${card.nameTh}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        <div class="absolute top-3 right-3">
                            <div class="px-2 py-1 bg-black bg-opacity-70 text-white text-xs font-medium rounded">
                                ${card.rarity}
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 text-lg mb-1">${card.nameTh}</h3>
                        <p class="text-sm text-gray-600 mb-2">${card.number}</p>
                        <div class="flex items-center justify-between">
                            <div class="text-xl font-bold text-yellow-600">${card.price}</div>
                            <div class="flex items-center text-green-600 text-sm">
                                <i data-lucide="trending-up" class="h-4 w-4 mr-1"></i>
                                <span>+2.3%</span>
                            </div>
                        </div>
                    </div>
                </a>
            `).join('');
                    lucide.createIcons();
                }
            })
            .catch(error => {
                console.error('Error loading cards:', error);
                document.getElementById('popular-cards').innerHTML =
                    '<p class="text-gray-500 text-center col-span-full">ไม่สามารถโหลดข้อมูลการ์ดได้</p>';
            });
    </script>
    <!-- Why Banban TCG (Compact Version) -->
    <section class="py-12">
        <div class="max-w-5xl mx-auto px-4">
            <div class="bg-blue-50 rounded-xl p-6 md:p-8 shadow-inner">
                <h2 class="text-xl md:text-2xl font-bold text-center text-gray-800 mb-8">
                    ทำไมต้องใช้ Banban TCG?
                </h2>
                <div class="grid md:grid-cols-3 gap-4 text-center">
                    <!-- กล่อง 1 -->
                    <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center">
                        <div class="text-2xl mb-2">🎯</div>
                        <h3 class="text-base font-semibold text-gray-800 mb-1">ราคาแม่นยำ</h3>
                        <p class="text-sm text-gray-600">ข้อมูลจากหลายแหล่งที่เชื่อถือได้</p>
                    </div>

                    <!-- กล่อง 2 -->
                    <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center">
                        <div class="text-2xl mb-2">⚡</div>
                        <h3 class="text-base font-semibold text-gray-800 mb-1">สแกนเร็ว</h3>
                        <p class="text-sm text-gray-600">ได้ผลลัพธ์ภายในไม่กี่วินาที</p>
                    </div>

                    <!-- กล่อง 3 -->
                    <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center">
                        <div class="text-2xl mb-2">🔧</div>
                        <h3 class="text-base font-semibold text-gray-800 mb-1">สร้างเด็ค</h3>
                        <p class="text-sm text-gray-600">เครื่องมือสร้างเด็คที่ครบครัน</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

@endsection
