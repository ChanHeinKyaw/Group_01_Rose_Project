<?php


namespace App\Http\Controllers\Contact;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Contracts\Services\Contact\ContactServiceInterface;

class ContactController extends Controller
{

    private $contactInterface;

    public function __construct(ContactServiceInterface $contactServiceInterface)
    {
        $this->contactInterface = $contactServiceInterface;
    }
    public function contactForm()
    {
        return view('ui-panel.contact');
    }

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
            $message->to('htaylail.hcis@gmail.com', 'Admin')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Contact Form is Submit Successfully']);
    }

    public function contactList()
    {
        $contactList = $this->contactInterface->contactList();
        return view('admin-panel.contact', compact('contactList'))
            ->with('no');
    }


    /**
     * To delete contact by id
     * @param string $id contact id
     * @return string $message message success or not
     */
    public function deleteContactById($id)
    {
        $this->contactInterface->deleteContactById($id);
        return redirect('/contact');
    }

    public function searchContact(Request $request)
    {
        $contactList = $this->contactInterface->searchContact($request);
        return view('admin-panel.contact', compact('contactList'))
            ->with('no');
    }
}
