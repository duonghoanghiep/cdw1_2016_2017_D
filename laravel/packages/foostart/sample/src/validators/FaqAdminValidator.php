<?php
namespace Foostart\Sample\Validators;

use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;

use Illuminate\Support\MessageBag as MessageBag;

class FaqAdminValidator extends AbstractValidator
{
    protected static $rules = array(
        'faq_title' => 'required',
        'faq_nd' => 'required',
       
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
            'required' => ':attribute '.trans('sample::faq_admin.required')
        ];
    }

    public function isValidTitle($input) {

        $flag = TRUE;

        $min_lenght = config('sample.name_min_lengh');
        $max_lenght = config('sample.name_max_lengh');

        $faq_title = @$input['faq_title'];
        $faq_nd = @$input['faq_nd'];
        
        

        if ((strlen($faq_title) < $min_lenght)  || ((strlen($faq_title) > $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }

        return $flag;
    }
}