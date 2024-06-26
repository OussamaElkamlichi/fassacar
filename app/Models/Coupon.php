<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $primaryKey = 'coupon_id';

    protected $fillable = [
        'coupon_code',
        'discount_percent',
        'expiration_date',
        'is_active',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'coupon_id');
    }
}
