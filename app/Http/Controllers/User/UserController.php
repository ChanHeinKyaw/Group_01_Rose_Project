<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Contracts\Services\User\UserServiceInterface;

class UserController extends Controller
{

    public function __construct(UserServiceInterface $userServiceInterface)
    {
        $this->userInterface = $userServiceInterface;
    }

    public function userList()
    {
        $userList = $this->userInterface->userList();
        return view('admin-panel.user', compact('userList'))
            ->with('no');
    }

    public function updateUserRole($id)
    {
        $userList = $this->userInterface->updateUserRole($id);
        return view('admin-panel.user', compact('userList'))
            ->with('no');
    }

    public function searchUser(Request $request)
    {
        $userList = $this->userInterface->searchUser($request);
        return view('admin-panel.user', compact('userList'))
            ->with('no');
    }
}