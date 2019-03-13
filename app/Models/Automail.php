<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Automail extends Model
{
    protected $table = 'automails';
    public $timestamps = true;
    protected $fillable = ['target_type', 'time_condition_type', 'shot_time', 'day_of_week', 
                           'day_of_month', 'month_of_year', 'special_day', 'content', 'topic', 
                           'from', 'template_name', 'active', 'target_mail', 'first_name', 'last_name', 'active'
                        ];
}
