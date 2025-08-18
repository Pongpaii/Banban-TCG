@extends('layouts.app')

@section('title', 'สมัครสมาชิก - Banban TCG')

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
            <h1 class="text-3xl font-bold text-gray-800 mb-2">สมัครสมาชิก</h1>
            <p class="text-gray-600">สร้างบัญชีผู้ใช้ใหม่กับ Banban TCG</p>
        </div>

        <form class="space-y-6" method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label class="block text-gray-700 font-medium mb-2">ชื่อผู้ใช้</label>
                <input name="name" type="text" placeholder="กรอกชื่อผู้ใช้ของคุณ" class="w-full h-12 px-4 border border-gray-200 rounded-xl focus:border-yellow-300 focus:ring-2 focus:ring-yellow-200 focus:outline-none" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">อีเมล</label>
                <input name="email" type="email" placeholder="กรอกอีเมลของคุณ" class="w-full h-12 px-4 border border-gray-200 rounded-xl focus:border-yellow-300 focus:ring-2 focus:ring-yellow-200 focus:outline-none" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">รหัสผ่าน</label>
                <input name="password" type="password" placeholder="ตั้งรหัสผ่าน" class="w-full h-12 px-4 border border-gray-200 rounded-xl focus:border-yellow-300 focus:ring-2 focus:ring-yellow-200 focus:outline-none" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">ยืนยันรหัสผ่าน</label>
                <input name="password_confirmation" type="password" placeholder="ยืนยันรหัสผ่านอีกครั้ง" class="w-full h-12 px-4 border border-gray-200 rounded-xl focus:border-yellow-300 focus:ring-2 focus:ring-yellow-200 focus:outline-none" required>
            </div>

            <button type="submit" class="w-full h-12 bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-semibold rounded-xl">
                สมัครสมาชิก
            </button>
        </form>

        <div class="mt-8 text-center">
            <p class="text-gray-600">
                มีบัญชีแล้ว? 
                <a href="/login" class="text-yellow-600 hover:text-yellow-700 font-medium">เข้าสู่ระบบ</a>
            </p>
        </div>
    </div>
</div>
@endsection
