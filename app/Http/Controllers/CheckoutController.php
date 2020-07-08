<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Cart::count() <= 0) {
            return redirect()->route('nos-programmes');
        }

        Stripe::setApiKey('sk_test_51H2LKjLH5WwIy3sFx9DNn8zS0JAT82xhm1twACGP3XLTNZKmVsTPBr9AuElRUvofML0beB7hhZ9G6I5BDC19ZzUx00dSVlHNYm');

        $intent = PaymentIntent::create([
            'amount' => Cart::total()*100,
            'currency' => 'eur',
        ]);

        $clientSecret = Arr::get($intent, 'client_secret');

        return view('checkout.index', ['clientSecret' => $clientSecret]);
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
        Cart::destroy();

        $data = $request->json()->all();

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
