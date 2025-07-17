<?php

namespace App\Models;
use illuminate\app\Http\Controllers\AuthManager;

use Illuminate\Database\Eloquent\Model;

class Adminpage extends Model
{

    protected $table = "cards";
    protected $primaryKey = 'id';
    protected $fillable = ['title','description'];
}
