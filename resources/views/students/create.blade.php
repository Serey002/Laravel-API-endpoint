<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Student</h1>
    <form action="{{route('students.store')}}" method="post">
        @csrf
        @method('post')
        <label for="name">Name</label>
        <input type="text" name="name" id=""> <br> <br>

        <label for="email">Email</label>
        <input type="text" name="email"> <br> <br>

        <label for="phone">Phone</label>
        <input type="text" name="phone"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>