<?php

namespace App\Contracts\Dao\User;

use Illuminate\Http\Request;


interface UserDaoInterface
{  
  public function userList();
  public function updateUserRole($id);

  /**
   * To search user data 
   * @param Request $request request with inputs
   * @return Object $user user Object
   */
  public function searchuser(Request $request);
}