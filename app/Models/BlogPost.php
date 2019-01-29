<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CoverTypes;

class BlogPost extends Model
{
    protected $table = 'blog_posts';
    public $timestamps = true;
    protected $fillable = array('title', 'slug', 'call', 'content', 'cover', 'cover_type_id', 'status', 'clicks');

    public function coverType(){
        return $this->belongsTo('App\Models\CoverTypes', 'cover_type_id');
    }
}
