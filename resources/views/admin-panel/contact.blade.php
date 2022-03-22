@extends('layouts.admin-app')
@section('title', '')
@section('content')
  <section id="main-content" class="column column-offset-20">
    <h5 class="mt-2">Contact us</h5><a class="anchor" name="users"></a>
    <div class="row grid-responsive">
      <div class="column ">

        <div class="card ">

          <div class="main-pt clearfix">
            <form action="" method="GET" class="user-form">
              <!--Users table-->
              <input type="text" name="text" class="search" placeholder="Search here!">
              <input type="submit" name="submit" class="submit" value="Search">
            </form>

            <table>
              <colgroup>
                <col span="2">
              </colgroup>
              <tr>
                <th>#.</th>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>

    <p class="credit">SCM OJT Batch 2 group I<a href="#">Group I</a></p>
  </section>
@endsection
