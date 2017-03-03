<?php
namespace Foostart\Sample\Validators;

use Event;
use Input;
use \LaravelAcl\Library\Validators\AbstractValidator;

use Illuminate\Support\MessageBag as MessageBag;

class SlideAdminValidator extends AbstractValidator
{
    protected static $rules = array(
        'slide_img' => 'required',
        
       
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

        $slide = parent::validate($input);

        $this->errors = $this->errors?$this->errors:new MessageBag();

        $slide = $this->isValidTitle($input)?$slide:FALSE;
        return $slide;
    }


    public function messages() {
        self::$messages = [
            'required' => ':attribute '.trans('sample::slide_admin.required')
        ];
    }

    public function isValidTitle($input) {
        
// getting all of the post data
  $file = array('image' => Input::file('image'));
  // setting up rules
  $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('upload');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload');
    }
  }
    }
}
