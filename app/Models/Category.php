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
        'status'
    ];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
