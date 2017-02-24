<?php

namespace Foostart\Sample;

use App\Http\Controllers\Controller;
use Foostart\Sample\model\Sample;


Class SampleController extends Controller
{

    public function index()
    {
    		$obj = new sample();
    		$sample = $obj->getData();

    		return view('sample::index', array('sample'=> $sample));

        
    }

}
