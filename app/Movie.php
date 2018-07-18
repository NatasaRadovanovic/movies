<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Movie extends Model
{
    protected $fillable = ['title', 'genre', 'director', 'production_year', 'storyline'];

    public function comments()
    {
        return $this->hasMany(Comment::class); 
    }

    protected function byGenre($genre)
    {
        return self::where('genre', $genre)->get();
    }
}
