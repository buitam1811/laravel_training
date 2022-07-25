<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Detail</title>
</head>
<body>
    <h1>POST DETAIL</h1>
    <br>
    <h3>Title: </h3>
    <p>{{ $post->title }}</p>
    <h3>Content: </h3>
    <p>{{ $post->content }}</p>
    <h3>Comments: </h3>
    @foreach($comments as $comment)
        <p>{{ $comment->content_comment }}</p>
    @endforeach
</body>
</html>