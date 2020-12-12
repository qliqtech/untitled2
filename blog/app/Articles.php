<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = ['title','content','user_id','tags'];

    public function user(){

        return $this->belongsTo(User::class,'user_id');

    }

    public function comment(){

        return $this->belongsTo(Comments::class,'article_id');

    }
}
