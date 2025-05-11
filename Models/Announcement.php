<?php

namespace Paymenter\Extensions\Others\Announcements\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = 'ext_announcements';

    protected $fillable = [
        'title',
        'image',
        'content',
        'description',
        'published_at',
        'is_active',
        'slug',
        'show_image_only_homepage',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'show_image_only_homepage' => 'boolean',
    ];
}
