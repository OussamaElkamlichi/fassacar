<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFeature extends Model
{
    use HasFactory;

    protected $primaryKey = 'feature_id';

    protected $fillable = [
        'feature_name',
    ];

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_features_mapping', 'feature_id', 'car_id');
    }
}
