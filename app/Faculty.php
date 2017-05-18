<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected  $table='Faculty';
    protected  $fillable=[
        'name',
        'description',
        'dean',
        'dean2',
        'location_lat',
        'location_long',
        'address',
        'phone',
        'social_facebook',
        'social_twitter',
        'web_address',
        'prefac_url'
    ];
    public  $timestamps=false;
}
