<?php

namespace Foostart\Sample;

use App\Http\Controllers\Controller;
use Foostart\Sample\model\agents;
use Foostart\Sample\model\contact;
use Foostart\Sample\model\footer;
use Foostart\Sample\model\footer_img;
use Foostart\Sample\model\highlight;
use Foostart\Sample\model\link;
use Foostart\Sample\model\said;
use Foostart\Sample\model\service;

Class SampleController extends Controller
{

    public function index()
    {
    		$obj = new contact();
    		$contact = $obj->getData();

    		$obj = new agents();
    		$agents = $obj->getData();

            $obj = new footer();
    		$footer = $obj->getData();

    		$obj = new footer_img();
    		$footer_img = $obj->getData();


    		$obj = new highlight();
    		$highlight = $obj->getData();

    		$obj = new link();
    		$link = $obj->getData();

    		$obj = new said();
    		$said = $obj->getData();

    		$obj = new service();
    		$service = $obj->getData();


    		return view('sample::index', array('agents'=> $agents,'contact'=> $contact,'footer'=> $footer,'footer_img'=> $footer_img,'highlight'=> $highlight,'link'=> $link,'said'=> $said,'service'=> $service));

        
    }

}
