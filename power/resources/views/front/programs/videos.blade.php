@extends('layouts.app')
@section('content')
<section class="main-course main-video-lesson cstm-cont-outer">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 col-sm-8 col-md-8">
            
            @if($chapter)
               <div class="left-video-bar">
                  @if($chapter->video)
                  <div class="videos-item-frame">                     
                     <iframe width="100%" height="315" src="{{ $chapter->video }}?autoplay=1" frameborder="0" allowfullscreen></iframe>
                  </div>
                  @endif
                  <div class="rate-this-course">
                     <label>Rate this course :</label> <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                  </div>
                  <div class="video-inf">
                     <h3>{{ $chapter->title }}</h3>



                     {!! $chapter->description !!}
                  </div>
               </div>
            @else
               <div class="left-video-bar">
                  <div class="videos-item-frame">                     
                     <iframe width="100%" height="315" src="{{ $program->video }}?autoplay=1" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div class="rate-this-course">
                     <label>Rate this course :</label> <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                  </div>
                  <div class="video-inf">
                     <h3>{{ $program->title }}</h3>
                     {!! $program->description !!}
                  </div>
               </div>
            @endif

         </div>
         <div class="col-12 col-sm-4 col-md-4 rvb">
            <div class="right-video-bar">
               <h5>All Videos</h5>
               
               @foreach($program->modules as $i => $module_rel)
               <div class="video-play-list">
                  <div class="panel-heading">
                     <h6 class="panel-title">
                        <a href="#module-{{ $module_rel->id }}" data-toggle="collapse" class="{{ (@$module->slug==$module_rel->slug)?'':'collapsed' }}" aria-expanded="{{ @($module->slug==$module_rel->slug)?'true':'false' }}">{{ $module_rel->title }}
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        </a>
                     </h6>
                  </div>
                  <div id="module-{{ $module_rel->id }}" class="panel-collapse collapse ul-list-vid {{ (@$module->slug==$module_rel->slug)?'show':'' }}">
                     <div class="panel-body">
                        <ul>
                        	@foreach($module_rel->chapters as $chapter_rel)
                        	<li class="{{ (@$module->slug==$module_rel->slug)?'active':'' }}">
                              <a href="{{ route('program.videos.view', [$program->slug, $module_rel->slug, $chapter_rel->slug]) }}">
                                 <i class="fa fa-check" aria-hidden="true"></i>
                                 {{ $chapter_rel->title }}
                              </a>
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