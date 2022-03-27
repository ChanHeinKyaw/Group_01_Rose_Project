<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Contracts\Services\User\UserServiceInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class UserController extends Controller
{
  public function __construct(UserServiceInterface $userServiceInterface)
  {
    $this->userInterface = $userServiceInterface;
  }

  public function index()
  {
    return view('admin-panel.index');
  }


  /**
   * To get userList
   * @return object $userList 
   */
  public function userList()
  {
    $userList = $this->userInterface->userList();
    return view('admin-panel.user', compact('userList'))
      ->with('no');
  }

  /**
   * To update contact by request
   * @param  $request request inputs
   * @return Object $request updateUrserRole data
   */
  public function updateUserRole($id)
  {
    $userList = $this->userInterface->updateUserRole($id);
    return view('admin-panel.user', compact('userList'))
      ->with('no');
  }

  /**
   * To search user by request
   * @param  $request request inputs
   * @return Object $request serach data
   */
  public function searchUser(Request $request)
  {
    $userList = $this->userInterface->searchUser($request);
    return view('admin-panel.user', compact('userList'))
      ->with('no');
  }

  /**
   * To get userProfile data
   * 
   * @return object $user 
   */
  public function userProfile()
  {
    $user = $this->userInterface->userProfile();
    return view('ui-panel.profile', compact('user'));
  }

  /**
   * To update userProfile data
   * 
   * @return object $user 
   */
  public function updateUserProfile(Request $request)
  {
    $this->userInterface->updateUserProfile($request);
    return redirect('/profile');
  }

  /**
   * To get adminProfile data
   * 
   * @return object $user 
   */
  public function adminProfile()
  {
    $user = $this->userInterface->adminProfile();
    return view('admin-panel.profile', compact('user'));
  }

  /**
   * To update adminProfile data
   * 
   * @return object $user 
   */
  public function updateAdminProfile(Request $request)
  {
    $this->userInterface->updateAdminProfile($request);
    return redirect('admin/profile');
  }
}
