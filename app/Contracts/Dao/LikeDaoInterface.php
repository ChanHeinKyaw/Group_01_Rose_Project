<?php

namespace App\Contracts\Dao;

use Illuminate\Http\Request;

interface LikeDaoInterface
{
  public function like($id);
}
