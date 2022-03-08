<?php

namespace App\Http\Controllers;

use App\Filters\BookFilter;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function bookList(Request $request)
    {
        ini_set('memory_limit', '2048M');

        //преобразование фильтров
        $filters = $request->data;
        $inputs = explode('&', "$filters");
        $values = [];

        $covers = [];
        $years = [];
        $countries = [];

        foreach ($inputs as $input) {
            if (!empty($input)) {
                list($name, $val) = explode('=', "$input");
                $values[] = [
                    'name' => $name,
                    'value' => $val,
                ];

                if ($name == 'cover') {
                    $covers[] = $val;
                } else if ($name == 'country') {
                    $countries[] = $val;
                } else if ($name == 'year') {
                    $years[] = $val;
                }
            }
        }

        $books = [];
        if (!empty($request->category) && !empty($request->sub_category)) {
            $books =  DB::table('books')
                ->where('genre', '=', $request->category)
                ->where('sub_category', '=', $request->sub_category)
                ->when(!empty($covers), function ($q) use($covers) {
                    return $q->whereIn('cover', $covers);
                })
                ->when(!empty($years), function ($q) use($years){
                    return $q->where(function($q) use($years) {
                        foreach ($years as $year) {
                            $q->whereYear('year', '=', $year, 'or');
                        }
                    });
                })
                ->when(!empty($countries), function ($q) use($countries) {
                    return $q->whereIn('country', $countries);
                })
                ->get()->toArray();
        } else if (!empty($request->category)){
            $books = DB::table('books')
                ->where('genre', '=', $request->category)
                ->get()->toArray();
        }

        $books = array_unique($books, SORT_REGULAR);

        if ($request->ajax()) {
            return view('filtered-books', [
                'books' => $books,
            ])->render();
        }

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

    public function filterByParams(Request $request) {

        $books = [];

        $filters = $request->data;

        $books = Book::all();

        if ($request->ajax()) {
            return view('filtered-books', [
                'books' => $books,
                'filters' => $filters
            ])->render();
        }
    }

    public function book(Request $request)
    {
        $book = Book::find($request->book_id);

        return view('book', [
            'book' => $book,
            'reviews' => $book->reviews
        ]);
    }

    public function addCart(Request $request)
    {
        $book = Book::query()->where(['id' => $request->id])->first();

        $sessionId = Session::getId();

        \Cart::session($sessionId)->add([
            'id' => $book->id,
            'name' => $book->name,
            'price' => $book->price_sale ? $book->price_sale : $book->price,
            'quantity' => 1,
            'attributes' => [
                'image' => $book->image,
                'author' => $book->author,
            ],
        ]);

        return redirect()->back();
    }

    public function deleteFormCart(Request $request)
    {
        $sessionId = Session::getId();

        \Cart::session($sessionId)->remove($request->id);

        return redirect()->back();
    }

    public function search(BookFilter $bookFilter)
    {
        $books = Book::filter($bookFilter)->paginate(20);

        return view('search-result', [
            'books' => $books,
        ]);
    }
}
