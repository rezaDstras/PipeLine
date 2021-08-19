<?php

namespace App\Models;

use App\QueryFilters\Active;
use App\QueryFilters\Sort;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Post extends Model
{
    use HasFactory;

    public static function postAll()
    {
       return $posts = app(Pipeline::class)
            ->send(Post::query())
            ->through([
                Active::class,
                Sort::class
            ])
            ->thenReturn()
            ->paginate(3);
    }
}
