@extends('layouts.app')
@section('title', 'Sign Up')
@section('register-active', 'navbar-active')
@section('content')
  <div class="main">
    <p class="sign">အကောင့်အသစ်ဖွင့်ရန်</p>
    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div style="text-align: center">
        <input type="name" placeholder="အမည်" name="name" value="{{ old('name') }}"><br>
      </div>
      @error('name')
        <span style="color: hsl(0, 88%, 55%);padding-left:35px;">
          {{ $message }}
        </span>
      @enderror
      <div style="text-align: center">
        <input type="email" placeholder="အီးမေးလ်" name="email" value="{{ old('email') }}"><br>
      </div>
      @error('email')
        <span style="color: hsl(0, 88%, 55%);padding-left:35px;">
          {{ $message }}
        </span>
      @enderror
      <div style="text-align: center">
        <input type="number" placeholder="ဖုန်းနံပါတ်" name="phone" value="{{ old('phone') }}"><br>
      </div>
      @error('phone')
        <span style="color: hsl(0, 88%, 55%);padding-left:35px;">
          {{ $message }}
        </span>
      @enderror
      <div style="text-align: center">
        <input type="number" placeholder="အသက်" name="age" value="{{ old('age') }}"><br>
      </div>
      @error('age')
        <span style="color: hsl(0, 88%, 55%);padding-left:35px;">
          {{ $message }}
        </span>
      @enderror
      <div style="text-align: center">
        <select name="gender" value="{{ old('gender') }}">
          <option value="" style="text-color: #757575;">ကျား (သို့) မ</option>
          <option value="male">ကျား</option>
          <option value="female">မ</option>
        </select><br>
      </div>
      @error('gender')
        <span style="color: hsl(0, 88%, 55%);padding-left:35px;">
          {{ $message }}
        </span>
      @enderror
      <div style="text-align: center">
        <select name="defender" value="{{ old('defender') }}">
          <option value="" style="text-color: #757575;">ကာကွယ်သူလား?</option>
          <option value="1">ဟုတ်ပါတယ်</option>
          <option value="0">မဟုတ်ပါဘူး</option>
        </select><br>
      </div>
      @error('defender')
        <span style="color: hsl(0, 88%, 55%);padding-left:35px;">
          {{ $message }}
        </span>
      @enderror
      <div style="text-align: center">
        <input type="text" placeholder="နေရပ်လိပ်စာ" name="address" value="{{ old('address') }}"><br>
      </div>
      @error('address')
        <span style="color: hsl(0, 88%, 55%);padding-left:35px;">
          {{ $message }}
        </span>
      @enderror
      <div style="text-align: center">
        <input type="password" placeholder="စကားဝှက်" name="password" value="{{ old('password') }}"><br>
      </div>
      @error('password')
        <span style="color: hsl(0, 88%, 55%);padding-left:35px;">
          {{ $message }}
        </span>
      @enderror
      <div style="text-align: center">
        <button type="submit" class="submit">အကောင့်အသစ်ဖွင့်ရန်</button>
      </div>
      <p class="forgot"><a href="{{ route('login') }}">အကောင့်ရှိပြီးသားလား?</p>
    </form>
  </div>
@endsection
