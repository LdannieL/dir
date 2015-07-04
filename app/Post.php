<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $table = 'posts';

     public static $rules = [
		'title' => 'required|between:3,255',
		'body' => 'required',
		'user_id' => 'integer',
		'category_id' => 'integer',
	];

	
	protected $fillable = ['title', 'body', 'user_id', 'category_id'];

	public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
