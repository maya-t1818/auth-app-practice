<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>挨拶アプリ</title>
    <style>
        body {
            font-family: sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>挨拶アプリ</h1>
    
    {{-- フォームの送信先を名前付きルートで指定 --}}
    <form action="{{ route('greeting.greet') }}" method="POST">
        {{-- CSRFトークン（セキュリティ対策） --}}
        @csrf
        
        <div class="form-group">
            <label for="name">お名前を入力してください</label>
            <input type="text" id="name" name="name" placeholder="例: 山田太郎">
        </div>
        
        <button type="submit">送信</button>
    </form>
</body>
</html>
