<?php namespace Foostart\Contact\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foostart\Contact\Models\Contacts;
/**
 * Validators
 */
use Foostart\Contact\Validators\ContactAdminValidator;
class ContactFrontController extends Controller
{
    public $data = array();
    public function __construct() {

    }

    public function index(Request $request)
    {

        $obj_contact = new Contacts();
        $contacts = $obj_contact->get_contacts();
        $this->data = array(
            'request' => $request,
            'contacts' => $contacts
        );
        return view('contact::contact.index', $this->data);
    }

}