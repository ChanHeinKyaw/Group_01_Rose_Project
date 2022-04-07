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
                    @if($errors)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif


      <form action="{{ route('user-password.update') }}" method="POST" enctype="multipart/form-data" class="user-changepwd" >
        @csrf
       
        <div>
            <label for="">Name</label>
            <input type="text" id="" name="name" value="{{ Auth::user()->name }}" require><br>
          </div>

          <div>
            <label for="current_password">Current Password</label>
            <input type="password" name="current-password" id="current-password" placeholder="Enter Current Password" require><br>
            <!-- @if ($errors->has('current-password'))
            <span class="help-block">
              <strong>{{ $errors->first('current-password') }}</strong>
            </span>
            @endif -->
          </div>

          <label for="new-password">New Password</label>
          <input type="password" name="new-password" id="new-password" placeholder="Enter New Password" require><br>

          <label for="new-password-confirm">Confirm Password</label>
          <input id="new-password-confirm" type="password" name="new-password_confirmation"  placeholder="Enter Confrim Password" require><br>
        

          <button type="button"><a href="/admin/dashboard" class="back-btn">Back</a></button>
          <button type="submit">Update</button>
      </form>
    </div>
  </div>

  <div class="report-blank-space"></div>
  <footer id="footer"></footer>
</div>
@endsection