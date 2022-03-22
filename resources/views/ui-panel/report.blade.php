@extends('layouts.ui-app')
@section('title', 'နှင်းဆီ🌹')
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
          <input type="text" name="case" id="" placeholder="တိုင်ကြားမည့်အကြောင်းအရာ">
          <input type="text" name="address" id="" placeholder="ဖြစ်ပွားသည့်နေရာ">

          <input type="submit" value="တိုင်ကြားမည်">
        </form>
      </div>
    </div>

    <div class="report-blank-space"></div>
    <footer id="footer"></footer>
  </div>

@endsection
