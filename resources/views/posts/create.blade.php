<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>

<body>
    <form action="/posts/store" method="POST" id="create-post">
        @csrf
        <input type="text" placeholder="Enter post's tilte" name="title">
        @error('title')
            <p class="register-error" style="color: red">{{ $message }}</p>
        @enderror
        <input type="text" placeholder="Enter post's content" name="content">
        @error('content')
            <p class="register-error" style="color: red">{{ $message }}</p>
        @enderror
    </form>
    <br>
    <button type="submit" form="create-post">Create Post</button>
</body>

</html>
