<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function order(Request $request)
    {
        //получаем строку с айди, делаем из нее массив через explode, удаляем пустые улементы через array_filter
        $bookIds = array_filter(explode(',', $request->books));

        $order = new Order;
        //случайно число
        $order->number = mt_rand();
        $order->totalSum = $request->totalSum;
        //айди авторизированного пользователя
        $order->user_id = Auth::id();
        $order->setCreatedAt(date('Y-m-d H:i:s'));
        $order->setUpdatedAt(date('Y-m-d H:i:s'));
        //сохраняем заказ чтоб получить его айди
        $order->save();

        //сохраняем книги заказа
        foreach ($bookIds as $id) {
            DB::table('order_book')->insert([
                'order_id' => $order->id,
                'book_id' => $id,
            ]);
        }

        return redirect()->action([HomeController::class, 'index']);
    }
}
