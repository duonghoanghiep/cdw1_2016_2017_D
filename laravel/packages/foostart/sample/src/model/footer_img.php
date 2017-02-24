<?php 
namespace Foostart\Sample\model;
use Foostart\Sample\model\footer_img;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App;

class footer_img extends Model {
	protected $table = 'footer_img';
	protected $primaryKey = 'footer_img_id';
	public $timestamps = false;
	public $filltable = [
		"footer_img_img",
		
		
	];
	protected $quarded = ['footer_img_id'];
	public function getData(){
		return self::paginate(5);
	}
}