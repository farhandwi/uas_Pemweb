@extends('layouts.main')

@section('container')

<div class="form4">
  @if(session()->has('success'))
      <div class="success" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="fail" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
  <form action="" method="POST" class="login-email">
    @csrf
    <p class="login-text" style="font-size: 2rem; font-weight: 800">Login</p>
    <div class="input-group">
      <input type="email" placeholder="Email" name="email" value="" required />
    </div>
    <div class="input-group">
      <input type="password" placeholder="Password" name="password" value="" required />
    </div>
    <div class="input-group">
      <button name="submit" class="btn">Login</button>
    </div>
    <p class="login-register-text">Don't have an account? <a href="/register">Register Here</a>.</p>
  </form>
</div>

@endsection