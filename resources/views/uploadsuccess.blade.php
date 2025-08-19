@extends('layouts.app')

@section('title', 'บันทึกสำเร็จ - Banban TCG')

@section('content')
<div class="min-h-screen bg-white">
    <!-- Section: Confirmation -->
    <section class="max-w-4xl mx-auto px-4 py-16 text-center">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">🎉 บันทึกการ์ดเรียบร้อยแล้ว!</h2>
            <p class="text-lg text-gray-600">คุณสามารถเพิ่มการ์ดใหม่หรือกลับไปที่หน้าแรกได้เลย</p>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('cards.create') }}"
                class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-lg font-medium rounded-xl text-gray-800 bg-yellow-400 hover:bg-yellow-500 shadow hover:shadow-lg transition-all duration-300">
                <i data-lucide="plus" class="mr-2 h-5 w-5"></i>
                เพิ่มการ์ดใหม่
            </a>

            <a href="{{ route('home') }}"
                class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-lg font-medium rounded-xl text-gray-700 bg-white hover:bg-gray-50 shadow transition-all duration-300">
                <i data-lucide="home" class="mr-2 h-5 w-5"></i>
                กลับสู่หน้า Home
            </a>
        </div>
    </section>
</div>
@endsection
