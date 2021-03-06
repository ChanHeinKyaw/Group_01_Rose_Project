<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Contracts\Services\PostServiceInterface;

class PostController extends Controller
{


    private $postService;
    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getAll();
        return view('admin-panel.post.post',compact('posts'));
    }
    public function show(Post $post){
        $posts = $this->postService->seemore( $post);
        return view('admin-panel.post.post-show',compact('posts'));
    }
     public function create()
    {
        return view('admin-panel.post.post-create');
    }

    public function store(Request $request)
    {
        $this->postService->create($request);
        return redirect()->route('post.index')->with("success", "Post Create successfully");
    }

    public function edit(Post $post)
    {
        return view('admin-panel.post.post-edit',compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this->postService->update($request, $post);
        return  redirect()->route('post.index')->with("success", "Post Update successfully");
    }

    public function destroy(Post $post)
    {
        $this->postService->delete($post);
        return redirect()->back()->with("success", "Post deleted successfully");
    }
}
