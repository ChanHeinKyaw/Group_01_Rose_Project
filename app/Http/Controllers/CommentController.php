<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Services\CommentServiceInterface;

class CommentController extends Controller
{
    private $commentService;

    public function __construct(CommentServiceInterface $commentService)
    {
        $this->commentService = $commentService;
    }
    
    public function comment(Request $request, $id)
    {
        $this->commentService->comment($request, $id);
        return response()->json(['status' => true]);
    }
}
