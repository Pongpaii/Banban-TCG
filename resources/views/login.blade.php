@extends('layouts.app')

@section('title', 'เข้าสู่ระบบ - Banban TCG')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-yellow-50 to-white flex items-center justify-center p-4">
    <div class="absolute top-4 left-4">
        <a href="/" class="inline-flex items-center px-3 py-2 text-gray-600 hover:text-gray-800">
            <i data-lucide="arrow-left" class="h-5 w-5 mr-2"></i>
            กลับหน้าแรก
        </a>
    </div>

    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-xl">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">เข้าสู่ระบบ</h1>
            <p class="text-gray-600">เข้าสู่ระบบ Banban TCG</p>
        </div>

        <form class="space-y-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">อีเมล</label>
                <input type="email" placeholder="กรอกอีเมลของคุณ" class="w-full h-12 px-4 border border-gray-200 rounded-xl focus:border-yellow-300 focus:ring-2 focus:ring-yellow-200 focus:outline-none" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">รหัสผ่าน</label>
                <input type="password" placeholder="กรอกรหัสผ่านของคุณ" class="w-full h-12 px-4 border border-gray-200 rounded-xl focus:border-yellow-300 focus:ring-2 focus:ring-yellow-200 focus:outline-none" required>
            </div>

            <button type="submit" class="w-full h-12 bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-semibold rounded-xl">
                เข้าสู่ระบบ
            </button>
        </form>

        <div class="mt-8 text-center">
            <p class="text-gray-600">
                ยังไม่มีบัญชี? 
                <a href="/register" class="text-yellow-600 hover:text-yellow-700 font-medium">สมัครสมาชิก</a>
            </p>
        </div>
    </div>
</div>
@endsection