<?php

namespace Foostart\Sample\Controlers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;
use Foostart\Sample\Models\slides;

class SlideFrontController extends Controller
{
    public $data = array();
    public function __construct() {

    }

    public function index(Request $request)
    {

        $obj_slide = new Faqs();
        $slides = $obj_slide->get_slides();
        $this->data = array(
            'request' => $request,
            'slides' => $slides
        );
        return view('sample::slide.index', $this->data);
    }

}