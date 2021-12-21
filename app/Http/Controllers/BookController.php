<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __invoke(Book $book)
    {
        $data = [
            "books" => $book->all(),
        ];

        return view('admin.books-management.books-management', $data);

    }
}
