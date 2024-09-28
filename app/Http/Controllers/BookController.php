<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * list all available books
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $books = Book::available();

        if ($search) {
            $books = $books->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('author', 'like', '%' . $search . '%');
            });
        }
            
        $books = $books->paginate(10);

        return view('books.index', compact('books', 'search'));
    }


    /**
     * Display the specified book.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return view('books.error');
        }

        return view('books.show', compact('book'));
    }
}
