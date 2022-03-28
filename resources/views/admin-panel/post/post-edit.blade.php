@extends('layouts.admin-app')
@section('title', '')
@section('content')
    <section id="main-content" class="column column-offset-20">
        <!--Posts-->

        <h5 class="mt-2">Posts</h5><a class="anchor" name="posts"></a>
        <div class="row grid-responsive">
            <div class="pull-right">
                <a class="submit" href="{{ url('admin/post') }}"> Back</a>
            </div>
            <div class="column pt-card">
                <h1>Edit Post</h1>

                <div class="main">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Title</strong>
                                <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Enter Title">
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Description</strong>
                            <textarea class="form-control" col="4" name="description" placeholder="Enter Description">{{ $post->description }}</textarea>
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Post Image</strong>
                            @if($post->img)
                            <img id="original" src="{{ asset('storage/post/'.$post->img) }}" height="70" width="70">
                            @endif
                            <input type="file" name="img" value="{{ $post->img }}" class="form-control" placeholder="">
                            <span class="text-danger">{{ $errors->first('img') }}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
                </form>
                  </div>
            </div>
        </div>
    </section>

@endsection
