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
  
}
