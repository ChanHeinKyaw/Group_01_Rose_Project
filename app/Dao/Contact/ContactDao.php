<?php

namespace App\Dao\Contact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contracts\Dao\Contact\ContactDaoInterface;

/**
 * Data accessing object for post
 */
class ContactDao implements ContactDaoInterface
{
  public function contactList()
  {
    $contactList = DB::table('contacts')
                ->orderBy('id', 'desc')
                ->get();
    return $contactList; 
  }

  public function deleteContactById($id)
  {
    $contact =Contact::findOrFail($id);
    $contact->delete();
    return 'Deleted Successfully!';
  }

  public function getContactById($id)
  {
    $contact = Contact::find($id);
    return $contact;
  }

  public function storeContactForm(Request $request)
  {
   
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|digits:11|numeric',
        'subject' => 'required',
        'message' => 'required',
    ]);
    $contact = new Contact();
    $contact->name = $request['name'];
    $contact->email = $request['email'];
    $contact->phone = $request['phone'];
    $contact->subject = $request['subject'];
    $contact->message = $request['message'];
    
    $contact->save();    
    return $contact; 
  }

  public function searchContact(Request $request)
  {
    $search_text = $request->get('query');
    $contactList = Contact::where('name','LIKE','%' .$search_text. '%')
              ->orWhere('phone', 'LIKE', '%' . $search_text . '%')
              ->orWhere('email', 'LIKE', '%' . $search_text . '%')
              ->orWhere('subject', 'LIKE', '%' . $search_text . '%')
              ->orWhere('message', 'LIKE', '%' . $search_text . '%')
              ->get();

    return $contactList;
  }
}



