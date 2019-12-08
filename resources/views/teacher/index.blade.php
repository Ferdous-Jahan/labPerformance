<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a type="button" href="{{route('create')}}" class="btn btn-outline-primary">Add Student</a>
    @if (count($users) > 0)
        @foreach ($users as $user)
            <h3>{{$user->name}}</a></h3>
            <a type="button" href="{{route('show', $user->id)}}" class="btn btn-outline-primary">Details</a>
        @endforeach
    @else
    <p>No Student Found</p>
    @endif
</body>
</html>

{{-- <a href="{{route('show', $user->id)}}" > --}}