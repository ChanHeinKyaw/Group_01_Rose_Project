@extends('layouts.admin-app')
@section('title', '')
@section('content')
<section id="main-content" class="column column-offset-20">
  <div class="row grid-responsive">
    <div class="column">
      <div class="profile clearfix">
        <h2>Change Password Setting</h2>

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

        <form action="{{ route('admin-password.update') }}" method="POST" enctype="multipart/form-data" class="admin-pwdchange">
          {{ csrf_field() }}
          <div>
            <label for="">Name</label>
            <input type="text" id="" name="name" value="{{ Auth::user()->name }}" require><br>
          </div>

          <div>
            <label for="current_password">Current Password</label>
            <input type="password" name="current-password" id="current-password" placeholder="Enter Current Password" require><br>
          </div>

          <label for="new-password">New Password</label>
          <input type="password" name="new-password" id="new-password" placeholder="Enter New Password" require><br>

          <label for="new-password-confirm">Confirm Password</label>
          <input id="new-password-confirm" type="password" name="new-password_confirmation" placeholder="Enter Confrim Password" require><br>
        

          <button type="button"><a href="/" class="back-btn">Back</a></button>
          <button type="submit">Update</button>

        </form>

      </div>

    </div>
  </div>
  </div>
  </div>
  <p class="credit">SCM OJT Batch 2 group I<a href="#">Group I</a></p>
</section>
@endsection