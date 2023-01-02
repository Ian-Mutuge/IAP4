<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    Protected $table='courses';
    use HasFactory;
    public $timestamps=false;
}
