@extends('layouts.app')
@section('content')
<section class="home-video">
	<div class="vid-sec">
		<iframe width="100%" height="100%" src="{{ $program->short_video }}?autoplay=1" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="vid-caption">
		<h2>{{ $program->title }}</h2>
	</div>
</section>

<section class="main-course">
	<div class="container">
		<div class="crs-heading">
			<h2>main course</h2>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 col-md-6">
				<div class="csr-image">
					@if($program->image)
					<img src="{{ asset('uploads/programs/'.$program->image) }}">
					@endif
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-6">
				<div class="buy-acadmy">
					<h3>{{ $program->title }}</h3>
					<div class="crs-descri">
						{!! $program->description !!}
					</div>
					<div class="buy-btn-crs">

						<a class="universal-btn" href="{{ route('cart.store') }}" onclick="event.preventDefault(); document.getElementById('buynow-form').submit();">
						{{ __('buy now') }}
						</a>

						<form id="buynow-form" action="{{ route('cart.store') }}" method="POST" style="display: none;">
							@csrf
							<input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
							<input type="hidden" name="programs_id" value="{{ $program->id }}">
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection