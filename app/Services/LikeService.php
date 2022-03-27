<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Contracts\Dao\LikeDaoInterface;
use App\Contracts\Services\LikeServiceInterface;

class LikeService implements LikeServiceInterface
{
  private $likeDao;
  
  public function __construct(LikeDaoInterface $likeDao)
  {
    $this->likeDao = $likeDao;
  }

  public function like($id)
  {
    return $this->likeDao->like($id);
  }
}
