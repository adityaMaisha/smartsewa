<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class FrontFunctions extends Model
{
    use HasFactory;
    protected $collection = 'front_functions';
    protected $guarded = [];
}
