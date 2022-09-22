@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner/digidoc.jpg" class="img-fluid" style="border:1px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2>Book Your Appointment</h2>
            <p> Create your personal smart apppointment portal account following simple instructions and book your preferred doctors apointment right now.
             Your own account will give you access to any available doctor at your preferred time with the ease of your comfort.
             Join today and make health your priority again with the help of SAP. </p>
            <div class="mt-5">
               <a href="{{url('/register')}}"> <button class="btn btn-success">Register as Patient</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a>
            </div>
        </div>
    </div>
    <hr>

  <!--date picker component-->
  <find-doctor></find-doctor>
</div>
@endsection
