<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content','movie_id','created_at'
    ];
   
    public function post()
    {
        return $this->belongsTo(Movie::class); 
    }
}
