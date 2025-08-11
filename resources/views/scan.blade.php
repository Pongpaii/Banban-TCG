@extends('layouts.app')

@section('title', 'สแกนการ์ด - Banban TCG')

@section('content')
<div class="min-h-screen bg-white">
    <header class="bg-white border-b border-gray-100 px-4 py-4">
        <div class="max-w-md mx-auto flex items-center">
            <a href="/" class="mr-3 p-2 text-gray-600 hover:text-gray-800">
                <i data-lucide="arrow-left" class="h-5 w-5"></i>
            </a>
            <h1 class="text-xl font-semibold text-gray-800">สแกนการ์ด</h1>
        </div>
    </header>

    <main class="max-w-md mx-auto px-4 py-8">
        <div class="aspect-[4/3] mb-6 bg-gray-100 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center">
            <div class="text-center">
                <i data-lucide="camera" class="h-12 w-12 text-gray-400 mx-auto mb-3"></i>
                <p class="text-gray-600 text-sm">วางการ์ดในกรอบ</p>
            </div>
        </div>

        <div class="space-y-3">
            <button class="w-full h-14 bg-yellow-200 hover:bg-yellow-300 text-gray-800 text-lg font-semibold rounded-xl flex items-center justify-center">
                <i data-lucide="camera" class="mr-3 h-6 w-6"></i>
                เริ่มสแกน
            </button>
        </div>
    </main>
</div>
@endsection