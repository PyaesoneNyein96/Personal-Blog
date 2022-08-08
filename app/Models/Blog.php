<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','category_id','image','content','user_id'
    ];


    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

     public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function reacts(){
        return $this->hasMany('App\Models\React');
    }
}
