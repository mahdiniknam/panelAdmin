<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ویرایش کاربر</title>
    <style>
        body { font-family: Tahoma; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { padding: 8px; width: 300px; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>ویرایش کاربر</h1>

    <form action="{{ route('update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">نام:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">ایمیل:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">ذخیره تغییرات</button>
    </form>

    <a href="{{ route('users') }}">بازگشت</a>
</body>
</html>