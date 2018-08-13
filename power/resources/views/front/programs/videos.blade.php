@extends('layouts.app')
@section('content')
<section class="main-course main-video-lesson cstm-cont-outer">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 col-sm-8 col-md-8">
            <div class="left-video-bar">
               <div class="videos-item-frame">
                  
                  <iframe width="100%" height="315" src="{{ $program->video }}?autoplay=1" frameborder="0" allowfullscreen></iframe>

                  <div class="crowd-caption frame-caption">
                     <h4>{{ $program->title }}</h4>
                     <div class="buy-btn-crs blk-btn">
                        <a class="universal-btn" href="#">video lesson</a>
                     </div>
                  </div>
               </div>
               <div class="rate-this-course">
                  <label>Rate this course :</label> <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
               </div>
               <div class="video-inf">
                  <h3>{{ $program->title }}</h3>
                  <p>{{ $program->description }}</p>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-4 col-md-4 rvb">
            <div class="right-video-bar">
               <h5>All Videos</h5>
               
               @foreach($program->modules as $i => $module)
               <div class="video-play-list">
                  <div class="panel-heading">
                     <h6 class="panel-title">
                        <a data-toggle="collapse" href="#module-{{ $module->id }}">{{ $module->title }}
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        </a>
                     </h6>
                  </div>
                  <div id="module-{{ $module->id }}" class="panel-collapse collapse ul-list-vid">
                     <div class="panel-body">
                        <ul>
                        	@foreach($module->chapters as $chapter)
                        	<li>
                              <i class="fa fa-check" aria-hidden="true"></i>
                              <p>
                                {{ $chapter->title }}
                              </p>
                           </li>
                           @endforeach
                        </ul>
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