@extends('layouts.app')
@section('content')
<section class="prof_outr">
	<div class="container">
		<div class="checkout">
			<div class="row">
				<div class=" col-md-8 offset-2">
					<div class="checkout_inner">
						<h5>Payment Method</h5>
						<div class="form-group">
							<label>Card Name</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
						</div>
						<div class="form-group">
							<label>Card Number</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="1234 4321 1234 1234">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Card Number</label>
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="MM/YY">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>CVV</label>
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="123">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Postal Code</label>
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="12345">
								</div>
							</div>
						</div>
						<a href="" class="chkout_btn">Purchase</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection