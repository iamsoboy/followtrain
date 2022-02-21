<?php

namespace App\Http\Controllers;

use App\Trips;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.index');
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
        //dd($request->all());
        try {
            $price = Crypt::decrypt($request->base);
            $qty = Crypt::decrypt($request->qty);
            $productId = Crypt::decrypt($request->id);
            $timeOfTravel = Crypt::decrypt($request->date);
            $ticket = Crypt::decrypt($request->ticket);

            $product = Trips::whereDeparture_time($productId)->first();

            $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) {
                return $cartItem->id === $product->id;
            });

            if ($duplicates->isNotEmpty()) {
                return redirect()->route('cart.index')->with('success_message', 'This Route has been booked already!');
            }

            Cart::add($product->id, $product->destination, $qty, $price, 0,
                ['date' => $timeOfTravel,
                    'location' => $product->location,
                    'destination' => $product->destination,
                    'ticket_class' => $ticket,
                ])
                ->associate('App\Train');

            return redirect()->route('cart.index')->with('success_message', 'Your Booking is Successful');

        } catch (DecryptException $e) {

            return back();
        }
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
        try {
            $cartId = Crypt::decrypt($id);

            Cart::remove($cartId);

            return back()->with('success_message', 'Booking has been removed!');

        } catch (DecryptException $e) {
            return back();
        }
    }
}
