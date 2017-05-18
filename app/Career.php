<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected  $table='Career';
    protected  $fillable=[
        'name',
        'description',
        'dean',
        'location_lat',
        'location_long',
        'address',
        'phone',
        'social_facebook',
        'social_twitter',
        'web_address',
        'facultyId',
        'pensum_url'
    ];
    public  $timestamps=false;
    
    public function faculty()
    {
        return $this->belongsTo(Faculty::class,'facultyId');
    }
}
