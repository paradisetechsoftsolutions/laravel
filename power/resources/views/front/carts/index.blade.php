@extends('layouts.app')
@section('content')
<section class="cstm-cart-section">
  <div class="container">
    <div class="row">
      
      @include('layouts.front.alerts')

      @if(@$carts && !$carts->isEmpty())
      <div class="cstm-cart">
        <h4>{{ __('My Cart') }}</h4>
       <div class="cart_p_cont">
        <table class="item-table">
          <thead>
            <tr>
              <th>Remove</th>
              <th>Image</th>
              <th>Course Name</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            @php($total = 0)
            @foreach($carts as $cart)
            <tr>
              <td>
                <a data-method="Delete" data-confirm="Are you sure?" href="{{ route('cart.destroy', $cart->id) }}" title="Remove from cart">
                  <img src="{{ asset('images/cart-cut.png') }}">
                </a>
              </td>
              <td class="cart=thumbnails">
                @if($cart->programs->image)
                <a href="{{ route('program.preview', [$cart->programs->slug]) }}">
                  <img class="cart_table_img" src="{{ asset('uploads/programs/small/'.$cart->programs->image) }}">
                </a>
                @endif
              </td>
              <td>
                <a href="{{ route('program.preview', [$cart->programs->slug]) }}">
                {{ $cart->programs->title }}
                </a>
              </td>
              <td>${{ $cart->programs->price }}</td>
              @php($total = $total + $cart->programs->price)
            </tr>
            @endforeach
          </tbody>
        </table>


        <div class="cart_total_outr pull-right">
          <a class="total_amount" href="javascript:void(0)">
            {{ __('Total') }} : $ {{ $total }}
          </a>
        </div>

        <div class=" pull-right cart_btns_outr">
          <a class="cart_pg_btn cont_ship_btn" href="{{ route('program.index') }}">
          {{ __('Add programs') }}
          </a>
          <a class="cart_pg_btn checkout_btn" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('checkout-form').submit();">
          {{ __('Checkout') }}
          </a>
          <form id="checkout-form" action="{{ route('cart.payment') }}" method="POST" style="display: none;">
          @csrf
          </form>
        </div>
        
      </div>
      @else
      <div class="empty-cart">
        <h4>{{ __('your cart is empty, click here to continue') }}</h4>
        <a class="checkout_btn" href="{{ route('program.index') }}">
          {{ __('Add programs') }}
        </a>
      </div>
      @endif
    </div>
  </div>
  </div>
</section>
@endsection