@extends('layouts.admin-app')
@section('title', '')
@section('content')
  <section id="main-content" class="column column-offset-20">
    <!--Posts-->
    <h5 class="mt-2">Posts</h5><a class="anchor" name="posts"></a>
    <div class="row grid-responsive">
      <div class="column pt-card">
        <a class="button cr-post" id="myBtn">Create Posts</a>
        <div class="main-pt clearfix">
          <!-- The Modal -->
          <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Create Posts</h2>
              </div>
              <div class="modal-body">
                <form>

                  <label for="title">Name</label>
                  <input type="text" placeholder="Title" id="title">

                  <label for="description">Description</label>
                  <textarea placeholder="Your Text" id="description"></textarea>

                  <input class="button-primary" type="submit" value="Send">
                  <input class="button-secondary" type="submit" value="Clear">

                </form>
              </div>
            </div>
          </div>
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
