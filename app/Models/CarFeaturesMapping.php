<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFeaturesMapping extends Model
{
    use HasFactory;

    protected $table = 'car_features_mapping';
    protected $primaryKey = 'car_feature_relation_id';

    protected $fillable = [
        'car_id',
        'feature_id',
    ];
}
