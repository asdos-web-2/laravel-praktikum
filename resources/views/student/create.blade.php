<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Student Data</title>
</head>

<body>
    <h1 class="text-2xl font-semibold">Add Student</h1>

    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        @method("POST")
        <label for="">Name</label>
        <input type="text" name="name" class="border">
        <br>
        <label for="">Student Number</label>
        <input type="text" name="student_id_number" class="border">
        <br>
        <label for="">Email</label>
        <input type="text" name="email" class="border">
        <br>
        <label for="">Majors</label>
        <input type="text" name="majors" class="border">
        <br>
        <button type="submit" class="bg-blue-500 p-3 rounded text-white">Save</button>
    </form>

</body>

</html>