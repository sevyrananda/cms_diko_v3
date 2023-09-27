<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';

    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'author_name',
        'title',
        'category',
        'content',
        'image',
        'status',
    ];
}
