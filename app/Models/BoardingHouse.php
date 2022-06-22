<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardingHouse extends Model
{
    use HasFactory;

    protected $table = 'boarding_houses';
    protected $primaryKey = 'bhouse_id';


    protected $fillable = ['bhouse_name', 'bhouse_desc',
    'user_id', 'owner', 'business_permit_imgpath',
    'bhouse_img_path', 'amenities', 'bhouse_rule', 'long', 'lat', 'is_approve', 'province', 'city', 'barangay', 'street'];

    public function amenities(){
        return $this->hasMany(Amenity::class, 'bhouse_id', 'bhouse_id');
    }

    public function owner(){
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }

    public function province(){
        return $this->hasOne(Province::class, 'provCode', 'province');
    }

    public function city(){
        return $this->hasOne(City::class, 'citymunCode', 'city');
    }

    public function barangay(){
        return $this->hasOne(Barangay::class, 'brgyCode', 'barangay');
    }
}
