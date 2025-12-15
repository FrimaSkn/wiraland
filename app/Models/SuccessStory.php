<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class SuccessStory extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'payload',
    ];

    protected $casts = [
        'payload' => 'array',
    ];

    protected $with = ['media'];

    public function registerMediaCollections(): void
    {
        $this
        ->addMediaCollection('image_success_story')
        ->useDisk('public_story');
    }
}
