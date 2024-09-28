<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="{{ asset('/assets/styles.css') }}"> 
</head>
<body>
    <div class="container">
        <h1>Available Books</h1>
        <form method="GET" action="{{ route('books.index') }}">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search...">
            <button type="submit">Search</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->price }}</td>
                        <td><a href="{{ route('books.show', $book->id) }}">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $books->links() }}

    </div>
</body>
</html>
