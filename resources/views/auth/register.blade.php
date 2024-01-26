@extends('layouts.main')

@section('container')

<div class="form4">
    <form action="/register" method="POST" class="login-email">
    @csrf
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
        <div class="input-group">
            <input type="text" placeholder="name" name="name" value="{{ old('name') }}" required>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" required>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-group">
            <button type="submit" class="btn">Register</button>
        </div>
        <p class="login-register-text">Have an account? <a href="/">Login Here</a>.</p>
    </form>
</div>

@endsection