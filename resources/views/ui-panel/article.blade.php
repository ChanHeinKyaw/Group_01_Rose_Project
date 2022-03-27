@extends('layouts.ui-app')
@section('title', 'နှင်းဆီ🌹')
@section('content')

  <div class="blank-space"></div>
  <div class="blog-sec p-top">
    <div class="article-div inner-container">
      <div class="center">
        <h3 class="article-h3">"သုတစာစဉ်မျာ"</h3>
      </div>

      <div class="article-blog-img">
        <img src="{{ asset('storage/post/' . $post->img) }}" class="article-src-img" alt="Article Image">
      </div>

      <div class="article-sec">
        <p>{{ $post->description }}</p>
      </div>
    </div>
    <div class="article-div inner-container">
      <i class="far fa-heart like {{ $post->likes->contains('user_id', auth()->id()) ? 'disable' : '' }}"
        data-id={{ $post->id }}>{{ $post->likes->count() }}</i>
      <a href="#" onclick="togglePopup()" class="comment"><i class="far fa-comment"></i> comment</a>
    </div>
    <footer id="footer">
    </footer>
  </div>

  <div class="popup" id="popup-1">
    <div class="overlay"></div>
    <div class="content">
      <div class="close-btn" onclick="togglePopup()">&times</div>
      @csrf
      <textarea name="comment" cols="50" rows="3" placeholder="Comment..." id="comment"></textarea>
      <button class="cmt-btn" id="cmtBtn" data-id={{ $post->id }}><i class="far fa-comment"></i> Send</button>
      <br><br>
      @if (count($post->comments) > 0)
        @foreach ($post->comments as $comment)
          <div class="comment" id="comment-box">

            @if ($comment->user->profile)
              <img src="{{ asset('storage/images/' . $comment->user->profile) }}" alt="" class="img-profile">
            @elseif($comment->user->profile)
              <img src="{{ asset('image/user.png') }}" alt="" title="" class="img-profile">
            @endif
          
            <strong class="name">{{ $comment->user->name }}</strong><br>

            <div class="message-box">
              {{ $comment->comment }}
            </div>
          </div><br>
        @endforeach
      @endif
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      $('#cmtBtn').click(function() {
        var id = $(this).data('id');
        var cmt_value = $("#comment").val();
        $.ajax({
          method: "POST",
          url: `/comment/${id}`,
          data: {
            comment: cmt_value,
            _token: "{{ csrf_token() }}",
          },
          success: function(res) {
            $cmt_txt =
              '<img src="{{ asset('storage/post/' . $post->img) }}" alt=""><strong class="name">{{ auth()->user()->name }}</strong><br><div class="message-box">' +
              cmt_value + '</div><br>';
            $('#comment-box').prepend($cmt_txt);
            $("#comment").val("");
          }
        })
      })
    })
  </script>
@endsection
