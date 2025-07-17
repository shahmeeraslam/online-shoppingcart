<?php

namespace App\Models;
use app\Http\Controllers\AuthManager;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $fillable = ['cart_title', 'cart_description', 'cart_image'];
}
