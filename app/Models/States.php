<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    protected $table = 'states';


    public function LGAs()
    {
        return $this->hasMany(LGA::class,'state_id','state_id');
    }
}