<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="flex flex-col gap-2">

        <h1 class="text-2xl font-semibold">Pendataan Mahasiswa</h1>

        <a href="{{ route('student.create') }}" class="bg-blue-500 p-3 rounded text-white self-start">Tambah
            Mahasiswa</a>

        <table class="border">
            <thead>
                <tr>
                    <th class="border">No</th>
                    <th class="border">Name</th>
                    <th class="border">Student ID Number</th>
                    <th class="border">Email</th>
                    <th class="border">Majors</th>
                    <th class="border">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="border">1</th>
                    <th class="border">Muty</th>
                    <th class="border">F55122020</th>
                    <th class="border">muty@gmail.com</th>
                    <th class="border">S1 Teknik Informatika</th>
                    <th class="border">
                        <a href="{{ route("student.show", 1)}}" class="text-blue-700">Detail</a>
                        <a href="{{ route("student.edit", 1)}}" class="text-yellow-700">Edit</a>
                        <form action="{{ route('student.destroy', 1) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" onclick="return confirm('yakin?')" class="text-red-700">Hapus</button>
                        </form>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>