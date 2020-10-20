<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $table = 'ward';

    public function LGA()
    {
        return $this->belongsTo(LGA::class,'lga_id','lga_id');
    }

    public function PollingUnits()
    {
        return $this->hasMany(PollingUnits::class,'uniquewardid','uniqueid');
    }
}
