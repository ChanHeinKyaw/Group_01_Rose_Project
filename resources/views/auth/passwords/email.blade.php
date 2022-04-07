@extends('layouts.app')
@section('title', 'Forget Password')
@section('content')
  <div class="main" style="padding-bottom: 30px">
    <p class="sign">စကားဝှက်မေ့နေပါသလား?</p>
    @if (session('status'))
      <div class="alert">
        {{ session('status') }}
      </div>
    @endif
    <form action="{{ route('password.email') }}" method="POST">
      @csrf
      <div style="text-align: center">
        <input type="email" placeholder="အီးမေးလ်" name="email" style="width: 80%">
      </div>
      @error('email')
        <span style="color: hsl(0, 88%, 55%);; padding-left:60px;">
          {{ $message }}
        </span>
      @enderror
      <div style="text-align: center">
        <button type="submit" class="submit">Password Reset Link ကို ပေးပို့ပါ။</button>
      </div>
    </form>
  </div>
@endsection
