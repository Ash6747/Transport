<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "drivers";
    protected $primaryKey = "driver_id";

    public function setDriverNameAttribute($val){
        $this->attributes['driver_name'] = ucwords(strtolower($val)); //ucfirst(strtolower($val));
    }

    public function getDriverNameAttribute($value){
        return ucwords(strtolower($value)); // ucfirst(strtolower($value));
    }
}
