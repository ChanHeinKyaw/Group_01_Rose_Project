<?php

namespace App\Dao;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Contracts\Dao\CommentDaoInterface;

class commentDao implements CommentDaoInterface
{
  public function comment($request, $id)
  {
    $user_id = Auth::user()->id;
    Comment::create([
      'post_id' => $id,
      'user_id' => $user_id,
      'comment' => $request->comment,
    ]);
  }
}
