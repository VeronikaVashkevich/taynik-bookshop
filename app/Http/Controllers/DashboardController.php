<?php


namespace App\Http\Controllers;


use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard/dashboard', [
            'books' => DB::table('books')->paginate(6)
        ]);
    }

    public function createBook()
    {
        return view('dashboard/book-form');
    }

    public function storeNewBook(Request $request)
    {
        $book = new Book;

        $book->name = $request->name;
        $book->vendor_code = $request->vendor_code;
        $book->image = $request->image;
        $book->author = $request->author;
        $book->pages = $request->pages;
        $book->price = $request->price;
        $book->price_sale = $request->price_sale;
        $book->year = $request->year;
        $book->genre = $request->genre;
        $book->description = $request->description;
        $book->age = $request->age;
        $book->length = $request->length;
        $book->width = $request->width;
        $book->cover = $request->cover;
        $book->country = $request->country;

        $book->save();

        return redirect('/dashboard')->with('status', 'Книга успешно добавлена');
    }
}
