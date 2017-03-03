<?php

namespace Foostart\Sample\Controlers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;
use Foostart\Sample\Models\faqs;

class FaqFrontController extends Controller
{
    public $data = array();
    public function __construct() {

    }

    public function index(Request $request)
    {

        $obj_faq = new Faqs();
        $faqs = $obj_faq->get_faqs();
        $this->data = array(
            'request' => $request,
            'faqs' => $faqs
        );
        return view('sample::faq.index', $this->data);
    }

}