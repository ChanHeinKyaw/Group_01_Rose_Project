@extends('layouts.ui-app')
@section('title', 'နှင်းဆီ🌹')
@section('about-active','navbar-active')
@section('content')
  <div class="blank-space"></div>
  <!--/.header-->

  <div class="sec-aboutus blog-sec">
    <div class="inner-container">
      <h2 class="about-ttl">WHO WE ARE</h2>
      <p class="about-txt"> နည်းပညာ ဝန်ဆောင်မှုများကို အချိန်နှင့်တစ်ပြေးညီ စဉ်ဆက်မပြတ် ကြိုးစားဝန်ဆောင်မှု
        ပေးလျှက်ရှိသော၊ နှင်းဆီ PROJECT အား ဖန်းတီးခဲ့သော BIB_OJT Batch_2 မှ Group 1 အဖွဲ့ဝင်များ</p>
    </div>

    <div class="row-two">

      <div class="col-one animate__animated animate__backInRight">
        <div class="card">
          <img src="image/about/ThuKha.PNG" alt="Mike">
          <div class="container">
            <h2 class="about-name">Thu Kha Aung</h2>
            <p class="about-juni">Junior Developer</p>
            <span class="about-icon phone"></span>
            <span class="about-icon email"></span>
          </div>
        </div>
      </div>

      <div class="col-one animate__animated animate__backInLeft">
        <div class="card">
          <img src="image/about/Chan.png" alt="Chan Hein Kyaw">
          <div class="container">
            <h2 class="about-name">Chan Hein Kyaw</h2>
            <p class="about-juni">Junior Developer</p>
            <span class="about-icon phone"></span>
            <span class="about-icon email"></span>
          </div>
        </div>
      </div>

    </div>

    <div class="row animate__animated animate__backInUp">
      <div class="col-one">
        <div class="card">
          <img src="image/about/Eaint.PNG" alt="Jane">
          <div class="container">
            <h2 class="about-name">Eaint Thayaphy Oo</h2>
            <p class="about-juni">Junior Developer</p>
            <span class="about-icon phone"></span>
            <span class="about-icon email"></span>
          </div>
        </div>
      </div>

      <div class="col-one">
        <div class="card">
          <img src="image/about/Htay.PNG" alt="John">
          <div class="container">
            <h2 class="about-name">Htay Lail</h2>
            <p class="about-juni">Junior Developer</p>
            <span class="about-icon phone"></span>
            <span class="about-icon email"></span>
          </div>
        </div>
      </div>

      <div class="col-one">
        <div class="card">
          <img src="image/about/AyeMyat.PNG" alt="John">
          <div class="container">
            <h2 class="about-name">Aye Myat Myat Soe</h2>
            <p class="about-juni">Junior Developer</p>
            <span class="about-icon phone"></span>
            <span class="about-icon email"></span>
          </div>
        </div>
      </div>

    </div>

    <footer id="footer"></footer>
  </div>
  </div>
@endsection
