@extends('layouts.ui-app')
@section('title', 'နှင်းဆီ🌹')
@section('content')

  <div class="blank-space"></div>

  <div class="blog-sec">
    <div class="article-div inner-container">
      <div class="report-hdr">
        <h2 class="report-h2">
          ကိုယ်ရေးအကျဉ်း
        </h2>
      </div>

      <div class="inner-form">
        <div class="img-profile-div">
          <img src="img/big-img.png" alt="Profile Photo" class="img-profile">
        </div>

        <form action="" method="post">
          <input type="file" id="files" style="display: none;" class="disable" disabled />
          <label for="files" class="label-btn">ပုံအသစ်တင်မည်</label>
          <input type="text" name="" id="" placeholder="အမည်" class="disable" disabled>
          <input type="text" name="" id="" placeholder="အီးမေးလ်" class="disable" disabled>
          <input type="text" name="" id="" placeholder="ဖုန်းနံပါတ်" class="disable" disabled>
          <input type="text" name="" id="" placeholder="အသက်" class="disable" disabled>
          <input type="text" name="" id="" placeholder="နေရပ်လိပ်စာ" class="disable" disabled>
          <!-- <input type="text" name="" id="" placeholder="ကျား မ" disabled> -->
          <select class="select-option-gender disable" disabled>
            <option>ကျား</option>
            <option>မ</option>
          </select>
          <select class="select-option-gender disable" disabled>
            <option>နှင်းဆီ Defender</option>
            <option>နှင်းဆီ</option>
          </select>

          <button type="button" id="edit-btn">ပြင်ဆင်မည်</button>
          <input type="submit" value="အသစ်တင်မည်" class="disable" disabled>
        </form>
      </div>
    </div>

    <div class="report-blank-space"></div>
    <footer id="footer"></footer>
  </div>
@endsection
