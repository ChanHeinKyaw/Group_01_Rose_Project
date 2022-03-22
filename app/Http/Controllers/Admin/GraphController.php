<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class GraphController extends Controller
{
    public function index()
    {
        return view('admin-panel.graph');
    }
}
