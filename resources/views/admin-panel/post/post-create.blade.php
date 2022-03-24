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
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Title</strong>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Title">
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Description</strong>
                                <textarea class="form-control" col="4" name="description" placeholder="Enter Description"></textarea>
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Post Image</strong>
                                <input type="file" name="img" class="form-control" placeholder="">
                                <span class="text-danger">{{ $errors->first('img') }}</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </div>
                </form>
                {{-- <form action="{{  route('post.store') }}" method="POST">
                      @csrf
                    <label for="name" class="col-sm-2">Image</label>
                    <input type="file" class="form-control" id="img" name="img"accept="image/x-png, image/gif, image/jpeg" />
                      <label for="name" class="col-sm-2">Name</label>
                      <input type="text" placeholder="Title" name="title"><br>
                      <label class="col-sm-2">Description</label>
                      <textarea placeholder="Your Text" id="description" name="descritption"></textarea>
                      <button type="submit" class="submit">Save</button>

                    </form> --}}
            </div>
        </div>
        </div>
    </section>

@endsection
