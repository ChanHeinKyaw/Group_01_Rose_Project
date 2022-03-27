<?php

namespace App\Services;

use App\Contracts\Dao\CommentDaoInterface;
use App\Contracts\Services\CommentServiceInterface;

class CommentService implements CommentServiceInterface
{
  private $commentDao;

  public function __construct(CommentDaoInterface $commentDao)
  {
    $this->commentDao = $commentDao;
  }

  public function comment($request, $id)
  {
    return $this->commentDao->comment($request, $id);
  }
}
