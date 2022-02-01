<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'image_id',
        'image_name',
        'img_id',
        'img_slug'
    ];
}
