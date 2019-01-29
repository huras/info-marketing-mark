<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BlogPost;

class CoverTypes extends Model
{
    protected $table = 'post_cover_types';
    public $timestamps = true;
    protected $fillable = array('name');

    public function posts(){
        return $this->hasMany('App\Models\BlogPost');
    }
}
