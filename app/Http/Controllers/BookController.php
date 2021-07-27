<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    function index()
    {
        $books = Book::all();
        return view('admin.books.list', compact('books'));
    }
}
