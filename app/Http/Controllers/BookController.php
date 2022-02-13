<?php

namespace App\Http\Controllers;

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

    public function book()
    {
        return view('book');
    }
}
