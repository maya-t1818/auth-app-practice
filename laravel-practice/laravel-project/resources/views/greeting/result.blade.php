<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>挨拶</title>
    <style>
        body {
            font-family: sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .greeting {
            font-size: 24px;
            color: #007bff;
            margin: 30px 0;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>挨拶</h1>
    
    <p class="greeting">
        こんにちは、{{ $name }}さん！
    </p>
    
    {{-- 戻るリンクも名前付きルートで --}}
    <a href="{{ route('greeting.form') }}">← 戻る</a>
</body>
</html>
