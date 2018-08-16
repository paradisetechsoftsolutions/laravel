@extends('layouts.app')
@section('content')
<section class="home-video">
	<div class="vid-sec">
		<iframe width="100%" height="315" src="{{ $program->short_video }}?autoplay=1" frameborder="0" allowfullscreen></iframe>
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
						<a class="universal-btn" href="#">buy now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection