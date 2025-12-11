<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Partner extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['name'];

    protected $with = ['media'];

    public function registerMediaCollections(): void
    {
        $this
        ->addMediaCollection('partner_logo')
        ->useDisk('public_partners');
    }
}
