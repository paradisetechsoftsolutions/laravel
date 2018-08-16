@extends('layouts.app')

@section('content')
<section class="sub-banner">
    <div class="feature-image">
        <img src="{{ asset('images/contact-bg.jpg') }}">
    </div>
</section>
<section class="cstm-cart-section">
      <div class="container">
          <div class="row">
              <div class="cstm-cart">
                  <h4>my cart</h4>
                  <table class="item-table">
                      <thead>
                        <tr>
                          <th>Remove</th>
                          <th>Video</th>
                          <th>Course Name</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td><a href=""><img src="images/cart-cut.png"></a></td>
                            <td class="cart=thumbnails"><img src="images/cart-item-image.jpg"></td>
                            <td>6 figure crowd funding</td>
                            <td>$200</td>
                        </tr>

                         <tr>
                            <td><a href=""><img src="images/cart-cut.png"></a></td>
                            <td class="cart=thumbnails"><img src="images/cart-item-image.jpg"></td>
                            <td>6 figure crowd funding</td>
                            <td>$200</td>
                        </tr>
                        <tr>
                            <td><a href=""><img src="images/cart-cut.png"></a></td>
                            <td class="cart=thumbnails"><img src="images/cart-item-image.jpg"></td>
                            <td>6 figure crowd funding</td>
                            <td>$200</td>
                        </tr>
                        <tr>
                            <td><a href=""><img src="images/cart-cut.png"></a></td>
                            <td class="cart=thumbnails"><img src="images/cart-item-image.jpg"></td>
                            <td>6 figure crowd funding</td>
                            <td>$200</td>
                        </tr>

                      </tbody>  
                  </table>

                   <div class="cart-total-table">
                    <table>
                      <tbody>
                          <tr>
                            <td> &nbsp; </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                              <td>
                                  <a class="total_amount" href="#">
                                      Total : $200
                                  </a>
                              </td> 
                          </tr> 
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
							<td>&nbsp;</td>
                              <td>
                                  <a class="cart_pg_btn cont_ship_btn" href="#">
                                      continue shipping
                                  </a>                             
                                  <a class="cart_pg_btn checkout_btn" href="#">
                                     Checkout
                                  </a>
                              </td> 
                          </tr> 
                      </tbody>
                      </table>
                   </div> 

              </div>
          </div>
      </div>
</section>
@endsection