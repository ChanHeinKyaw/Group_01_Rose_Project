@extends('layouts.app')
@section('title', 'Sign In')
@section('login-active', 'navbar-active')
@section('content')
  <div class="main">
    <p class="sign">အကောင့်ဝင်ရန်</p>
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div style="text-align: center">
        <input type="email" placeholder="အီးမေးလ်" name="email" value="{{ old('email') }}"><br>
      </div>
      @error('email')
        <span style="color: hsl(0, 88%, 55%);padding-left:35px;">
          {{ $message }}
        </span>
      @enderror
      <div style="text-align: center">
        <input type="password" placeholder="စကားဝှက်" name="password"><br>
      </div>
      @error('password')
        <span style="color: hsl(0, 88%, 55%);padding-left:35px;">
          {{ $message }}
        </span>
      @enderror
      <div style="text-align: center">
        <button type="submit" class="submit">အကောင့်ဝင်ရန်</button>
      </div>
      <p class="forgot"><a href="{{ route('password.request') }}">စကားဝှက်မေ့နေပါသလား?</p>
    </form>
  </div>
@endsection
