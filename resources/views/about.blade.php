<!DOCTYPE html>
<html>

<head>
    <title>About</title>
</head>

<body>
    <h1>Halaman About</h1>

    <p>Bahasa pemrograman yang sedang dipelajari:</p>

    <ul>
        @foreach ($courses as $course)
            <li>{{ $course }}</li>
        @endforeach
    </ul>
</body>

</html>