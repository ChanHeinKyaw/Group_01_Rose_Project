@extends('layouts.admin-app')
@section('title', '')
@section('content')
  <section id="main-content" class="column column-offset-20">
    <!--Posts-->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
    <h5 class="mt-2">Posts</h5><a class="anchor" name="posts"></a>
    <div class="row grid-responsive">
      <div class="column pt-card">
        <a class="button cr-post" id="createNewProduct" href="{{ route('post.create') }}">Create Posts</a>
        <div class="main-pt clearfix">
          <table>
            <thead>
              <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td><img src="{{ asset('storage/post/'.$post->img)}}" width="100px"></td>
                <td class="clearfix"><a href="{{ route('post.edit',$post->id)}}" class="edit" >Edit</a>
                    <form action="{{ route('post.destroy', $post->id)}}" method="post" class="delete-form">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <button type="submit" class="delete show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>

              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $posts->links() !!}
        </div>

      </div>


    </div>
    <p class="credit">SCM OJT Batch 2 group I<a href="#">Group I</a></p>
  </section>

@endsection
