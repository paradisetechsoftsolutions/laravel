@extends('layouts.app')
@section('content')
<section class="prof_outr">
		<div class="container">
	    <div class="profile_outr">
	        <div class="row">
	            
	        	@include('layouts.front.sidebar')

	            <div class="col-md-9">
	                <div class="profile_img_outr">
	                    <div class="profyl-img">
	                        <img src="images/about-2.jpg">
	                    </div>
	                    <a class="my-acc" href="#">Upload New Picture</a>
	                </div>
	                <div class="persnl_details">
	                    <div class="form-group">
	                        <label>First Name</label>
	                        <input type="text">
	                    </div>
	                    <div class="form-group">
	                        <label>last Name</label>
	                        <input type="text">
	                    </div>
	                    <div class="form-group">
	                        <label>Username</label>
	                        <input type="text">
	                    </div>
	                    <div class="form-group">
	                        <label>Email</label>
	                        <input type="email">
	                    </div>
	                    <div class="form-group">
	                        <label>Phone</label>
	                        <input type="text">
	                    </div>
	                    <div class="form-group">
	                        <label>Website URL</label>
	                        <input type="text">
	                    </div>
	                    <div class="form-group">
	                        <label>Location</label>
	                        <input type="text">
	                    </div>
	                    <div class="form-group about">
	                        <label>About Me</label>
	                        <textarea></textarea>
	                    </div>
	                    <div class="form-group about">
	                        <label>Signature For Forum Posts</label>
	                        <textarea></textarea>
	                    </div>
	                    <div class="settngs">
	                        <a href="#">Change Your Password</a>
	                        <a href="#">Forum Settings</a> 
	                    </div>
	                    <a href="#" class="submit_detailss">Save</a>
	                </div>
	            </div>
	        </div>
	    </div>
    </div>
</section>
@endsection