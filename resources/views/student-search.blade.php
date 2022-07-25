<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student ORM Search</title>
</head>
<body>
    <h1>STUDENT ORM SEARCH</h1>
    <form action="/students/index">
        <label for="id">ID: </label>
        <input type="number" name="id" id="id">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
        <label for="class">Class: </label>
        <input type="text" name="class" id="class">
        <button type="submit">Search</button>
    </form>
    @foreach ($students as $student)
        <p>ID: {{ $student->id }} - Name: {{ $student->name }} - Class: {{ $student->class }}</p>
    @endforeach
</body>
</html>