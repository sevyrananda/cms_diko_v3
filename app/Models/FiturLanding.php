<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturLanding extends Model
{
    use HasFactory;

    protected $table = 'fitur_landing';

    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'judul',
        'isi',
        'icon',
    ];

    // public function produk()
    // {
    //     return $this->hasMany(Produk::class, 'fiturlanding_id', 'id');
    // }

}
