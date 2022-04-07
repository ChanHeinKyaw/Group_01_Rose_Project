<?php

namespace App\Services\User;

use Illuminate\Http\Request;
use App\Contracts\Dao\User\UserDaoInterface;
use App\Contracts\Services\User\UserServiceInterface;
use App\Dao\User;


/**
 * Service class for user.
 */
class UserService implements UserServiceInterface
{
  /**
   * user dao
   */
  private $userDao;
  /**
   * Class Constructor
   * @param UserDaoInterface
   * @return
   */
  public function __construct(UserDaoInterface $userDao)
  {
    $this->userDao = $userDao;
  }

  /**
   * To get user list
   * @return array $userList User list
   */
  public function userList()
  {
    return $this->userDao->userList();
  }

  /**
   * To update user role
   * @return array $user with $id
   */
  public function updateUserRole($id)
  {
    return $this->userDao->updateUserRole($id);
  }
  /**
   * To search user
   * @param Request $request request with inputs
   * @return Object $user user Object
   */
  public function searchUser(Request $request)
  {
    return $this->userDao->searchUser($request);
  }

  /**
   * To get user profile
   * @return Object $user
   */
  public function userProfile()
  {
    return $this->userDao->userProfile();
  }

  /**
   * To update user profile
   * @return Object $user update data
   */
  public function updateUserProfile(Request $request)
  {
    return $this->userDao->updateUserProfile($request);
  }

  /**
   * To get admin profile
   * @return Object $admin
   */
  public function adminProfile()
  {
    return $this->userDao->adminProfile();
  }

  /**
   * To update admin profile
   * @return Object $admin update data
   */
  public function updateAdminProfile(Request $request)
  {
    return $this->userDao->updateAdminProfile($request);
  }


  /**
   * To change user password
   * @return Object $user
  */
  public function changeUserPassword()
  {
    return $this->userDao->changeUserPassword();
  }


  /**
   * To update user passowrd
   * @return Object $user update password data
  */
  public function updateUserPassword(Request $request)
  {
    return $this->userDao->updateUserPassword($request);
  }

  /**
   * To change admin password
   * @return Object $admin 
  */
  public function changeAdminPassword()
  {
    return $this->userDao->changeAdminPassword();
  }


  /**
   * To update admin passowrd
   * @return Object $admin update password data
  */
  public function updateAdminPassword(Request $request)
  {
    return $this->userDao->updateAdminPassword($request);
  }
 
}
