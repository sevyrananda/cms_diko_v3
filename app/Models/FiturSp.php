<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturSp extends Model
{
    use HasFactory;

    protected $table = 'fitur_sp';

    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'judul',
        'isi',
        'image',
    ];
}
