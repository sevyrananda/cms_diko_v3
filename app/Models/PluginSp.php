<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PluginSp extends Model
{
    use HasFactory;

    protected $table = 'plugin_sp';

    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'judul',
        'isi',
        'image',
    ];
}
