@extends('layouts.app')
@section('content')
<section class="checkout-section payment-sec">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<h2>payment method details</h2>
				<div class="box">
					<h3>Payment options</h3>
					<label class="rdio">One Time
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
					</label>
					<label class="rdio border-0">
						EMI (Easy Installments )
						<p>Pay in easy monthly installments from any of the options below.</p>
						<input type="radio" name="radio">
						<span class="checkmark"></span>
					</label>
					<div class="row justify-content-center">
						<div class="col-md-11">
							<div class="card rounded-0">
								<div class="card-header" id="headingThree">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed w-100 text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											No cost emi
											<div class="float-right"><i class="fa fa-minus"></i></div>
										</button>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
									<div class="card-body">
										<div class="content">
											<h4>order value <span>$250</span></h4>
											<h4>Interest (charged by Bank)<span>$50</span></h4>
											<h4 class="green">No Cost EMI Discount<span>$-50</span></h4>
											<div class="br-top">
												<h4 class="">Total EMI for 6 months<span>$250</span></h4>
											</div>
										</div>
									</div>
									<div class="d-flex m-auto"> <a class="cart_pg_btn checkout_btn m-auto" href="#">                                     choose this plan</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="cart_pg_btn checkout_btn" href="#">
				confirm order
				</a>
			</div>
		</div>
	</div>
</section>
@endsection