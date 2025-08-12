{{-- resources/views/about.blade.php --}}
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับ Banban TCG</title>
    @vite('resources/css/app.css') {{-- ถ้าใช้ Laravel + Vite + Tailwind --}}
</head>
<body class="min-h-screen bg-white pb-20">

    {{-- Header --}}
    <header class="bg-white border-b border-gray-100 px-4 py-4">
        <div class="max-w-md mx-auto flex items-center">
            <a href="{{ url('/') }}" class="mr-3 p-2 rounded hover:bg-gray-100">
                {{-- Arrow Left Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <h1 class="text-xl font-semibold text-gray-800">เกี่ยวกับ Banban TCG</h1>
        </div>
    </header>

    {{-- Main Content --}}
    <main class="max-w-md mx-auto px-4 py-6">
        {{-- Hero Section --}}
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-yellow-200 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="text-3xl">⚡</span>
            </div>
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Banban TCG</h2>
            <p class="text-gray-600">แอปพลิเคชันสำหรับนักสะสมการ์ดโปเกม่อนในประเทศไทย</p>
        </div>

        {{-- Mission --}}
        <div class="p-6 mb-6 bg-gradient-to-br from-yellow-50 to-yellow-100 border border-yellow-200 rounded-lg">
            <div class="flex items-start space-x-4">
                {{-- Target Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600 mt-1" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    <h3 class="font-semibold text-gray-800 mb-2">พันธกิจของเรา</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        เราต้องการช่วยให้นักสะสมการ์ดโปเกม่อนในประเทศไทยได้รับราคาที่ยุติธรรม และมีข้อมูลที่ถูกต้องในการซื้อขายการ์ด
                        เพื่อให้ชุมชนการ์ดโปเกม่อนเติบโตอย่างยั่งยืน
                    </p>
                </div>
            </div>
        </div>

        {{-- Features --}}
        <div class="mb-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">ฟีเจอร์หลัก</h3>
            <div class="space-y-4">
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-yellow-200 rounded-full flex items-center justify-center">
                        📷
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-800">สแกนการ์ดอัตโนมัติ</h4>
                        <p class="text-sm text-gray-600">สแกนการ์ดด้วยกล้องและได้ข้อมูลทันที</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-yellow-200 rounded-full flex items-center justify-center">
                        💰
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-800">ราคาตลาดแบบเรียลไทม์</h4>
                        <p class="text-sm text-gray-600">ข้อมูลราคาจากหลายแหล่งที่อัปเดตตลอดเวลา</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-yellow-200 rounded-full flex items-center justify-center">
                        📊
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-800">กราฟแนวโน้มราคา</h4>
                        <p class="text-sm text-gray-600">ติดตามการเปลี่ยนแปลงราคาในช่วง 30 วันที่ผ่านมา</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Support Info --}}
        <div class="p-6 mb-6 border rounded-lg">
            <div class="flex items-start space-x-4">
                {{-- Users Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 mt-1" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5V4H2v16h5m10 0a3 3 0 01-6 0" />
                </svg>
                <div>
                    <h3 class="font-semibold text-gray-800 mb-2">รองรับการ์ด</h3>
                    <p class="text-gray-700 text-sm mb-3">
                        ปัจจุบันรองรับการ์ดโปเกม่อน Thailand Edition ชุด Black & White Expansion Set เท่านั้น
                    </p>
                    <p class="text-xs text-gray-500">เราจะเพิ่มการรองรับชุดอื่นๆ ในอนาคต</p>
                </div>
            </div>
        </div>

        {{-- Contact --}}
        <div class="p-6 border rounded-lg">
            <div class="flex items-start space-x-4">
                {{-- Heart Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400 mt-1" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                </svg>
                <div>
                    <h3 class="font-semibold text-gray-800 mb-2">ติดต่อเรา</h3>
                    <p class="text-gray-700 text-sm mb-3">หากมีข้อเสนอแนะหรือพบปัญหาการใช้งาน สามารถติดต่อเราได้ที่</p>
                    <div class="space-y-2 text-sm">
                        <p class="text-gray-600">📧 support@banbantcg.com</p>
                        <p class="text-gray-600">📱 Facebook: Banban TCG Thailand</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Version --}}
        <div class="text-center mt-8 text-xs text-gray-400">
            เวอร์ชัน 1.0.0 | สร้างด้วยความรักสำหรับชุมชนโปเกม่อนไทย
        </div>
    </main>

    {{-- Bottom Navigation --}}
    <nav class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-100 px-4 py-4 shadow-lg">
        <div class="max-w-md mx-auto flex justify-around">
            <a href="{{ url('/') }}" class="flex flex-col items-center py-3 text-gray-600 min-w-[80px]">
                <div class="w-8 h-8 mb-2 bg-gray-200 rounded-full flex items-center justify-center">
                    {{-- Home Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 9.75L12 4l9 5.75v10.25a1.25 1.25 0 01-1.25 1.25H4.25A1.25 1.25 0 013 20V9.75z" />
                    </svg>
                </div>
                <span class="text-sm font-medium">หน้าแรก</span>
            </a>

            <a href="{{ url('/history') }}" class="flex flex-col items-center py-3 text-gray-600 min-w-[80px]">
                <div class="w-8 h-8 mb-2 bg-gray-200 rounded-full flex items-center justify-center">
                    {{-- Clock Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6l4 2m6-4a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <span class="text-sm font-medium">ประวัติ</span>
            </a>

            <a href="{{ url('/profile') }}" class="flex flex-col items-center py-3 text-gray-600 min-w-[80px]">
                <div class="w-8 h-8 mb-2 bg-gray-200 rounded-full flex items-center justify-center">
                    {{-- User Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A10.001 10.001 0 0112 2a10 10 0 016.879 15.804M15 21v-2a3 3 0 00-6 0v2" />
                    </svg>
                </div>
                <span class="text-sm font-medium">โปรไฟล์</span>
            </a>
        </div>
    </nav>

</body>
</html>
