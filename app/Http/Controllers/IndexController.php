<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class IndexController extends BaseController
{
    public function index()
    {
        $newestBooks = DB::table('books')->where('year', '<', date('Y-m-d'))->orderByDesc('year')->limit(3)->get();
        //@TODO выводить книги с наибольшим числом отзывов, потом может быть дабавлю рейтинг
        $recommendedBooks = DB::table('books')->limit(3)->get();
        $incomingBooks = DB::table('books')->where('year', '>', date('Y-m-d'))->limit(3)->get();

        return view('index', [
            'newestBooks' => $newestBooks,
            'recommendedBooks' => $recommendedBooks,
            'incomingBooks' => $incomingBooks,
        ]);
    }

    public function cart()
    {
        return view('cart');
    }

    public function menu()
    {
        return view('menu');
    }
}
