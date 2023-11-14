<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturPos2 extends Model
{
    use HasFactory;

    protected $table = 'fitur_pos2';

    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'icon2',
        'judul_icon2',
        'isi',
        'image',
    ];

    // public function produk()
    // {
    //     return $this->hasMany(Produk::class, 'fiturpos2_id', 'id');
    // }
}
