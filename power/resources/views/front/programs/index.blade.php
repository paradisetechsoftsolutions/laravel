@extends('layouts.app')

@section('content')
<section class="sub-banner">
	<div class="feature-image">
		<img src="{{ asset('images/our-program-bg.jpg') }}">
		<h4>{{ __('Our programs') }}</h4>
	</div>
</section>
<section class="success-stories-page our-program">
	<div class="container">
		<div class="row">
			@foreach($programs as $program)
			<div class="col-12 col-sm-6 col-md-6">
				<div class="prog-item ">
					<div class="img-layer">
						@if($program->image)
						<img src="{{ asset('uploads/programs/'.$program->image) }}">
						@endif
						<div class="prog-btn">
	                        <a href="javascript:void(0)">{{ $program->title }}</a>
	                      </div>
						<div class="prog-hover">
							<div class="hvr-inner">
								<a href="{{ route('program.preview', [$program->slug]) }}">{{ __('View Program Preview') }}</a>
								<a href="javascript:void(0)" onclick="buyProgram(`{{ $program->id }}`)">
								{{ __('Buy the Program') }}
								</a>								
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<form id="buynow-form" action="{{ route('cart.store') }}" method="POST" style="display: none;">
	@csrf
	<input type="hidden" name="users_id" value="{{ Auth::user()->id }}">	
</form>
@endsection


@section('script')
<script>
function buyProgram(id){
	var $form = '#buynow-form';
	jQuery($form).append('<input type="hidden" name="programs_id" value="'+id+'">');
	jQuery($form).submit();
}
</script>
@endsection

