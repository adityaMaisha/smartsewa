<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet_history extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'wallet_history'; 
}
