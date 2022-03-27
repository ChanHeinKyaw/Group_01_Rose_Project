<?php

namespace App\Contracts\Services\User;

use Illuminate\Http\Request;

/**
 * Interface for post service
 */
interface UserServiceInterface
{
  /**
   * To get userList data 
   *
   * @return Object $userList user Object
   */
  public function userList();

  /**
   * To update userRole by user ID data 
   * @param Request $id with input
   * @return Object $updateUserRole user Object
   */
  public function updateUserRole($id);

  /**
   * To search user data 
   * @param Request $request request with inputs
   * @return Object $user user Object
   */
  public function searchuser(Request $request);

  /**
   * To get userProfile data 
   *
   * @return Object $user userProfile Object
   */
  public function userProfile();

  /**
   * To update userProfile data 
   * @param Request $request request with inputs
   * @return Object $user userProfile Object
   */
  public function updateUserProfile(Request $request);

  /**
   * To get adminProfile data 
   *
   * @return Object $user adminProfile Object
   */
  public function adminProfile();

  /**
   * To update adminProfile data 
   * @param Request $request request with inputs
   * @return Object $user adminProfile Object
   */
  public function updateAdminProfile(Request $request);
}
