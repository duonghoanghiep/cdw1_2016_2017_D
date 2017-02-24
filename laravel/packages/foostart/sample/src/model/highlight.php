<?php 
namespace Foostart\Sample\model;
use Foostart\Sample\model\highlight;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App;

class highlight extends Model {
	protected $table = 'highlight';
	protected $primaryKey = 'highlight_id';
	public $timestamps = false;
	public $filltable = [
		"highlight_image",
		"highlight_title",
		"highlight_title1",
		"highlight_money",
		
		
	];
	protected $quarded = ['highlight_id'];
	public function getData(){
		return self::paginate(5);
	}
}