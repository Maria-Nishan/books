<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link rel="stylesheet" href="{{ asset('/assets/styles.css') }}"> 
</head>
<body>
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <h3>By {{ $book->author }}</h3>
        <img src="{{ asset($book->image) }}" alt="{{ $book->title }}">
        <p>{{ $book->description }}</p>
        <p>{{ $book->price }}</p>
    </div>
</body>
</html>
