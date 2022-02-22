<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function bookList(Request $request)
    {

        if (!empty($request->category) && !empty($request->sub_category)) {
            return view('bookList', [
                'books' => DB::table('books')->where('genre', '=', $request->category)->where('sub_category', '=', $request->sub_category)->paginate(12)
            ]);
        } else if (!empty($request->category)){
            return view('bookList', [
                'books' => DB::table('books')->where('genre', '=', $request->category)->paginate(12)
            ]);
        }

        //@TODO вернуть ошибку
//        return view('bookList', [
//            'books' => DB::table('books')->paginate(10)
//        ]);
    }

    public function book(Request $request)
    {
        return view('book', [
            'book' => DB::table('books')->where('id', '=', $request->book_id)->first(),
        ]);
    }
}
