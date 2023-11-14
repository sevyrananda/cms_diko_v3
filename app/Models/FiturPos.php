<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturPos extends Model
{
    use HasFactory;

    protected $table = 'fitur_pos';

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

    // public function produk()
    // {
    //     return $this->hasMany(Produk::class, 'fiturpos_id', 'id');
    // }

}
