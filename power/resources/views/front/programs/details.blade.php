@extends('layouts.app')
@section('content')
<section class="main-course details-section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-6 col-md-6 revrsr-div">
				<div class="csr-image">
					<img src="{{ asset('images/crowd-image.jpg') }}">
					<div class="crowd-caption">
						<h3>{{ $program->title }}</h3>
						<div class="buy-btn-crs">
							<a class="universal-btn" href="{{ route('program.videos', [$program->slug]) }}">video lesson</a>
						</div>
						<div class="playcrown-vid">
							<img src="{{ asset('images/play-icon.png') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-6">
				<div class="buy-acadmy">
					<h3>{{ $program->title }}</h3>
					<div class="crs-descri">
						<p>{{ $program->description }}</p>
					</div>
					<div class="buy-btn-crs">
						<a class="universal-btn bdr-btn" href="#">resume</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="module-section">
	<div class="container">
		<div class="row">
			<div class="cstm-accordion">
				<div class="panel-group">
					
					@foreach($program->modules as $i => $module)
					<div class="panel panel-default panel-cstm">
						<div class="panel-heading-flat">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#module-{{ $module->id }}">Module {{ $i+1 }}
								<span>{{ $module->title }}</span>
								<i class="fa fa-caret-down" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="module-{{ $module->id }}" class="panel-collapse collapse main-part-info">
							<div class="panel-body sub-panel-accordio">
								<div class="row">
									
									@foreach($module->chapters as $chapter)
									<div class="col-12 col-sm-6 col-md-6">
										<div class="module-info">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h5 class="panel-title">
														<a data-toggle="collapse" href="#chapter-{{ $chapter->id }}">
															{{ $chapter->title }}
														<i class="fa fa-plus-circle" aria-hidden="true"></i>
														<i class="fa fa-minus-circle" aria-hidden="true"></i>
														</a>
													</h5>
												</div>
												<div id="chapter-{{ $chapter->id }}" class="panel-collapse collapse sub-part-info">
													<div class="panel-body">
														<p>{{ $chapter->description }}</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach

								</div>
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>
	</div>
</section>
@endsection