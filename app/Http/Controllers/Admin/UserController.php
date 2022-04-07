<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Contracts\Services\User\UserServiceInterface;



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
    $user = User::find($id);
    if ($user->type == 1) {
      $user->type = 0;

      $user->save();

      $userList = $this->userInterface->updateUserRole($id);

      return redirect('/');
    } elseif ($user->type == 0) {
      $user->type = 1;
    }
    $user->save();

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
   * To get userProfile data
   * 
   * @return object $user 
   */
  public function changeUserPassword()
  {
    $this->userInterface->changeUserPassword();
    return view('ui-panel.change-password');
  }


  public function updateUserPassword(Request $request)
  {
    $this->userInterface->updateUserPassword($request);
    return  redirect()->back();
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

  /**
   * To get userProfile data
   * 
   * @return object $user 
   */
  public function changeAdminPassword()
  {
    $this->userInterface->changeUserPassword();
    return view('admin-panel.change-password');
  }

  /**
   * To update updateAdminPassword data
   * 
   * @return object $user 
   */
  public function updateAdminPassword(Request $request)
  {    
    $this->userInterface->updateAdminPassword($request);
    return  redirect()->back();
  } 
}
