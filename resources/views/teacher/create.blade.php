<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <label>Name</label>
                <textarea type="text" class="form-control" rows="1" name="name" style="resize : none;" required></textarea>
                <br><label>User Name</label>
                <textarea type="text" class="form-control" rows="1" name="username" style="resize : none;" required></textarea>
                <br><label>ID</label>
                <textarea type="text" class="form-control" rows="1" name="studentId" style="resize : none;" required></textarea>
                <br><label>Password</label>
                <textarea type="text" class="form-control" rows="1" name="password" style="resize : none;" required></textarea>
                <input type="submit" name="submit" class="btn btn-outline-success" value="Create">
        </form>
</body>
</html>