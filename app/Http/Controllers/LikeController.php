<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Contracts\Services\LikeServiceInterface;



class LikeController extends Controller
{

    private $likeService;

    public function __construct(LikeServiceInterface $likeService)
    {
        $this->likeService = $likeService;
    }

    public function like($id)
    {
        $count = $this->likeService->like($id);
        return response()->json(['likes' => $count]);
    }
}
