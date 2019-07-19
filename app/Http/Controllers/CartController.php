<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Cart;
use App\Model\Product;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $cart = User::find(Auth::user()->id)->Cart()->get();
            return view('client.pages.cart',compact('cart'));
        }
        else {
            return redirect()->route('index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id =$request->idProduct;
        $cart= User::find(Auth::user()->id)->Cart()->get();
        if($cart->contains('idProduct',$id)){
            foreach($cart as $carts){
                if ($carts->idProduct == $id) {
                    $carts->quantity++;
                    $carts->total=$carts->quantity*$carts->price;
                    $carts->save();
                }
            }
        }
        else{
            $product = Product::where('id',$id)->get();
            foreach($product as $products){
                if ($products->promotional>0) {
                    $products->price = $products->price*(100-$products->promotional)/100;
                }
                $new_cart = Cart::create([
                    'name'=>$products->name,
                    'price'=>$products->price,
                    'quantity'=>1,
                    'total'=>$products->price,
                    'idUser'=>Auth::user()->id,
                    'idProduct'=>$id,
                ]);
            }
        }
        $cart= User::find(Auth::user()->id)->Cart()->get();
        return response()->json(['cart'=>$cart]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id =$request->idProduct;
        $value=$request->value;
        $cart= User::find(Auth::user()->id)->Cart()->get();
        foreach($cart as $carts){
            if ($carts->idProduct == $id) {
                $carts->quantity=$value;
                $carts->total=$carts->quantity*$carts->price;
                $carts->save();
            }
        }
        $cart= User::find(Auth::user()->id)->Cart()->get();
        $total=0;
        $i=0;
        foreach($cart as $carts){
            $total +=$carts->total;
            $i++;
        }
        $cart['count']=$i;
        $cart['total']=number_format($total,0,',','.');
        $cart['alltotal']=number_format($total+20000,0,',','.');
        $product = User::find(Auth::user()->id)->Cart()->where('idProduct',$id)->get();
        foreach($product as $pt){
            $product['total']= number_format($pt->total,0,',','.');
        }
        return response()->json(['cart'=>$cart,'product'=>$product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cart = Cart::find($request->id);
        $cart->delete();
        return redirect()->back();
    }
}
