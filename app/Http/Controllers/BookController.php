<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
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
    function store(StoreBookRequest $request){
        $book = new Book();

    }
    function edit(){

    }
    function update(){

    }
    function delete(){

    }
}
