@extends('layouts.admin-app')
@section('title', '')
@section('content')
    <section id="main-content" class="column column-offset-20">
        <!--Posts-->
        <h5 class="mt-2">Posts</h5><a class="anchor" name="posts"></a>
        <div class="row grid-responsive">
            <div class="column pt-card">
                <h1>Create Post</h1>
                <div class="main">
                    <form action="{{  route('post.store') }}" method="POST">
                      @csrf
                    <label for="name" class="col-sm-2">Image</label>
                    <input type="file" class="form-control" id="img" name="img"accept="image/x-png, image/gif, image/jpeg" />
                      <label for="name" class="col-sm-2">Name</label>
                      <input type="text" placeholder="Title" name="title"><br>
                      <label class="col-sm-2">Description</label>
                      <textarea placeholder="Your Text" id="description" name="descritption"></textarea>
                      <button type="submit" class="submit">Save</button>
                      {{--<button type="submit" class="submit">Clear</button>--}}
                    </form>
                  </div>
            </div>
        </div>
    </section>

@endsection
