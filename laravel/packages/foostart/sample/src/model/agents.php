<?php 
namespace Foostart\Sample\model;
use Foostart\Sample\model\agents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App;

class agents extends Model {
	protected $table = 'agents';
	protected $primaryKey = 'agents_id';
	public $timestamps = false;
	public $filltable = [
		"agents_image",
		"agents_name",
		"agents_cv",
	];
	protected $quarded = ['agents_id'];
	public function getData(){
		return self::paginate(5);
	}
}