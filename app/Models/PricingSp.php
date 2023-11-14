<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingSp extends Model
{
    protected $table = 'pricing_sp';

    public $timestamps = true;

    protected $fillable = [
        'nama_pricingsp',
        'harga_pricingsp',
    ];

    public function deskripsi()
    {
        return $this->hasMany(DeskripsiPricingSp::class);
    }
}
