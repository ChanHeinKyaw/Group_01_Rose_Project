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
            <input type="file" placeholder="Title" id="title" class="fileInput">
            <a class="button cr-posts">Import</a>
            <a class="button cr-posts">Export</a>
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
              <tr>
                <td>1</td>
                <td>UI Developer</td>
                <td>23</td>
                <td>Philadelphia, PA</td>

              </tr>
              <tr>
                <td>1</td>
                <td>UI Developer</td>
                <td>23</td>
                <td>Philadelphia, PA</td>

              </tr>
            </tbody>
          </table>
        </div>


      </div>
    </div>
    <p class="credit">SCM OJT Batch 2 group I<a href="#">Group I</a></p>
  </section>
@endsection
