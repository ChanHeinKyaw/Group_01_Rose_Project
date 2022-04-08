<?php

namespace App\Services\Contact;

use App\Dao\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contracts\Dao\Contact\ContactDaoInterface;
use App\Contracts\Services\Contact\ContactServiceInterface;


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
    $contact = $this->contactDao->storeContactForm($request);
     //  Send mail to admin
     \Mail::send('ui-panel.contactMail', array(
      'name' => $contact['name'],
      'email' => $contact['email'],
      'phone' => $contact['phone'],
      'subject' => $contact['subject'],
      'message' => $contact['message'],
  ), function ($message) use ($request) {
      $message->from($request->email);
      $message->to('admin@gmail.com', 'Admin')->subject("Contact Mail to Admin");
  });
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
