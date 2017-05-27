<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Post extends Model
{
    use ElasticquentTrait;

    public $fillable = ['title', 'content', 'tags'];


}
