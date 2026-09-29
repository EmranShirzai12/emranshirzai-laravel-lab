<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first Laravel Page</title>
</head>
<body>
    <h1>Welcome to My Laravel Website</h1>

    <p>Student: Emran Shirzai</p>

    <p>Course: {{ $course }}</p>

    <p>This is my first Blade view.</p>
    <a href="{{ url('/about') }}">About Me</a>
</body>
</html>