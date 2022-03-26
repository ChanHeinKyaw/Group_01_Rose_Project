<?php

namespace App\Contracts\Dao\Contact;

use Illuminate\Http\Request;


interface ContactDaoInterface
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

  public function userProfile();
  public function updateUserProfile(Request $request);
  public function adminProfile();
  public function updateAdminProfile(Request $request);
  
}