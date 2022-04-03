<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Contracts\Services\Contact\ContactServiceInterface;
class ContactUsController extends Controller
{
    private $contactInterface;

    public function __construct(ContactServiceInterface $contactServiceInterface)
    {
        $this->contactInterface = $contactServiceInterface;
    }
    public function index()
    {
        return view('admin-panel.contact');
    }
  

    /**
     * To show  contactForm view
     * 
     * @return View  contactForm
     */
    public function contactForm()
    {
        return view('ui-panel.contact');
    }

    /**
     * To save conact data and mail to admin
     * 
     * @return View success message page
     */
    public function storeContactForm(Request $request)
    {
        $contact = $this->contactInterface->storeContactForm($request);
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
        return redirect()->back()->with(['success' => 'Contact Form is Submit Successfully']);
    }

    /**
     * To get contact list
     * 
     * @return object $contactList 
     */
    public function contactList()
    {
        $contactList = $this->contactInterface->contactList();
        return view('admin-panel.contact', compact('contactList'))
            ->with('no');
    }

    /**
     * To delete contact by id
     * @param string $id contact id
     * @return Object $message message success or not
     */
    public function deleteContactById($id)
    {
        $this->contactInterface->deleteContactById($id);
        return redirect('/admin/contact');
    }

    /**
     * To search contact by request
     * @param  $request request inputs
     * @return Object $request serach data
     */
    public function searchContact(Request $request)
    {
        $contactList = $this->contactInterface->searchContact($request);
        return view('admin-panel.contact', compact('contactList'))
            ->with('no');
    }
}
