<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member ORM Search</title>
</head>
<body>
    <h1>MEMBER ORM SEARCH</h1>
    <form action="/members/index">
        <label for="id">ID: </label>
        <input type="number" name="id" id="id">
        <label for="phone">Phone: </label>
        <input type="text" name="phone" id="phone">
        <label for="role">Role: </label>
        <input type="text" name="role" id="role">
        <button type="submit">Search</button>
    </form>
    @foreach ($members as $member)
        <p>ID: {{ $member->id }} - Name: {{ $member->first_name }}</p>
    @endforeach
</body>
</html>