@extends('layouts.app')

@section('title', $card['nameTh'] . ' - Banban TCG')

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
            <div
                class="aspect-[3/4] mb-6 bg-gradient-to-br from-yellow-50 to-yellow-100 border-yellow-200 border-2 rounded-lg overflow-hidden">
                <div class="relative w-full h-full">
                    <img src="{{ $card['image'] }}" alt="{{ $card['nameTh'] }}" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Card Info -->
            <div class="mb-6">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-1">{{ $card['nameTh'] }}</h2>
                        <p class="text-gray-600">{{ $card['name'] }}</p>
                    </div>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded">
                        {{ $card['rarityTh'] }}
                    </span>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <p class="text-sm text-gray-600">หมายเลขการ์ด</p>
                        <p class="font-semibold text-gray-800">{{ $card['number'] }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">ชุด</p>
                        <p class="font-semibold text-gray-800 text-sm">{{ $card['setTh'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Current Price -->
            <div class="text-center">
                <p class="text-sm text-gray-600 mb-1">ราคาปัจจุบัน</p>
                <div class="flex items-center justify-center space-x-2">
                    <span id="currentPrice"
                        class="text-3xl font-bold text-gray-800">฿{{ number_format($card['currentPrice']) }}</span>
                    <button id="editPriceBtn" class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-sm">
                        Edit
                    </button>
                </div>

                <div id="priceEditForm" class="mt-2 hidden flex items-center justify-center space-x-2">
                    <input type="number" id="newPrice" class="border p-1 rounded w-24"
                        value="{{ $card['currentPrice'] }}">
                    <button id="savePriceBtn" class="px-2 py-1 bg-green-100 text-green-700 rounded text-sm">Save</button>
                    <button id="cancelPriceBtn" class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-sm">Cancel</button>
                </div>

                <p class="text-xs text-gray-600 mt-2">อัปเดตล่าสุด: วันนี้ 14:30</p>
            </div>
            <!-- Delete Button -->
            <div class="text-center mt-4 mb-4">
                <button id="deleteCardBtn" class="px-3 py-1 bg-red-500 text-white rounded">Delete Card</button>

            </div>



            <!-- Price Chart -->
            <div class="p-4 mb-6 bg-white border border-gray-200 rounded-lg">
                <h3 class="font-semibold text-gray-800 mb-4">กราฟราคา (30 วันที่ผ่านมา)</h3>
                <div class="h-48">
                    <canvas id="priceChart"></canvas>
                </div>
            </div>

            <!-- Price Sources -->
            <div class="p-4 mb-6 bg-white border border-gray-200 rounded-lg">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-gray-800">แหล่งข้อมูลราคา</h3>
                    <button
                        class="px-3 py-1 text-red-600 border border-red-200 hover:bg-red-50 bg-transparent text-sm rounded">
                        <i data-lucide="flag" class="h-4 w-4 mr-2 inline"></i>
                        รายงานราคาผิด
                    </button>
                </div>
                <div class="space-y-3">
                    @foreach ($card['sources'] as $source)
                        <div class="flex justify-between items-center py-2 border-b border-gray-100 last:border-b-0">
                            <span class="text-gray-700 text-sm">{{ $source['name'] }}</span>
                            <span class="font-semibold text-gray-800">{{ $source['price'] }}</span>
                        </div>
                    @endforeach
                </div>
                <p class="text-xs text-gray-500 mt-3">ราคาอาจแตกต่างกันตามสภาพการ์ดและผู้ขาย</p>
            </div>

            <!-- Back Button -->
            <div class="text-center">
                <a href="/"
                    class="inline-flex items-center px-6 py-3 bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-semibold rounded-xl">
                    <i data-lucide="arrow-left" class="h-5 w-5 mr-2"></i>
                    กลับหน้าแรก
                </a>
            </div>
        </main>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Price chart data
        const priceData = [{
                date: "1/11",
                price: {{ $card['currentPrice'] - 50 }}
            },
            {
                date: "5/11",
                price: {{ $card['currentPrice'] - 30 }}
            },
            {
                date: "10/11",
                price: {{ $card['currentPrice'] - 10 }}
            },
            {
                date: "15/11",
                price: {{ $card['currentPrice'] - 20 }}
            },
            {
                date: "20/11",
                price: {{ $card['currentPrice'] + 10 }}
            },
            {
                date: "25/11",
                price: {{ $card['currentPrice'] }}
            },
            {
                date: "30/11",
                price: {{ $card['currentPrice'] }}
            },
        ];

        // Initialize chart
        const ctx = document.getElementById('priceChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: priceData.map(d => d.date),
                datasets: [{
                    label: 'ราคา (฿)',
                    data: priceData.map(d => d.price),
                    borderColor: '#FCD34D',
                    backgroundColor: 'rgba(252, 211, 77, 0.1)',
                    borderWidth: 3,
                    pointBackgroundColor: '#FCD34D',
                    pointBorderColor: '#FCD34D',
                    pointRadius: 4,
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#666',
                            font: {
                                size: 12
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#666',
                            font: {
                                size: 12
                            }
                        }
                    }
                }
            }
        });

        document.getElementById('deleteCardBtn').addEventListener('click', () => {
    if(!confirm('คุณแน่ใจหรือไม่ว่าจะลบการ์ดนี้?')) return;

    fetch("/cards/{{ $card->id }}", {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json'
        }
    })
    .then(res => res.json())
    .then(data => {
        if(data.success){
            alert('ลบการ์ดเรียบร้อยแล้ว');
            window.location.href = '/';
        } else {
            alert('เกิดข้อผิดพลาด');
        }
    });
});

        // Initialize Lucide icons
        lucide.createIcons();
       

    </script>
@endsection
