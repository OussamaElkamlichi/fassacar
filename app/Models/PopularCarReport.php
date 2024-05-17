<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopularCarReport extends Model
{
    use HasFactory;

    protected $primaryKey = 'popular_car_id';

    protected $fillable = [
        'car_id',
        'rent_count',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}

