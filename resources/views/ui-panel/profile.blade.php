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

    <div class="inner-form profile-card">

      <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="profile-form" >
        @csrf
        <div class="img-profile-div">
          @if($user->profile)
          <img class="img-profile" src="{{ asset('storage/images/'.$user->profile ) }}" alt="" class="img-profile">
          @elseif ( $user->profile == null )
          <img src=" {{ asset('image/user.png') }}" alt="" title="" class="img-profile">
          @endif
        </div>
        <input type="file" name="profile" id="profile" class="disable file-img" disabled /><br>
        <label for="profile" class="label-btn">ပုံအသစ်တင်မည်</label><br>

        <label for="">အမည်</label>
        <input type="text" name="name" id="" placeholder="အမည်" class="profile-input disable" disabled value="{{ $user->name }}" require><br>
        <label for="">အီးမေးလ်</label>
        <input type="email" name="email" id="" placeholder="အီးမေးလ်" class="profile-input disable" disabled value="{{ $user->email }}" require><br>
        <label for="">ဖုန်းနံပါတ်</label>
        <input type="phone" name="phone" id="" placeholder="ဖုန်းနံပါတ်" class="profile-input disable" disabled value="{{ $user->phone }}" require><br>
        <label for="">အသက်</label>
        <input type="number" min="1" max="120" name="age" id="" placeholder="အသက်" class="profile-input disable" disabled value="{{ $user->age }}" require><br>
        <label for="">နေရပ်လိပ်စာ</label>
        <input type="text" name="address" id="" placeholder="နေရပ်လိပ်စာ" class="profile-input disable" disabled value="{{ $user->address }}" require><br>
        <label for="">ကျား/မ</label>
        <select id="gender" required name="gender" class="select-option-gender disable" disabled>
          <option {{ ($user->gender) == 'female' ? 'selected' : '' }} value="female">မ</option>
          <option {{ ($user->gender) == 'male' ? 'selected' : '' }} value="male">ကျား</option>
        </select><br>
        <label for="">နှင်းဆီ</label>
        <select id="defender" required name="defender" class="select-option-gender disable" disabled><br>
          <option {{ ($user->defender) == '1' ? 'selected' : '' }} value="1">နှင်းဆီ Defender</option>
          <option {{ ($user->defender) == '0' ? 'selected' : '' }} value="0">နှင်းဆီ</option>
        </select><br>

        <button type="button" id="edit-btn">ပြင်ဆင်မည်</button>
        <input type="submit" value="အသစ်တင်မည်" class="disable" disabled>
      </form>
    </div>
  </div>

  <div class="report-blank-space"></div>
  <footer id="footer"></footer>
</div>
@endsection