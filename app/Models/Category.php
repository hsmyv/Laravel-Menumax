<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'code',
        'description',
        'status',
        'parent_id'
    ];

    public function scopeCategoriesForDropdown($query)
    {
        return $query->whereNull('parent_id')->where('status', true)->latest()->get();
    }
    public function scopeCategories($query)
    {
        return $query->whereNull('parent_id')->latest()->get();
    }
    public function scopeSubCategories($query)
    {
        return $query->whereNotNull('parent_id')->where('status', true)->latest()->get();
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
