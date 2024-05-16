<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsReport extends Model
{
    use HasFactory;

    protected $primaryKey = 'car_report_id';

    protected $fillable = [
        'date',
        'day_name_abbreviation',
        'day_name',
        'special_date',
    ];
}

