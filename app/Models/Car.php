<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $primaryKey = 'car_id';

    protected $fillable = [
        'seats',
        'transmission',
        'doors',
        'mpg',
        'description',
        'trips',
        'make',
        'model',
        'year',
        'features',
        'type',
        'color',
        'license_plate',
        'available',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'car_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'car_id');
    }

    public function carFeatures()
    {
        return $this->belongsToMany(CarFeature::class, 'car_features_mapping', 'car_id', 'feature_id');
    }
}
