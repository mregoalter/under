<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $connection = 'pgsql';

    protected $table = 'posts';

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'alias', 'title', 'content', 'image', 'gallery', 'rubric', 'author', 'tags', 'rating', 'published'
    ];

    protected $casts = [
        'tags' => 'array',
        'rating' => 'array'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}