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

        //массивы для фильтрации
        $covers = [];
        $years = [];
        $countries = [];
        $stock = [];

        //формируем массивы для фильтрации по типу фильтра
        foreach ($inputs as $input) {
            if (!empty($input)) {
                list($name, $val) = explode('=', "$input");

                if ($name == 'cover') {
                    $covers[] = $val;
                } else if ($name == 'country') {
                    $countries[] = $val;
                } else if ($name == 'year') {
                    $years[] = $val;
                } else if ($name == 'inStock') {
                    $stock[] = $val;
                }
            }
        }

        $books = [];
        //@TODO чтоб избежать sql injection сделать валидацию категории и подкатегории
        if (!empty($request->category) && !empty($request->sub_category)) {
            //если у книги есть подкатегория
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
                ->when(!empty($stock), function ($q) use($stock){
                    return $q->where(function($q) use($stock) {
                        foreach ($stock as $s) {
                            if ($s == 0) {
                                $q->where('amount', '=', 0, 'or');
                                continue;
                            }
                            if ($s == 1){
                                $q->where('amount', '>=', $s, 'or');
                                continue;
                            }
                        }
                    });
                })
                ->get()->toArray();

        } else if (!empty($request->category)){
            //если у книги нет подкатегории
            $books = DB::table('books')
                ->where('genre', '=', $request->category)
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
        }

        //убираются повторяющиеся значения (хотя вроде как это не имеет смысла)
        $books = array_unique($books, SORT_REGULAR);

        //при фильтрации отправляется ajax запрос
        //и рендерится шаблон с книгами
        if ($request->ajax()) {
            return view('filtered-books', [
                'books' => $books,
            ])->render();
        }

        if (!empty($request->category) && !empty($request->sub_category)) {
            $books = DB::table('books')
                ->where('genre', '=', $request->category)
                ->where('sub_category', '=', $request->sub_category)
                ->paginate(12);

            $years = $this->getYearFilters($books);

            return view('bookList', [
                'books' => $books,
                'years' => $years,
            ]);
        } else if (!empty($request->category)){
            $books = DB::table('books')
                ->where('genre', '=', $request->category)
                ->paginate(12);
            $years = $this->getYearFilters($books);

            return view('bookList', [
                'books' => $books,
                'years' => $years,
            ]);
        }

        //@TODO вернуть ошибку
//        return view('bookList', [
//            'books' => DB::table('books')->paginate(10)
//        ]);
    }

    public function getYearFilters($books) {
        $years = [];

        foreach ($books as $book) {
            $years[] = date('Y', strtotime($book->year));
        }

        //@TODo возможно стоит так же возвращать года между, чтоб выглядело красиво (если тут 2017 и 2020, то еще воз-ть 2018 и 2019)
        return array_unique($years);
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

        $recommendations = Book::query()
            ->where('genre', $book->genre)
            ->where('id', '<>', $book->id)
            ->limit(2)
            ->get();

        return view('book', [
            'book' => $book,
            'reviews' => $book->reviews,
            'recommendations' => $recommendations,
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
