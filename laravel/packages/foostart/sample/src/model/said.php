<?php 
namespace Foostart\Sample\model;
use Foostart\Sample\model\said;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App;

class said extends Model {
	protected $table = 'said';
	protected $primaryKey = 'said_id';
	public $timestamps = false;
	public $filltable = [
		"said_nd",
		"said_image",
		"said_name",
		"said_title",
		
		
	];
	protected $quarded = ['said_id'];
	public function getData(){
		return self::paginate(5);
	}
}