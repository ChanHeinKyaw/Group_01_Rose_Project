<?php

namespace App\Contracts\Services\Contact;

use Illuminate\Http\Request;
/**
 * Interface for post service
 */
interface ContactServiceInterface
{
  /**
   * To get contactList data 
   *
   * @return Object $contactList  Object
   */
  public function contactList();

  /**
   * To delete contact by ID 
   * @param Request $id with input
   * @return Object $contact contact Object
   */
  public function deleteContactById($id);

  /**
   * To get contact by ID data 
   * @param Request $id with input
   * @return Object $contact contact Object
   */
  public function getContactById($id);

  /**
   * To store contact data 
   * @param Request $request request with inputs
   * @return Object $contact contact Object
   */
  public function storeContactForm(Request $request);

  /**
   * To search contact data 
   * @param Request $request request with inputs
   * @return Object $contact contact Object
   */
  public function searchContact(Request $request);
}
