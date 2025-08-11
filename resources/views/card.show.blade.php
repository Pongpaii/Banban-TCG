@extends('layouts.app')

@section('title', 'รายละเอียดการ์ด - Banban TCG')

@section('content')
<div class="min-h-screen bg-white pb-20">
    <!-- Header -->
    <header class="bg-white border-b border-gray-100 px-4 py-4">
        <div class="max-w-md mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="mr-3 p-2 text-gray-600 hover:text-gray-800">
                    <i data-lucide="arrow-left" class="h-5 w-5"></i>
                </a>
                <h1 class="text-xl font-semibold text-gray-800">รายละเอียดการ์ด</h1>
            </div>
            <div class="flex space-x-2">
                <button class="p-2 text-gray-600 hover:text-gray-800">
                    <i data-lucide="heart" class="h-5 w-5"></i>
                </button>
                <button class="p-2 text-gray-600 hover:text-gray-800">
                    <i data-lucide="share-2" class="h-5 w-5"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-md mx-auto px-4 py-6">
        <!-- Card Image -->
        <div class="aspect-[3/4] mb-6 bg-gradient-to-br from-yellow-50 to-yellow-100 border-yellow-200 border-2 rounded-lg overflow-hidden">
            <div class="relative w-full h-full">
                <img src="/images/kiji.png" alt="การ์ด" class="w-full h-full object-cover" id="card-image">
            </div>
        </div>

        <!-- Card Info -->
        <div class="mb-6">
            <div class="flex items-start justify-between mb-3">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-1" id="card-name-th">กำลังโหลด...</h2>
                    <p class="text-gray-600" id="card-name-en">Loading...</p>
                </div>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded" id="card-rarity">-</span>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <p class="text-sm text-gray-600">หมายเลขการ์ด</p>
                    <p class="font-semibold text-gray-800" id="card-number">-</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">ชุด</p>
                    <p class="font-semibold text-gray-800 text-sm" id="card-set">-</p>
                </div>
            </div>
        </div>

        <!-- Current Price -->
        <div class="p-6 mb-6 bg-gradient-to-r from-yellow-50 to-yellow-100 border-yellow-200 border-2 rounded-lg">
            <div class="text-center">
                <p class="text-sm text-gray-600 mb-1">ราคาปัจจุบัน</p>
                <div class="flex items-center justify-center space-x-2">
                    <span class="text-3xl font-bold text-gray-800" id="card-price">฿0</span>
                    <span class="px-2 py-1 bg-green-100 text-green-700 border-green-200 border rounded text-sm">
                        <i data-lucide="trending-up" class="h-3 w-3 mr-1 inline"></i>
                        +2.3%
                    </span>
                </div>
                <p class="text-xs text-gray-600 mt-2">อัปเดตล่าสุด: วันนี้ 14:30</p>
            </div>
        </div>

        <!-- Price Sources -->
        <div class="p-4 mb-6 bg-white border border-gray-200 rounded-lg">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-semibold text-gray-800">แหล่งข้อมูลราคา</h3>
                <button class="px-3 py-1 text-red-600 border border-red-200 hover:bg-red-50 bg-transparent text-sm rounded">
                    <i data-lucide="flag" class="h-4 w-4 mr-2 inline"></i>
                    รายงานราคาผิด
                </button>
            </div>
            <div class="space-y-3" id="price-sources">
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-gray-700 text-sm">กำลังโหลด...</span>
                    <span class="font-semibold text-gray-800">฿0</span>
                </div>
            </div>
            <p class="text-xs text-gray-500 mt-3">ราคาอาจ