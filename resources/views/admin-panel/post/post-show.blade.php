@extends('layouts.admin-app')
@section('title', '')
@section('content')
    <section id="main-content" class="column column-offset-20">
        <!--Posts-->
        <div class="seemain">
        <div class="pull-right back">
            <a class="submit" href="{{ url('admin/post') }}"> Back</a>
        </div>
        <div class="seemoresec grid-responsive">

          <div class="column pt-card">
              <div class="seeform">
                <img src="{{ asset('storage/post/'.$posts->img)}}" width="100px" class="seeimg">
                <div class="seebody">
                    <div class="">
                        <div class="">
                            <label class="seelable">Title         :</label><strong>{{ $posts->title }}</strong>
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <label  class="seelable">Description      :</label><p class="seedes">{{ $posts->description }}</p>
                        </div>
                    </div>
                </div>

            </div>
          </div>
        </div>
        </div>
    </section>

 @endsection
