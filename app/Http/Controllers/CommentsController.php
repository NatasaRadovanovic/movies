<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class CommentsController extends Controller
{
    public function store($movie_id)
    {
       $this->validate(request(), ['content' =>'required']);
        Comment::create([ 
            'content' => request('content'),
            'movie_id' => $movie_id,
            ]);
            return back();
    }
}
