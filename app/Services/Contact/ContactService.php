<?php

namespace App\Services\Contact;

use Illuminate\Http\Request;
use App\Contracts\Dao\Contact\ContactDaoInterface;
use App\Contracts\Services\Contact\ContactServiceInterface;
use App\Dao\Contact;


/**
 * Service class for post.
 */
class ContactService implements ContactServiceInterface
{
  /**
   * post dao
   */
  private $contactDao;
  /**
   * Class Constructor
   * @param ContactDaoInterface
   * @return
   */
  public function __construct(ContactDaoInterface $contactDao)
  {
    $this->contactDao = $contactDao;
  }



  /**
   * To get post list
   * @return array $postList Post list
   */
  public function contactList()
  {
    return $this->contactDao->contactList();
  }

  /**
   * To delete post by id
   * @param string $id post id
   * @return string $message message success or not
   */
  public function deleteContactById($id)
  {
    return $this->contactDao->deleteContactById($id);
  }

  /**
   * To get post by id
   * @param string $id post id
   * @return Object $post post object
   */
  public function getContactById($id)
  {
    return $this->contactDao->getContactById($id);
  }

  public function storeContactForm(Request $request)
  {
    return $this->contactDao->storeContactForm($request);
  }

  /**
   * To search contact
   * @param Request $request request with inputs
   * @return Object $contact contact Object
   */
  public function searchContact(Request $request)
  {
    return $this->contactDao->searchContact($request);
  }
  
}
