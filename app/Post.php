<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable;

    public $fillable = ['title', 'content', 'tags'];

    public function searchableAs()
    {
        return 'items_index';
    }

    

}
