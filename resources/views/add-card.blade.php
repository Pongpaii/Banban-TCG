@extends('layouts.app')

@section('title', 'เพิ่มการ์ดใหม่ - Admin')

@section('content')
<div class="min-h-screen bg-gray-50">
    <header class="bg-white border-b border-gray-200 px-4 py-4">
        <div class="max-w-4xl mx-auto flex items-center">
            <a href="/admin" class="mr-3 p-2 text-gray-600 hover:text-gray-800">
                <i data-lucide="arrow-left" class="h-5 w-5"></i>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">เพิ่มการ์ดใหม่</h1>
                <p class="text-sm text-gray-600">อัปโหลดและเพิ่มการ์ดโปเกม่อนใหม่เข้าสู่ระบบ</p>
            </div>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-4 py-8">
        <div class="bg-white p-8 rounded-lg shadow">
            <h2 class="text-xl font-bold text-gray-800 mb-6">ฟอร์มเพิ่มการ์ด</h2>
            
            <form class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">ชื่อการ์ด (ไทย)</label>
                        <input type="text" placeholder="เช่น คิจิคิกิสึ ex" class="w-full h-12 px-4 border border-gray-200 rounded-xl focus:border-yellow-300 focus:ring-2 focus:ring-yellow-200 focus:outline-none" required>
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">ชื่อการ์ด (อังกฤษ)</label>
                        <input type="text" placeholder="เช่น Kijikigisu EX" class="w-full h-12 px-4 border border-gray-200 rounded-xl focus:border-yellow-300 focus:ring-2 focus:ring-yellow-200 focus:outline-none" required>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">หมายเลขการ์ด</label>
                        <input type="text" placeholder="เช่น SV5s-104/166" class="w-full h-12 px-4 border border-gray-200 rounded-xl focus:border-yellow-300 focus:ring-2 focus:ring-yellow-200 focus:outline-none" required>
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">ความหายาก</label>
                        <select class="w-full h-12 px-4 border border-gray-200 rounded-xl focus:border-yellow-300 focus:ring-2 focus:ring-yellow-200 focus:outline-none" required>
                            <option value="">เลือกความหายาก</option>
                            <option value="C">Common (C)</option>
                            <option value="U">Uncommon (U)</option>
                            <option value="R">Rare (R)</option>
                            <option value="RR">Double Rare (RR)</option>
                            <option value="RRR">Triple Rare (RRR)</option>
                            <option value="SR">Secret Rare (SR)</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">ราคาเริ่มต้น (บาท)</label>
                    <input type="number" placeholder="0" class="w-full h-12 px-4 border border-gray-200 rounded-xl focus:border-yellow-300 focus:ring-2 focus:ring-yellow-200 focus:outline-none">
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-xl">
                        <i data-lucide="save" class="h-5 w-5 mr-2 inline"></i>
                        เพิ่มการ์ดใหม่
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>
@endsection