<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class IndexController extends BaseController
{
    public function index()
    {
        return view('index', [
            'books' => DB::table('books')->paginate(9)
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
