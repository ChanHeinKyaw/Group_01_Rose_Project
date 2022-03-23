@extends('layouts.admin-app')
@section('title', '')
@section('content')
  <section id="main-content" class="column column-offset-20">
    <!--Posts-->
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
              <tr>
                <td>1</td>
                <td>UI Developer</td>
                <td>23</td>
                <td>Philadelphia, PA</td>
                <td><a class="edit">Edit</a><a class="delete">Delete</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>UI Developer</td>
                <td>23</td>
                <td>Philadelphia, PA</td>
                <td><a class="edit">Edit</a><a class="delete">Delete</a></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>


    </div>
    <p class="credit">SCM OJT Batch 2 group I<a href="#">Group I</a></p>
  </section>

@endsection
