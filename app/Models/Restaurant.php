<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Restaurant extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;


    protected $guarded = [];

    protected $table = 'restaurants';

    public function registerMediaCollections(): void
    {

        $this->addMediaCollection('image')->singleFile()
            ->acceptsMimeTypes(['image/jpg', 'image/jpeg', 'image/png', 'image/gif']);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function openingTime()
    {
        return $this->hasOne(OpeningTime::class);
    }
    public function deliveryInformation()
    {
        return $this->hasOne(DeliveryInformation::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function socialNetworks()
    {
        return $this->hasMany(SocialNetwork::class);
    }

    public function schedule($model)
    {
        return $this->hasOne($model);
    }


}
