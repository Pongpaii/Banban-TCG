@extends('layouts.app')

@section('title', 'Admin Panel - Banban TCG')

@section('content')
<div class="min-h-screen bg-gray-50">
    <header class="bg-white border-b border-gray-200 px-4 py-4">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="mr-3 p-2 text-gray-600 hover:text-gray-800">
                    <i data-lucide="arrow-left" class="h-5 w-5"></i>
                </a>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Admin Panel</h1>
                    <p class="text-sm text-gray-600">จัดการราคาการ์ดและแหล่งข้อมูล</p>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid md:grid-cols-2 gap-6 mb-8">
            <a href="/admin/add-card" class="block p-6 bg-gradient-to-br from-green-50 to-white border-2 border-transparent hover:border-green-200 rounded-lg hover:shadow-lg transition-all duration-300">
                <div class="flex items-center space-x-4">
                    <div class="w-16 h-16 bg-green-200 rounded-2xl flex items-center justify-center">
                        <i data-lucide="plus" class="h-8 w-8 text-gray-800"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">เพิ่มการ์ดใหม่</h3>
                        <p class="text-gray-600">อัปโหลดและเพิ่มการ์ดใหม่เข้าสู่ระบบ</p>
                    </div>
                </div>
            </a>

            <div class="p-6 bg-gradient-to-br from-blue-50 to-white border-2 border-blue-200 rounded-lg">
                <div class="flex items-center space-x-4">
                    <div class="w-16 h-16 bg-blue-200 rounded-2xl flex items-center justify-center">
                        <i data-lucide="upload" class="h-8 w-8 text-gray-800"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">อัปโหลดจำนวนมาก</h3>
                        <p class="text-gray-600">อัปโหลดการ์ดหลายใบพร้อมกัน</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection