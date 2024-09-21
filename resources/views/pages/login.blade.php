@extends('pages.layouts.main')
@push('title')
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@section('main-xyz')

  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <form action="{{url('/login')}}" method="POST">
    @csrf
    <h3>Login Here</h3>

    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Email or Phone" id="username">

    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" id="password">

    <button>Log In</button>
    <div class="social">
      <div class="go"><i class="fab fa-google"></i> Google</div>
      <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
    </div>
  </form>
@endsection