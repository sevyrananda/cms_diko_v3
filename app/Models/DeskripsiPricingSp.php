<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskripsiPricingSp extends Model
{
    protected $table = 'deskripsi_pricingsp';

    public $timestamps = true;

    protected $fillable = [
        'pricing_sp_id',
        'deskripsi',
    ];

    public function pricingSp()
    {
        return $this->belongsTo(PricingSp::class);
    }
}
