<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollingUnits extends Model
{
    use HasFactory;

    protected $table = 'polling_unit';


    public function ward()
    {
        return $this->belongsTo(Ward::class,'uniquewardid','uniqueid');
    }

    public function result()
    {
        return $this->hasMany(ResultPU::class,'polling_unit_uniqueid','uniqueid');
    }
}
