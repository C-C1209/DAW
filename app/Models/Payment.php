<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    //protected $primaryKey = "id";
    //protected $table = "payments";
    protected $fillable = ['id_sell','amount','payment_type'];

}
