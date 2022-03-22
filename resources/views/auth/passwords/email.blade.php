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
      @error('email')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <input type="email" placeholder="အီးမေးလ်" name="email" style="width: 80%">
      <button type="submit" class="submit">Password Reset Link ကို ပေးပို့ပါ။</button>
    </form>
  </div>
@endsection
