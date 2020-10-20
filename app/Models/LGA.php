<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LGA extends Model
{
    use HasFactory;

    protected $table = 'lga';

    public function Wards()
    {
        return $this->hasMany(Ward::class,'lga_id','lga_id');
    }

    public function State()
    {
        return $this->belongsTo(States::class,'state_id','state_id');
    }
}
