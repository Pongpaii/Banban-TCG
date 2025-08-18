<!-- resources/views/addcard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>เพิ่มการ์ดใหม่</title>
</head>
<body>
    <h1>เพิ่มการ์ดใหม่</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cards.store') }}" method="POST">
        @csrf
        <div>
            <label for="name_th">ชื่อการ์ด (ภาษาไทย):</label><br />
            <input type="text" name="name_th" id="name_th" value="{{ old('name_th') }}" required />
        </div>

        <div>
            <label for="name_en">ชื่อการ์ด (ภาษาอังกฤษ):</label><br />
            <input type="text" name="name_en" id="name_en" value="{{ old('name_en') }}" required />
        </div>

        <div>
            <label for="set_name">ชุดการ์ด:</label><br />
            <input type="text" name="set_name" id="set_name" value="{{ old('set_name') }}" required />
        </div>

        <div>
            <label for="rarity">ความหายาก:</label><br />
            <input type="text" name="rarity" id="rarity" value="{{ old('rarity') }}" required />
        </div>

        <div>
            <label for="card_number">หมายเลขการ์ด:</label><br />
            <input type="text" name="card_number" id="card_number" value="{{ old('card_number') }}" required />
        </div>

        <div>
            <label for="description">คำอธิบาย:</label><br />
            <textarea name="description" id="description" rows="3" required>{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="image_url">URL รูปภาพ:</label><br />
            <input type="url" name="image_url" id="image_url" value="{{ old('image_url') }}" required />
        </div>

        <div>
            <label for="slug">Slug (สำหรับ URL):</label><br />
            <input type="text" name="slug" id="slug" value="{{ old('slug') }}" required />
        </div>

        <br />
        <button type="submit">บันทึกการ์ด</button>
    </form>
</body>
</html>
