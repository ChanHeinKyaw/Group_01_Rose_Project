@extends('layouts.admin-app')
@section('title', '')
@section('content')
    <section id="main-content"  class="column column-offset-20 ">
        <!--Posts-->
        <div class="seemain clearfix">
        <div class="seemoresec grid-responsive">
          <div class="column pt-card">
            <div class="pull-right back">
                <a class="submit" href="{{ url('admin/post') }}"> Back</a>
            </div>
              <div class="seeform">
                <img src="{{ asset('storage/post/'.$posts->img)}}" width="100px" class="seeimg">
                <div class="seebody clearfix">
                    <div class="seeparent clearfix">
                        <div class="seeleft">
                            <strong class="seelable">Title         :</strong>
                        </div>
                        <div class="seeright">
                            <p class="seedetails">{{ $posts->title}}</p>
                        </div>
                    </div>
                    <div class="seeparent clearfix">
                        <div class="seeleft">
                            <strong class="seelable">Description         :</strong>
                        </div>
                        <div class="seeright">
                            <p class="seedetails">{{ $posts->description}}</p>
                        </div>
                    </div>
                </div>

            </div>
          </div>
        </div>
        </div>
    </section>

 @endsection
