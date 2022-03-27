<?php

namespace App\Contracts\Services;

interface CommentServiceInterface
{
  public function comment($request, $id);
}
