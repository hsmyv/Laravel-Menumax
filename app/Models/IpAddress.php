<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'ip_address',
    ];

    protected $table = 'ip_addresses';


    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }


}
