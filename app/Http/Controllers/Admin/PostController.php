<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index()

    {    $items = Post::latest()->get();
        return view('admin-panel.post');
    }
    public function create()
    {
        return view('admin-panel.post-create');
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => ["required"],
            "description" => ["required"],
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $post = Post::Create( [
                'title' => $request->title,
                'description' => $request->description,
                'img' => $request->img,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
                ]);
         return redirect()->route('admin-panel.post')->with("success", "Post Create successfully");

    }

}