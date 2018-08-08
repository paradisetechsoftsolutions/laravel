@extends('layouts.app')

@section('content')
<section class="sub-banner">
	<div class="feature-image">
		<img src="images/our-program-bg.jpg">
		<h4>Our programs</h4>
	</div>
</section>
<section class="success-stories-page our-program">
	<div class="container">
		<div class="row">
			@foreach($programs as $program)
			<div class="col-12 col-sm-6 col-md-6">
				<div class="prog-item">
					<img src="{{ asset('uploads/programs/'.$program->id.'.png') }}">
					<div class="prog-hover">
						<a href="javascript:void(0)">{{ $program->title }}</a>
						<a href="route('program.preview', [$program->slug])">View Program Preview</a>
						<a href="acadmy.html">Buy the Program</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection
