<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingPos extends Model
{
    protected $table = 'pricing_pos';

    public $timestamps = true;

    protected $fillable = [
        'nama_pricingpos',
        'harga_pricingpos',
    ];

    public function deskripsi()
    {
        return $this->hasMany(DeskripsiPricingPos::class);
    }
}
