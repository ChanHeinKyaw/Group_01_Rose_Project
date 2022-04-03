<?php

namespace App\Contracts\Services;
use Illuminate\Http\Request;

interface PostServiceInterface {

    public function getAll();

    public function update($request,$post);

    public function create(Request $request);

    public function delete($post);
}