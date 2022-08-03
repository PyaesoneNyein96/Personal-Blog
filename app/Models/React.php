<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class React extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'user_id',
        'type',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    // public function blog(){
    //     return $this->belongsTo('App\Models\Blog');
    // }

}
