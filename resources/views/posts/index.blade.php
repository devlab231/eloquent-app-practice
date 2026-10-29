<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿一覧</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; max-width: 800px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f5f5f5; }
        h1 { color: #333; }
        .btn { display: inline-block; padding: 5px 10px; margin: 2px; text-decoration: none; border: 1px solid #333; border-radius: 3px; }
        .btn-primary { background-color: #007bff; color: white; border-color: #007bff; }
        .btn-danger { background-color: #dc3545; color: white; border-color: #dc3545; }
    </style>
</head>
<body>
    <h1>投稿一覧</h1>
    <p><a href="/posts/create" class="btn btn-primary">新規作成</a></p>
    <p>全{{ count($posts) }}件の投稿があります。</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>公開日時</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->published_at?->format('Y/m/d H:i') ?? '下書き' }}</td>
                    <td>
                        <a href="/posts/{{ $post->id }}/edit" class="btn">編集</a>
                        <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>