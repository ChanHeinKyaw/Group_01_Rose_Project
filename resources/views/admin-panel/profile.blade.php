@extends('layouts.admin-app')
@section('title', '')
@section('content')
<section id="main-content" class="column column-offset-20">
  <div class="row grid-responsive">
    <div class="column">
      <div class="profile clearfix">
        <h2>Profile Settings</h2>
        <form action="{{ route('admin-profile.update') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="left-blk">
            @if(Auth::user()->profile)
            <img class="img-profile" src="{{ asset('storage/images/'.Auth::user()->profile ) }}" alt="" height="200px">
            @elseif ( Auth::user()->profile == null )
            <img src=" {{ asset('image/user.png') }}" alt="" title="" height="200px">
            @endif            
            <input type="file" name="profile" id="profile" style="display: none;" /><br>
            <label for="profile" class="img-btn" >ပုံအသစ်တင်မည်</label>
          </div>

          <div class="right-blk">

            <label for="">Name</label>
            <input type="text" id="" name="name" value="{{ Auth::user()->name }}"  require><br>
            <label for="">Email</label>
            <input type="email" id="" name="email" value="{{ Auth::user()->email }}"  require><br>
            <label for="">Phone</label>
            <input type="phone" id="" name="phone" class="input-phone" value="{{ Auth::user()->phone }}"  require><br>
            <label for="">Age</label>
            <input type="number" id="" name="age" value="{{ Auth::user()->age }}"  require><br>
            <label for="">Address</label>
            <input type="text" name="address" value="{{ Auth::user()->address }}"  require><br>
            <label for="">Password</label>
            <input type="password" name="password" id="" placeholder="password" value="{{ Auth::user()->password }}"  require><br>
            <label>Gender</label>
            <select id="gender" name="gender"  required>
              <option {{ (Auth::user()->gender) == 'female' ? 'selected' : '' }} value="female">Female</option>
              <option {{ (Auth::user()->gender) == 'male' ? 'selected' : '' }} value="male">Male</option>
            </select> <br>
            <label for="">Defender</label>
            <select id="defender" name="defender" value="{{ Auth::user()->defender }}" class="disable" disa require>
              <option {{ (Auth::user()->defender) == '1' ? 'selected' : '' }} value="1">နှင်းဆီ Defender</option>
              <option {{ (Auth::user()->defender) == '0' ? 'selected' : '' }} value="0">နှင်းဆီ</option>
            </select><br>
          

            <button type="button"><a href="/admin/dashboard">Back</a></button>
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