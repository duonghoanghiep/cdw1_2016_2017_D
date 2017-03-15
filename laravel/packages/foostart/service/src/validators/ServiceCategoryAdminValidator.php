<?php
namespace Foostart\Service\Validators;

use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;

use Illuminate\Support\MessageBag as MessageBag;

class ServiceCategoryAdminValidator extends AbstractValidator
{
    protected static $rules = array(
        'service_category_title' => 'required',
        
    );

    protected static $messages = [];


    public function __construct()
    {
        Event::listen('validating', function($input)
        {
        });
        $this->messages();
    }

    public function validate($input) {

        $flag = parent::validate($input);

        $this->errors = $this->errors?$this->errors:new MessageBag();

        $flag = $this->isValidTitle($input)?$flag:FALSE;
        return $flag;
    }


    public function messages() {
        self::$messages = [
            'required' => ':attribute '.trans('service::service_admin.required')
        ];
    }

    public function isValidTitle($input) {

        $flag = TRUE;

        $min_lenght = config('service_admin_.name_min_lengh');
        $max_lenght = config('service_admin_.name_max_lengh');

        $service_category_title = @$input['service_category_title'];

        if ((strlen($service_category_title) <= $min_lenght)  || ((strlen($service_category_title) >= $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }
        
        $service_category_nd = @$input['service_category_nd'];

        if ((strlen($service_category_nd) <= $min_lenght)  || ((strlen($service_category_nd) >= $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }
        
       
        return $flag;
    }
}