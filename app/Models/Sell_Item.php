<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell_Item extends Model
{
    use HasFactory;

    //protected $primaryKey = "id";
    //protected $table = "sells_items";
    protected $fillable = ['id_sell','id_producto','price','quantity'];

}
