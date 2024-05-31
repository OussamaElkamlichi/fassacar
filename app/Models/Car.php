<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';


    protected $fillable = [
        'seats',
        'transmission',
        'doors',
        'fuel',
        'description',
        'model',
        'body_type',
        'year',
        'type',
        'color',
        'luggage',
        'available',
        'price'
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


    public static function getTransmissionOptions()
    {
        return [
            'automatic' => 'Automatic',
            'manual' => 'Manual',
        ];
    }

    public static function getFuelOptions()
    {
        return [
            'petrol' => 'Petrol',
            'gasual' => 'Gasual',
        ];
    }
}

