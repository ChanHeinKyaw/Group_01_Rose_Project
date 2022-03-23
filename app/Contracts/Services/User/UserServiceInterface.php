<?php

namespace App\Contracts\Services\User;

use Illuminate\Http\Request;

/**
 * Interface for post service
 */
interface UserServiceInterface
{

  public function userList();
  public function updateUserRole($id);


  /**
   * To search user data 
   * @param Request $request request with inputs
   * @return Object $user user Object
   */
  public function searchUser(Request $request);  

}