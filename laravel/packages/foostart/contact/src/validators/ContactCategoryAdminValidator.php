<?php
namespace Foostart\Contact\Validators;

use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;

use Illuminate\Support\MessageBag as MessageBag;

class ContactCategoryAdminValidator extends AbstractValidator
{
    protected static $rules = array(
        'contact_category_name' => 'required',
        
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
            'required' => ':attribute '.trans('contact::contact_admin.required')
        ];
    }

    public function isValidTitle($input) {

        $flag = TRUE;

        $min_lenght = config('contact_admin_.name_min_lengh');
        $max_lenght = config('contact_admin_.name_max_lengh');

        $contact_category_name = @$input['contact_category_name'];

        if ((strlen($contact_category_name) <= $min_lenght)  || ((strlen($contact_category_name) >= $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }
        
        $contact_category_cv = @$input['contact_category_cv'];

        if ((strlen($contact_category_cv) <= $min_lenght)  || ((strlen($contact_category_cv) >= $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }
        
        $contact_category_sdt = @$input['contact_category_sdt'];

        if ((strlen($contact_category_sdt) <= $min_lenght)  || ((strlen($contact_category_sdt) >= $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }
        $contact_category_mail = @$input['contact_category_mail'];

        if ((strlen($contact_category_mail) <= $min_lenght)  || ((strlen($contact_category_mail) >= $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }
        $contact_category_skype = @$input['contact_category_skype'];

        if ((strlen($contact_category_skype) <= $min_lenght)  || ((strlen($contact_category_skype) >= $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }

        return $flag;
    }
}