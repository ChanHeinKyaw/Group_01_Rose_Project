@extends('layouts.ui-app')
@section('title', 'နှင်းဆီ🌹')
@section('report-active','navbar-active')
@section('content')
  <div class="blank-space"></div>

  <div class="blog-sec">
    <div class="article-div inner-container">
      <div class="report-hdr">
        <h2 class="report-h2">
          တိုင်ကြားရန်
        </h2>
      </div>

      <div class="inner-form">
        <form action="{{ route('report') }}" method="post">
          @csrf
          <input type="text" name="case" id="" placeholder="တိုင်ကြားမည့်အကြောင်းအရာ" autofocus="autofocus">
          <input type="text" name="address" id="" placeholder="ဖြစ်ပွားသည့်နေရာ">


          <button type="button" class="label-btn" id="showFormTwo">တိုင်ကြားမည်</button>

          <div class="form-popup form-container" id="myFormTwo">
            
            <p class="pop-up-txt"> ပို့မှာ သေချာလား? </p>
            <div class="pop-btn">
      
              <button type="submit" class="btn send" onclick="this.form.submit();this.disabled = true;">ပို့မည်။ </button>
      
              <button type="button" class="btn cancel" id="closeFormTwo">မပို့ဘူး။</button>
            </div>
            
          </div>
          
        </form>
      </div>
    </div>

    <div class="report-blank-space"></div>
    <footer id="footer"></footer>
  </div>

@endsection
