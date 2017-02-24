<?php 
namespace Foostart\Sample\model;
use Foostart\Sample\model\contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App;

class contact extends Model {
	protected $table = 'contact';
	protected $primaryKey = 'contact_id';
	public $timestamps = false;
	public $filltable = [
		"contact_checkin",
		"contact_icon",
		"contact_phone",
		"contact_mail",
		"contact_skype",
	];
	protected $quarded = ['contact_id'];
	public function getData(){
		return self::paginate(5);
	}
}