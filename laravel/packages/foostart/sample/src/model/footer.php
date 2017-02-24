<?php 
namespace Foostart\Sample\model;
use Foostart\Sample\model\footer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App;

class footer extends Model {
	protected $table = 'footer';
	protected $primaryKey = 'footer_id';
	public $timestamps = false;
	public $filltable = [
		"footer_image",
		"footer_title",
		"footer_time",
		
	];
	protected $quarded = ['footer_id'];
	public function getData(){
		return self::paginate(5);
	}
}