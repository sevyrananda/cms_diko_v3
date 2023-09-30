<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturLanding extends Model
{
    use HasFactory;

    protected $table = 'fitur_landing';

    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'judul',
        'isi',
        'image',
    ];
}
