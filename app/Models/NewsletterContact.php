<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterContact extends Model
{
    protected $table = 'newsletters';
    public $timestamps = true;
    protected $fillable = array('first_name', 'last_name', 'email', 'phone');
}
