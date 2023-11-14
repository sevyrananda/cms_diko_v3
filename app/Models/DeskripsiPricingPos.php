<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskripsiPricingPos extends Model
{
    protected $table = 'deskripsi_pricingpos';

    public $timestamps = true;

    protected $fillable = [
        'pricing_pos_id',
        'deskripsi',
    ];

    public function pricingPos()
    {
        return $this->belongsTo(PricingPos::class);
    }
}
