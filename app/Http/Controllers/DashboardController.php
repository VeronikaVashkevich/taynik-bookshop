<?php


namespace App\Http\Controllers;


use App\Models\Book;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard/dashboard', [
            'books' => DB::table('books')->orderBy('name', 'ASC')->paginate(20)
        ]);
    }

    public function createBook()
    {
        return view('dashboard/book-form', [
            'categories' => DB::table('categories')->get()
        ]);
    }

    /**
     * @param Book $book
     * @return Application|Factory|View
     */
    public function edit(Book $book)
    {
        return view('dashboard/edit-book-form', [
            'book' => $book,
            'categories' => DB::table('categories')->get(),
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $oldImage = $book->image;

        $book->name = $request->name;
        $book->vendor_code = $request->vendor_code;
        $book->author = $request->author;
        $book->pages = $request->pages;
        $book->price = $request->price;
        $book->price_sale = $request->price_sale;
        $book->year = $request->year;
        $book->genre = $request->genre;
        $book->sub_category = $request->sub_category;
        $book->description = $request->description;
        $book->age = $request->age;
        $book->length = $request->length;
        $book->width = $request->width;
        $book->cover = $request->cover;
        $book->country = $request->country;
        $book->amount = $request->amount;

        if ($request->file('image')) {
            $uploadFileUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
                'folder' => 'covers',
            ])->getSecurePath();
            $book->image = $uploadFileUrl;
        } else {
            $book->image = $oldImage;
        }

        $book->save();

        return redirect('/dashboard')->with('status', 'Книга успешно обновлена');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/dashboard')->with('status', 'Книга успешно удалена');
    }

    public function storeNewBook(Request $request)
    {
        $book = new Book;

        $book->name = $request->name;
        $book->vendor_code = $request->vendor_code;
        $book->author = $request->author;
        $book->pages = $request->pages;
        $book->price = $request->price;
        $book->price_sale = $request->price_sale;
        $book->year = $request->year;
        $book->genre = $request->genre;
        $book->sub_category = $request->sub_category;
        $book->description = $request->description;
        $book->age = $request->age;
        $book->length = $request->length;
        $book->width = $request->width;
        $book->cover = $request->cover;
        $book->country = $request->country;
        $book->amount = $request->amount;

        $uploadFileUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
            'folder' => 'covers',
        ])->getSecurePath();
        $book->image = $uploadFileUrl;

        $book->save();

        return redirect('/dashboard')->with('status', 'Книга успешно добавлена');
    }
}
