<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts List</title>
</head>

<body>
    @if (session()->has('message'))
        <div class="alert alert-success" style="color: green">
            {{ session()->get('message') }}
        </div>
    @endif
    <h1>Posts List</h1>
    @foreach ($posts as $post)
        <div>
            <h3 style="display: inline-block">{{ $post->title }}</h3>
            <a href="/posts/{{ $post->id }}/edit">Edit</a>&nbsp
            <a href="/posts/{{ $post->id }}/show">Show Detail</a>
        </div>
    @endforeach
</body>

</html>
