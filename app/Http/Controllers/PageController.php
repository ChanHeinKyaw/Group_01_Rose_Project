<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('ui-panel.index', compact('posts'));
    }

    public function postDetail($id)
    {
        $post = Post::find($id);
        return view('ui-panel.article',compact('post'));
    }

    public function report()
    {
        return view('ui-panel.report');
    }

    public function contact()
    {
        return view('ui-panel.contact');
    }

    public function about()
    {
        return view('ui-panel.about');
    }

    public function profile()
    {
        return view('ui-panel.profile');
    }
}
