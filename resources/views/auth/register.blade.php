@extends('layouts.app')
@section('title', 'Sign Up')
@section('register-active', 'navbar-active')
@section('content')
  <div class="main">
    <p class="sign">အကောင့်အသစ်ဖွင့်ရန်</p>
    <form action="{{ route('register') }}" method="POST">
      @csrf
      @error('name')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <input type="name" placeholder="အမည်" name="name"><br>
      @error('email')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <input type="email" placeholder="အီးမေးလ်" name="email"><br>
      @error('phone')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <input type="number" placeholder="ဖုန်းနံပါတ်" name="phone"><br>
      @error('age')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <input type="number" placeholder="အသက်" name="age"><br>
      @error('gender')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <select name="gender">
        <option value="" style="text-color: #757575;">ကျား (သို့) မ</option>
        <option value="male">ကျား</option>
        <option value="female">မ</option>
      </select><br>
      @error('defender')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <select name="defender">
        <option value="" style="text-color: #757575;">ကာကွယ်သူလား?</option>
        <option value="1">ဟုတ်ပါတယ်</option>
        <option value="0">မဟုတ်ပါဘူး</option>
      </select><br>
      @error('address')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <input type="text" placeholder="နေရပ်လိပ်စာ" name="address"><br>
      @error('password')
        <span style="color: red;">
          <strong>{{ $message }}</strong><br>
        </span>
      @enderror
      <input type="password" placeholder="စကားဝှက်" name="password"><br>
      <button type="submit" class="submit">အကောင့်အသစ်ဖွင့်ရန်</button>
      <p class="forgot"><a href="{{ route('login') }}">အကောင့်ရှိပြီးသားလား?</p>
    </form>
  </div>
@endsection
