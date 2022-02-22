<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function bookList()
    {
        return view('bookList', [
            'books' => DB::table('books')->paginate(10)
        ]);
    }

    public function book(Request $request)
    {
        return view('book', [
            'book' => DB::table('books')->where('id', '=', $request->book_id)->first(),
        ]);
    }
}
