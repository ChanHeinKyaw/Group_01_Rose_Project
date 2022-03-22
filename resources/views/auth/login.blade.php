@extends('layouts.app')
@section('title', 'Sign In')
@section('login-active', 'navbar-active')
@section('content')
  <div class="main">
    <p class="sign">အကောင့်ဝင်ရန်</p>
    <form action="{{ route('login') }}" method="POST">
      @csrf
      @error('email')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <input type="email" placeholder="အီးမေးလ်" name="email"><br>
      @error('password')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <input type="password" placeholder="စကားဝှက်" name="password"><br>
      <button type="submit" class="submit">အကောင့်ဝင်ရန်</button>
      <p class="forgot"><a href="{{ route('password.request') }}">စကားဝှက်မေ့နေပါသလား?</p>
    </form>
  </div>
@endsection
