<?php

namespace App\Contracts\Dao;

use Illuminate\Http\Request;

interface PostDaoInterface {

    public function getAll();

    public function update($request,$post);

    public function create(Request $request);

    public function delete($post);

    public function search(Request $request);
}
