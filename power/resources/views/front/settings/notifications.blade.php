@extends('layouts.app')
@section('content')
<section class="prof_outr">
		<div class="container">
	    <div class="profile_outr">
	        <div class="row">
	            
	        	@include('layouts.front.sidebar')

	            <div class="col-md-9">
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
	                    <a href="#" class="submit_detailss">Save</a>
	                </div>
	            </div>
	        </div>
	    </div>
    </div>
</section>
@endsection