<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PluginPos extends Model
{
    use HasFactory;

    protected $table = 'plugin_pos';

    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'judul',
        'isi',
        'image',
    ];
}
