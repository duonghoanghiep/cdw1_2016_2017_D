<?php namespace Foostart\Sample\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foostart\Sample\Models\faqs;
/**
 * Validators
 */
use Foostart\Sample\Validators\FaqAdminValidator;

class FaqAdminController extends Controller {

   public $data_view = array();

    private $obj_faq = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_faq = new faqs();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {

        $params = array();

        $list_faq = $this->obj_faq->get_faqs($params);

        $this->data_view = array_merge($this->data_view, array(
            'faqs' => $list_faq,
            'request' => $request
        ));
        return view('sample::faq.admin.faq_list', $this->data_view);
    }
    
    
    public function edit(Request $request) {

       
        $faq = NULL;
        $faq_id = (int) $request->get('id');


        if (!empty($faq_id) && (is_int($faq_id))) {
            $faq = $this->obj_faq->find($faq_id);
        }

        $this->data_view = array_merge($this->data_view, array(
            'faq' => $faq,
            'request' => $request
        ));
        return view('sample::faq.admin.faq_edit', $this->data_view);


    }
    
    
    public function post(Request $request) {
                $this->obj_validator = new FaqAdminValidator();


        $input = $request->all();

        $faq_id = (int) $request->get('id');
        $faq = NULL;


        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($faq_id) && is_int($faq_id)) {

                $faq = $this->obj_faq->find($faq_id);
            }

        } else {
            if (!empty($faq_id) && is_int($faq_id)) {

                $faq = $this->obj_faq->find($faq_id);

                if (!empty($faq)) {

                    $input['faq_id'] = $faq_id;
                    $faq = $this->obj_faq->update_faq($input);

                    //Message
                    \Session::flash('message', trans('sample::faq.message_update_successfully'));
                    return Redirect::route("admin_faq.edit", ["id" => $faq->faq_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('sample::faq.message_update_unsuccessfully'));
                }
            } else {

                $faq = $this->obj_faq->add_faq($input);

                if (!empty($faq)) {

                    //Message
                    \Session::flash('message', trans('sample::faq.message_add_successfully'));
                    return Redirect::route("admin_faq.edit", ["id" => $faq->faq_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('sample::faq.message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'faq' => $faq,
            'request' => $request,
        ), $data);

        return view('sample::faq.admin.faq_edit', $this->data_view);
    }


    
    public function delete(Request $request) {

        $faq = NULL;
        $faq_id = $request->get('id');

        if (!empty($faq_id)) {
            $faq = $this->obj_faq->find($faq_id);

            if (!empty($faq)) {
                  //Message
                \Session::flash('message', trans('sample::faq.message_delete_successfully'));

                $faq->delete();
            }
        } else {

        }

        $this->data_view = array_merge($this->data_view, array(
            'faq' => $faq,
        ));

        return Redirect::route("admin_faq");
    }
    
   
    
    
}