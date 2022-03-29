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
          <form type="get" class="user-form" action="{{ route('user.search') }}">
            <input type="search" name="query" class="search" placeholder="Search here!">
            <button class="submit" type="submit">Search</button>
          </form>

          <table class="user-tb">
            <colgroup>
              <col span="2">
            </colgroup>

            <thead>
              <th>No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Defender</th>
              <th>Address</th>
              <th>Type</th>
              <th>Role</th>
            </thead>
            <tbody>
              @foreach($userList as $user)
              <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->defender }}</td>
                <td>{{ $user->address }}</td>
                @if ( $user->type == 0 )
                  <td>User</td>
                  @elseif ($user->type ==1)
                  <td>Admin</td>
                @endif
                <!-- change role Button -->
                <td>
                  <form class="btn-group" action="{{ route('user.change-role', $user->id) }}" method="post">
                    {{ csrf_field() }}
                    <button onclick="return confirm('Are you sure to change role?')" ; type="submit">Chane Role</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <p class="credit">SCM OJT Batch 2 group I<a href="#">Group I</a></p>
</section>
@endsection