<?php 
namespace Foostart\Sample\model;
use Foostart\Sample\model\link;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App;

class link extends Model {
	protected $table = 'link';
	protected $primaryKey = 'link_id';
	public $timestamps = false;
	public $filltable = [
		"link_image",
		
		
	];
	protected $quarded = ['link_id'];
	public function getData(){
		return self::paginate(5);
	}
}