<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $fillable = ['name'];

    /**
     * Get the portfolios associated with the category.
     */
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'category_id', 'id');
    }
}
