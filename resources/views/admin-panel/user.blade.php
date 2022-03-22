@extends('layouts.admin-app')
@section('title', '')
@section('content')
  <section id="main-content" class="column column-offset-20">
    <h5 class="mt-2">Users</h5><a class="anchor" name="users"></a>
    <div class="row grid-responsive">
      <div class="column ">
        <!--//Eint de nay yar mar yal mal naw-->
        <div class="card">

          <div class="main-pt clearfix">
            <form action="" method="GET" class="user-form">
              <!--Users table-->
              <input type="text" name="text" class="search" placeholder="Search here!">
              <input type="submit" name="submit" class="submit" value="Search">
            </form>

            <table class="one">
              <colgroup>
                <col span="2">
              </colgroup>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Status</th>
                <th>Role</th>
              </tr>


            </table>
          </div>
        </div>
      </div>
    </div>

    <p class="credit">SCM OJT Batch 2 group I<a href="#">Group I</a></p>
  </section>
@endsection
