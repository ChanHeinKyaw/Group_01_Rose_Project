<?php

namespace App\Contracts\Dao;

use Illuminate\Http\Request;

interface CommentDaoInterface
{
  public function comment($request,$id);
}
