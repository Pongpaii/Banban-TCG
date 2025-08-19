@extends('layouts.app')

@section('title', 'เพิ่มการ์ดใหม่')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- ใส่โค้ดฟอร์มที่ Step 1 ตรงนี้ -->
</div>

@endsection
