<?php

namespace App\Contracts\Services;
use Illuminate\Http\Request;

interface LikeServiceInterface {
    public function like($id);
}