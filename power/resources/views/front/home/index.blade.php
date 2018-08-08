@extends('layouts.app')
@section('content')
<section class="home-video">
  <div class="vid-sec">
    <video autoplay="autoplay">
      <source src="video/home-video.mp4" type="video/mp4">
      <!--<source src="movie.ogg" type="video/ogg">-->
      Your browser does not support the video tag.
    </video>
  </div>
  <div class="vid-caption">
    <h2>powerhouse within you</h2>
    <span>stop wishing and start doing</span>
  </div>
</section>
<section class="site-link">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-4 col-md-4">
        <div class="site-item">
          <div class="item-image">
            <img src="images/link-1.jpg">
          </div>
          <a href="#"><span>Lives Dates</span></a>
        </div>
      </div>
      <div class="col-12 col-sm-4 col-md-4">
        <div class="site-item">
          <div class="item-image">
            <img src="images/link-2.jpg">
          </div>
          <a href="#"><span>Meet The Band</span></a>
        </div>
      </div>
      <div class="col-12 col-sm-4 col-md-4">
        <div class="site-item">
          <div class="item-image">
            <img src="images/link-3.jpg">
          </div>
          <a href="#"><span>New Album</span></a>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="success-stories">
  <div class="success-info">
    <h2 class="site-heading">
      <span>Our Successful Stories</span>
    </h2>
  </div>
  <div class="success-slider-outer">
    <div class="center-slider">
      <div class="single-item-slide">
        <a data-toggle="modal" data-target="#success-modal" href="https://player.vimeo.com/video/282623556?autoplay=1&color=d20ae0&title=0&byline=0&portrait=0">
          <img src="images/slide-1.jpg">
          <h2 class="video-title">Powehouse Video</h2>
          <div class="play-icon"><img src="images/play-icon.png"></div>
          <span class="video-info">Grew from 103 to over 10,000 YouTube subscribers in 11 months.</span>
        </a>
      </div>
      <div class="single-item-slide">
        <a data-toggle="modal" data-target="#success-modal" href="https://player.vimeo.com/video/282577747?autoplay=1&color=d20ae0&title=0&byline=0&portrait=0">
          <img src="images/slide-1.jpg">
          <h2 class="video-title">Powehouse Video</h2>
          <div class="play-icon"><img src="images/play-icon.png"></div>
          <span class="video-info">Grew from 103 to over 10,000 YouTube subscribers in 11 months.</span>
        </a>
      </div>
      <div class="single-item-slide">
        <a data-toggle="modal" data-target="#success-modal" href="https://player.vimeo.com/video/254704848?autoplay=1&color=d20ae0&title=0&byline=0&portrait=0">
          <img src="images/slide-1.jpg">
          <h2 class="video-title">Powehouse Video</h2>
          <div class="play-icon"><img src="images/play-icon.png"></div>
          <span class="video-info">Grew from 103 to over 10,000 YouTube subscribers in 11 months.</span>
        </a>
      </div>
      <div class="single-item-slide">
        <a data-toggle="modal" data-target="#success-modal" href="https://player.vimeo.com/video/282306615?autoplay=1&color=d20ae0&title=0&byline=0&portrait=0">
          <img src="images/slide-1.jpg">
          <h2 class="video-title">Powehouse Video</h2>
          <div class="play-icon"><img src="images/play-icon.png"></div>
          <span class="video-info">Grew from 103 to over 10,000 YouTube subscribers in 11 months.</span>
        </a>
      </div>
    </div>
  </div>
</section>


<section class="my-program">
  <div class="container">
    <div class="success-info">
      <h2 class="site-heading small-heading">
        <span>my programs</span>
      </h2>
    </div>
    <div class="row">
      
      @foreach($programs as $program)
      <div class="col-12 col-sm-3 col-md-3">
        <div class="single-program">
          <div class="program-img">
            <a href="{{ @(Auth::user())? 'javascript:void(0)':route('login') }}"
            @if(Auth::user())
            class="homePopup" data-src="{{ $program->short_video }}"
            @endif
            >
              <img src="{{ asset('uploads/programs/small/'.$program->id.'.png') }}">
              <div class="prog-icon">
                <img src="images/org-play-icon.png">
              </div>
            </a>
          </div>
          <h3 class="program-title">              
            <a href="{{ @(Auth::user())? route('program.preview', [$program->slug]):route('login') }}">
              {{ $program->title }}
            </a>
          </h3>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>

@include('alters.video')

@endsection