@extends('layouts.ui-app')
@section('title', 'Rose | Home Page')
@section('content')
  @if (session('status'))
    <div class="alert">
      {{ session('status') }}
    </div>
  @endif
  <div class="big-row">
    <img src="img/big-img.png" alt="" class="big-img">
    <div class="big-quote">
      <h2>" သင် အကူအညီမဲ့နေတယ်လို့ ခံစားရလျှင် တစ်စုံတစ်ဦးအား ကူညီလိုက်ပါ။ "</h2>
    </div>
  </div>

  <div class="blog-sec">

    <div class="article-div inner-container">
      <h3>သုတစာစဉ်များ</h3>
      <div class="grid-div">
        @foreach ($posts as $post)
        <article class="article">
          <h4>{{ $post->title }}</h4>
          <img src="{{ asset('storage/post/' . $post->img) }}" alt="Blog Image" class="article-img">
          <p>{{ $post->description }}</p>

          <button><a href="{{ url('post/'.$post->id.'/detail') }}">ဆက်ဖတ်ရန်</a></button>
        </article>
        @endforeach
      </div>

    </div>

    <footer id="footer">
    </footer>
  </div>
@endsection
