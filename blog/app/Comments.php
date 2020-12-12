<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['title','commentcontent','user_id','article_id'];


    public function user(){

        return $this->belongsTo(User::class,'user_id');

    }
}
