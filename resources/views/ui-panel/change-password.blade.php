@extends('layouts.ui-app')
@section('title', 'နှင်းဆီ🌹')
@section('content')

  <div class="blank-space"></div>

  <div class="blog-sec">
    <div class="article-div inner-container">
      <div class="report-hdr">
        <h2 class="report-h2">
          စကားဝှက်ပြောင်းမည်
        </h2>
      </div>

      <div class="inner-form profile-card">
        @if (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
        @endif
        @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif
        @if ($errors)
          @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
          @endforeach
        @endif


        <form action="{{ route('user-password.update') }}" method="POST" enctype="multipart/form-data"
          class="user-changepwd">
          @csrf

          <div>
            <input class="change-name" type="text" id="name" name="name" placeholder="အမည်ဖြည့်ပါ" value="{{ auth()->user()->name }}" require><br>
          </div>

          <div>
            <input type="password" id="current-password" name="current-password" placeholder="လက်ရှိ စကားဝှက်ဖြည့်ပါ"
              require><br>
          </div>

          <div>
            <input type="password" name="new-password" id="new-password" placeholder="စကားဝှက် အသစ်ရိုက်ထည့်ပါ"
              require><br>
          </div>

          <div>
            <input id="new-password-confirm" type="password" name="new-password_confirmation"
              placeholder="စကားဝှက် ကို ပြန်လည်စစ်ဆေးပါ" require><br>
          </div>

          <div style="margin: 20px 0px">
            <button type="button" class="btn"><a href="/" class="back-btn">နောက်သို့</a></button>
            <button type="submit" class="btn">အတည်ပြုပါ</button>
          </div>
        </form>
      </div>
    </div>

    <div class="report-blank-space"></div>
    <footer id="footer"></footer>
  </div>
@endsection
