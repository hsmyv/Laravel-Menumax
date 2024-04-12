<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'restaurants';


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


}
