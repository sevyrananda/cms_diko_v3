<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturPos extends Model
{
    use HasFactory;

    protected $table = 'fitur_pos';

    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'icon1',
        'judul_icon1',
        'judul_detail',
        'isi_detail',
        'icon2',
        'judul_icon2',
        'isi',
        'image',
    ];
}
