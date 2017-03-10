<?php

namespace Foostart\Post\Controlers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;
use Foostart\Post\Models\Posts;

class PostFrontController extends Controller
{
    public $data = array();
    public function __construct() {

    }

    public function index(Request $request)
    {

        $obj_post = new Posts();
        $posts = $obj_post->get_posts();
        $this->data = array(
            'request' => $request,
            'posts' => $posts
        );
        return view('post::post.index', $this->data);
    }

}