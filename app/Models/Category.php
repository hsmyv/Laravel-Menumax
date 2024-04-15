<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'code',
        'description',
        'status',
        'parent_id',
        'restaurant_id'
    ];

    public function scopeCategoriesForDropdown($query,$id)
    {
        return $query->whereNull('parent_id')
            ->where('status', true)
                ->where('restaurant_id', $id)
                    ->latest()->get();
    }
    public function scopeCategories($query, $id)
    {
        return $query->whereNull('parent_id')->where('restaurant_id', $id)->latest()->get();
    }
    public function scopeSubCategories($query, $id)
    {
        return $query->whereNotNull('parent_id')->where('restaurant_id', $id)->latest()->get();
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
