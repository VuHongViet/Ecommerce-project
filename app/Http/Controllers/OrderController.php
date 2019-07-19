<?php

namespace App\Http\Controllers;

use App\Model\Order;
use App\Model\Cart;
use App\Model\User;
use App\Model\OrderDetail;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;

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
    public function store(OrderRequest $request)
    {
        if (Auth::check()) {
            $cart = User::find(Auth::user()->id)->Cart()->get();
            $order = Order::create([
                'name'=>$request->name,
                'gender'=>$request->gt,
                'address'=>$request->address,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'idUser'=>Auth::user()->id,
            ]);
            foreach($cart as $item){
                $order_detail=  OrderDetail::create([
                    'quantity'=>$item->quantity,
                    'price'=>$item->price,
                    'total'=>$item->total,
                    'idOrder'=>$order->id,
                    'idProduct'=>$item->idProduct,
                ]);
            }
            $cart->each->delete();
           return view('client.pages.checkout');
        }
        else {
            return redirect()->route('index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
