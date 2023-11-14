<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturSp extends Model
{
    use HasFactory;

    protected $table = 'fitur_sp';

    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'icon1',
        'judul_icon1',
        'judul_detail',
        'isi_detail',
        'image',
    ];

}
