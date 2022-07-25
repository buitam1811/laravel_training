<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Post</title>
</head>

<body>
    <form action="/posts/{{ $post->id }}/update" method="POST" id="update-post">
        @csrf
        @method('PUT')
        <input type="text" placeholder="Enter post's tilte" name="title" value="{{ $post->title }}">
        @error('title')
            <p class="register-error" style="color: red">{{ $message }}</p>
        @enderror
        <input type="text" placeholder="Enter post's content" name="content" value="{{ $post->content }}">
        @error('content')
            <p class="register-error" style="color: red">{{ $message }}</p>
        @enderror
    </form>
    <br>
    <button type="submit" form="update-post">Update Post</button>
</body>

</html>