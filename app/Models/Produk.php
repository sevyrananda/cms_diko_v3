<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'nama_produk',
        'preview_selection',
    ];

    // public function fiturUtama()
    // {
    //     return $this->belongsTo(FiturLanding::class);
    // }

    // public function fiturSection1()
    // {
    //     return $this->belongsTo(FiturPos::class);
    // }

    // public function fiturSection2()
    // {
    //     return $this->belongsTo(FiturPos2::class);
    // }

}
