<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Portfolio extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['title', 'location', 'category_id'];

    protected $with = ['media'];

    /**
     * Get the category that owns the portfolio.
     */
    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'category_id', 'id');
    }

    public function registerMediaCollections(): void
    {
        $this
        ->addMediaCollection('portfolio_image')
        ->useDisk('public_portfolios');
    }
}
