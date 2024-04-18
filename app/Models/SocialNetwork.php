<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table="social_networks";

    public function scopeSocialNetworks($query, $id)
    {
        return $query->where('restaurant_id', $id)->latest()->get();
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
