@extends('layouts.app')
@section('content')
<section class="prof_outr">
	<div class="container">
		<div class="profile_outr">
			<div class="row">

				@include('layouts.front.sidebar')
				
				<div class="col-md-9">
					<div class="payment-history_outr">
						<h3>Payment History</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						<div class="table-responsive">
							<table class="my_table">
								<tbody>
									<tr>
										<th>Date</th>
										<th>Invoice</th>
										<th>Product</th>
										<th>Payment System</th>
										<th>Amount</th>
										<th>status</th>
									</tr>
									<tr>
										<td>18/8/18</td>
										<td></td>
										<td>Angular Js</td>
										<td>Debit Card</td>
										<td>Amount</td>
										<td>Confirmed</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection