<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿作成</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        h1 { color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, textarea { width: 100%; max-width: 400px; padding: 8px; }
        button { padding: 10px 20px; background-color: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>投稿作成</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="form-group">
            <label>タイトル</label>
            <input type="text" name="title" required>
        </div>
        <div class="form-group">
            <label>内容</label>
            <textarea name="content" rows="5"></textarea>
        </div>
        <button type="submit">作成</button>
    </form>
    <p><a href="/posts">← 一覧に戻る</a></p>
</body>
</html>