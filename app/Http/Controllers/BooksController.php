<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $allBooks = Book::all();
        return BookResource::collection($allBooks);
    }

    public function store(BookRequest $request)
    {
        $book = new Book();
        $book->author_id = $request->input('author_id');
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->published_year = $request->input('published_year');

        $isSaved = $book->save();

        return response()->json([
            'success' => $isSaved
        ]);
    }

    public function update(BookRequest $request, Book $book)
    {
        $book->author_id = $request->input('author_id');
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->published_year = $request->input('published_year');

        $isUpdated = $book->update();

        return response()->json([
            'success' => $isUpdated
        ]);
    }

    public function delete(Request $request, Book $book)
    {
        $isDeleted = $book->delete();

        return response()->json([
            'success' => $isDeleted
        ]);
    }
}
