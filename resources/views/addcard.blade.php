@extends('layouts.app')

@section('title', 'เพิ่มการ์ดใหม่')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">

    <div class="bg-white shadow-lg rounded-lg p-6">
        {{-- หัวเรื่อง --}}
        <h2 class="text-2xl font-bold mb-6 text-gray-800">เพิ่มการ์ดใหม่</h2>

        {{-- ปุ่มย้อนกลับ --}}
        <div class="mb-6">
            <a href="{{ route('home') }}" class="inline-block text-sm text-yellow-500 font-semibold hover:underline">
                ← กลับหน้าหลัก
            </a>
        </div>

        {{-- แสดงข้อความบันทึกสำเร็จ --}}
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-6 shadow">
                {{ session('success') }}
            </div>
        @endif

        {{-- แสดง error validation --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded mb-6 shadow">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cards.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name_th" class="block font-semibold mb-1 text-gray-700">ชื่อการ์ด (ภาษาไทย):</label>
                <input
                    type="text"
                    name="name_th"
                    id="name_th"
                    value="{{ old('name_th') }}"
                    required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                />
            </div>

            <div>
                <label for="name_en" class="block font-semibold mb-1 text-gray-700">ชื่อการ์ด (ภาษาอังกฤษ):</label>
                <input
                    type="text"
                    name="name_en"
                    id="name_en"
                    value="{{ old('name_en') }}"
                    required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                />
            </div>

            <div>
                <label for="set_name" class="block font-semibold mb-1 text-gray-700">ชุดการ์ด:</label>
                <input
                    type="text"
                    name="set_name"
                    id="set_name"
                    value="{{ old('set_name') }}"
                    required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                />
            </div>

            <div>
                <label for="rarity" class="block font-semibold mb-1 text-gray-700">ความหายาก:</label>
                <input
                    type="text"
                    name="rarity"
                    id="rarity"
                    value="{{ old('rarity') }}"
                    required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                />
            </div>

            <div>
                <label for="card_number" class="block font-semibold mb-1 text-gray-700">หมายเลขการ์ด:</label>
                <input
                    type="text"
                    name="card_number"
                    id="card_number"
                    value="{{ old('card_number') }}"
                    required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                />
            </div>

            <div>
                <label for="description" class="block font-semibold mb-1 text-gray-700">คำอธิบาย:</label>
                <textarea
                    name="description"
                    id="description"
                    rows="4"
                    required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                >{{ old('description') }}</textarea>
            </div>

            <div>
                <label for="image_url" class="block font-semibold mb-1 text-gray-700">URL รูปภาพ:</label>
                <input
                    type="url"
                    name="image_url"
                    id="image_url"
                    value="{{ old('image_url') }}"
                    required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                />
            </div>

            <div>
                <label for="slug" class="block font-semibold mb-1 text-gray-700">Slug (สำหรับ URL):</label>
                <input
                    type="text"
                    name="slug"
                    id="slug"
                    value="{{ old('slug') }}"
                    required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                />
            </div>

            <div>
                <button
                    type="submit"
                    class="bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-semibold rounded px-6 py-2 transition"
                >
                    บันทึกการ์ด
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
