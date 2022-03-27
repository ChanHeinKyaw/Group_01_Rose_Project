<?php

namespace App\Dao;


use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Contracts\Dao\LikeDaoInterface;

class likeDao implements LikeDaoInterface
{
  public function like($id)
  {
    $post = Post::find($id);
    if ($post->likes->contains('user_id', auth()->id())) {
      $post->likes()->where('user_id', auth()->id())->delete();
    } else {
      Like::create([
        'post_id' => $id,
        'user_id' => Auth::user()->id,
      ]);
    }
    $count = $post->likes()->count();

    return $count;
  }
}
