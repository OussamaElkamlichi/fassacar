<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    use HasFactory;

    protected $primaryKey = 'daily_report_id';

    protected $fillable = [
        'date',
        'yesterday_rented_cars',
        'yesterday_earnings',
        'total_earnings',
    ];
}

