@extends('layouts.admin-app')
@section('title', '')
@section('content')
<section id="main-content" class="column column-offset-20">
  <h5 class="mt-2">Contact us</h5><a class="anchor" name="users"></a>
  <div class="row grid-responsive">
    <div class="column ">
      <div class="card ">
        <div class="main-pt clearfix">
          <form type="get" class="user-form" action="{{ route('contact.search') }}">
            <input type="search" name="query" class="search" placeholder="Search here!">
            <button class="submit" type="submit">Search</button>
          </form>
          <table>
            <colgroup>
              <col span="2">
            </colgroup>
            <thead>
              <th>No</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Operation</th>
            </thead>
            <tbody>
              @foreach($contactList as $contact)
              <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->message }}</td>
                <!-- contact Delete Button -->
                <td>
                  <form action="{{ route('contact.delete', $contact->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button onclick="return confirm('Are you sure to delete?')" ; type="submit">Delete</button>
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

  <p class="credit">SCM OJT Batch 2 <a href="#">Group I</a></p>
</section>
@endsection