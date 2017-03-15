<?php

namespace Foostart\Service\Controlers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;
use Foostart\Service\Models\Services;

class ServiceFrontController extends Controller
{
    public $data = array();
    public function __construct() {

    }

    public function index(Request $request)
    {

        $obj_service = new Contacts();
        $services = $obj_service->get_services();
        $this->data = array(
            'request' => $request,
            'services' => $services
        );
        return view('service::service.index', $this->data);
    }

}