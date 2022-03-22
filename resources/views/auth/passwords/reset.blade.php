@extends('layouts.app')
@section('title','Reset Password')
@section('content')
  <div class="main" style="padding-bottom: 30px">
    <p class="sign">Password ကို Reset ချပါ</p>
    <form method="POST" action="{{ route('password.update') }}">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">
      @error('email')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <input type="email" placeholder="အီးမေးလ်" name="email" style="width: 90%" value="{{ $email ?? old('email') }}">
      <input id="password" type="password" placeholder="စကားဝှက်" name="password" style="width: 90%"><br>
      @error('password')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <input id="password-confirm" type="password" placeholder="စကားဝှက်ကိုပြန်လည်စစ်ဆေးပါ" name="password_confirmation" required
        style="width: 90%">
      <button type="submit" class="submit">သေချာပါသည်</button>
    </form>
  </div>
@endsection
