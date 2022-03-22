@extends('layouts.admin-app')
@section('title', '')
@section('content')
  <section id="main-content" class="column column-offset-20">
    <div class="row grid-responsive">
      <div class="column">
        <div class="profile clearfix">
          <h2>Profile Settings</h2>
          <div class="left-blk">
            <img src="img/profile.png" alt="profile picture" height="200px">
          </div>
          <div class="right-blk">
            <form>
              <label for="fname">Name</label><br>
              <input type="text" id="fname" name="fname" value=""><br><br>
              <label for="email">Email</label><br>
              <input type="text" id="lname" name="email" value=""><br><br>
              <label for="phone">PhoneNumber</label><br>
              <input type="text" id="phone" name="email" value=""><br><br>
              <label for="age">Age</label><br>
              <input type="text" id="age" name="email" value=""><br><br>
              <label for="gender">Gender</label>
              <input type="radio" id="male" name="gender" value="Male">
              <label for="gender">Male</label>
              <input type="radio" id="female" name="gender" value="Female">
              <label for="gender">Female</label><br><br>
              <label for="address">Address</label><br>
              <input type="text" id="address" name="email" value=""><br><br>
              <button type="submit" value="Save Profile">Save Profile</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <p class="credit">SCM OJT Batch 2 group I<a href="#">Group I</a></p>
  </section>
@endsection
