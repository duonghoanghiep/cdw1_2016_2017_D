<?php namespace Foostart\Sample\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foostart\Sample\Models\slides;
/**
 * Validators
 */
use Foostart\Sample\Validators\SlideAdminValidator;

class SlideAdminController extends Controller {

   public $data_view = array();

    private $obj_slide = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_slide = new slides();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {

        $params = array();

        $list_slide = $this->obj_slide->get_slides($params);

        $this->data_view = array_merge($this->data_view, array(
            'slides' => $list_slide,
            'request' => $request
        ));
        return view('sample::slide.admin.slide_list', $this->data_view);
    }
    
    
    public function edit(Request $request) {

       
        $slide = NULL;
        $slide_id = (int) $request->get('id');


        if (!empty($slide_id) && (is_int($slide_id))) {
            $slide = $this->obj_slide->find($slide_id);
        }

        $this->data_view = array_merge($this->data_view, array(
            'slide' => $slide,
            'request' => $request
        ));
        return view('sample::slide.admin.slide_edit', $this->data_view);


    }
    
    
    public function post(Request $request) {
                $this->obj_validator = new SlideAdminValidator();


        $input = $request->all();

        $slide_id = (int) $request->get('id');
        $slide = NULL;


        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($slide_id) && is_int($slide_id)) {

                $slide = $this->obj_slide->find($slide_id);
            }

        } else {
            if (!empty($slide_id) && is_int($slide_id)) {

                $slide = $this->obj_slide->find($slide_id);

                if (!empty($slide)) {

                    $input['slide_id'] = $slide_id;
                    $slide = $this->obj_slide->update_slide($input);

                    //Message
                    \Session::flash('message', trans('sample::slide.message_update_successfully'));
                    return Redirect::route("admin_slide.edit", ["id" => $slide->slide_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('sample::slide.message_update_unsuccessfully'));
                }
            } else {

                $slide = $this->obj_slide->add_slide($input);

                if (!empty($slide)) {

                    //Message
                    \Session::flash('message', trans('sample::slide.message_add_successfully'));
                    return Redirect::route("admin_slide.edit", ["id" => $slide->slide_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('sample::slide.message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'slide' => $slide,
            'request' => $request,
        ), $data);

        return view('sample::slide.admin.slide_edit', $this->data_view);
    }


    
    public function delete(Request $request) {

        $slide = NULL;
        $slide_id = $request->get('id');

        if (!empty($slide_id)) {
            $slide = $this->obj_slide->find($slide_id);

            if (!empty($slide)) {
                  //Message
                \Session::flash('message', trans('sample::slide.message_delete_successfully'));

                $slide->delete();
            }
        } else {

        }

        $this->data_view = array_merge($this->data_view, array(
            'slide' => $slide,
        ));

        return Redirect::route("admin_slide");
    }
    
   
    
    
}