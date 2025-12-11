<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'role',
        'payload',
    ];

    protected $with = ['media'];

    public function registerMediaCollections(): void
    {
        $this
        ->addMediaCollection('team_picture')
        ->useDisk('public_teams');
    }
}
