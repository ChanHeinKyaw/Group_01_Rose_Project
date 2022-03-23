<?php

namespace App\Contracts\Services\Contact;

use Illuminate\Http\Request;

/**
 * Interface for post service
 */
interface ContactServiceInterface
{

  public function contactList();
  public function deleteContactById($id);
  public function getContactById($id);
  public function storeContactForm(Request $request);

  /**
   * To search contact data 
   * @param Request $request request with inputs
   * @return Object $contact contact Object
   */
  public function searchContact(Request $request);  

}