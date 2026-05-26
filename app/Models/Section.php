<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'title', 'content', 'is_visible', 'position', 'slug',
        'seo_title', 'seo_description'
    ];

}
