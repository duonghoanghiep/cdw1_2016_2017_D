<?php 
namespace Foostart\Sample\model;
use Foostart\Sample\model\Sample;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App;

class Sample extends Model {
	protected $table = 'samples';
	protected $primaryKey = 'sample_id';
	public $timestamps = false;
	public $filltable = [
		"sample_name",
	];
	protected $quarded = ['sample_id'];
	public function getData(){
		return self::paginate(5);
	}
}