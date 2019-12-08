<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Name : {{$user->name}}</p>
    <p>User Name : {{$user->username}}</p>
    <p>Student-ID : {{$user->studentId}}</p>
    <p>Password : {{$user->password}}</p>
    <a type="button" href="{{route('edit', $user->id)}}" class="btn btn-outline-primary">Edit</a>
    <a type="button" href="{{route('delete', $user->id)}}" class="btn btn-outline-danger">Delete</a>
</body>
</html>