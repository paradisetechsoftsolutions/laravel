<?php

namespace power\Http\Controllers;

use power\Models\Carts;
use power\Models\Programs;
use Illuminate\Http\Request;

class CartsController extends Controller
{
	var $active = 'cart';
	var $title = 'Cart';

	/**
	* Show the application Chapters.
	*
	* @return \Illuminate\Http\Response
    * @param Request $request
	*/
	public function index()
	{
		$carts = Carts::where('users_id', auth()->user()->id)->get();
		$active = $this->active;
		$title = $this->title;
		return view('front.carts.index', compact('carts', 'active', 'title'));		
	}


	/**
	* Store a newly created resource in storage.
	*
	* @param  \power\Models\Programs $program
	* @param Request $request
	* @return void
	*/
    public function store(Request $request)
    {
        $cart = Carts::create($request->all());
        $request->session()->flash('success', "Program {$cart->programs->title} added in cart");
        return redirect()->route('cart.index');
    }


    /**
	* Remove the specified resource from storage.
	*
	* @param Request $request
	* @param  \power\Models\Carts $cart
	* @return \Illuminate\Http\Response
	* @throws \Exception
	*/
    public function destroy(Request $request, Carts $cart)
    {
        $request->session()->flash('error', "Program {$cart->programs->title} deleted from cart");
        $cart->delete();
        return redirect()->route('cart.index');
    }


	/**
	* Show the application payment.
	*
	* @return \Illuminate\Http\Response
    * @param Request $request
	*/
	public function payment(Request $request)
	{
		if($request->all()){
			$active = $this->active;
			$title = 'Payment Method';
			return view('front.carts.payment', compact('active', 'title'));
		}
		else{
			return redirect()->route('cart.index');
		}
	}

	/**
	* Show the application checkout.
	*
	* @return \Illuminate\Http\Response
    * @param Request $request
	*/
	public function checkout(Request $request)
	{
		if($request->all()){
			$active = $this->active;
			$title = 'Checkout';
			return view('front.carts.checkout', compact('active', 'title'));
		}
		else{
			return redirect()->route('cart.index');
		}
	}









}
