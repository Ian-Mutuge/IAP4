<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marks extends Model
{
    Protected $table='studentmarks';
    use HasFactory;
    public $timestamps=false;
}
