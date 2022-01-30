<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class IndexController extends BaseController
{
    public function index() {
        return view('index');
    }

    public function bookList()
    {
        return view('bookList');
    }

    public function book()
    {
        return view('book');
    }

    public function cart()
    {
        return view('cart');
    }
}
