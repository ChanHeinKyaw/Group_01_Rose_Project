@extends('layouts.admin-app')
@section('title', '')
@section('content')
  <section id="main-content" class="column column-offset-20">
    <!--Charts-->
    <!--Record-->
    <h5 class="mt-2">Records</h5><a class="anchor" name="records"></a>
    <div class="row grid-responsive">
      <div class="column clearfix main-pt">
        <div class="card">
          <div class="all-btn ">
            <form action="{{ route('admin#import') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="file" name="file" placeholder="Title" id="title" class="fileInput" required>
              <input type="submit" class="button cr-posts" value="Import">
            </form>
            
            <a href="{{ route('admin#export') }}" class="button cr-posts">Export</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>No</th>
                <th>User</th>
                <th>Case</th>
                <th>Address</th>

              </tr>
            </thead>
            <tbody>
  
              @foreach ($data as $record)
              <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{ $record->user_id }}</td>
                <td>{{ $record->case }}</td>
                <td>{{ $record->address }}</td>

              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>


      </div>
    </div>
    <p class="credit">SCM OJT Batch 2 group I<a href="#">Group I</a></p>
  </section>
@endsection
