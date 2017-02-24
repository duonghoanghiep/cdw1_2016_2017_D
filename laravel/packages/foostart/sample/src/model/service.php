<?php 
namespace Foostart\Sample\model;
use Foostart\Sample\model\service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App;

class service extends Model {
	protected $table = 'service';
	protected $primaryKey = 'service_id';
	public $timestamps = false;
	public $filltable = [
		"service_icon",
		"service_title",
		"service_nd",
		
		
		
	];
	protected $quarded = ['service_id'];
	public function getData(){
		return self::paginate(5);
	}
}