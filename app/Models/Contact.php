<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

protected $table = "contact";
protected $primaryKey = "id";

protected $fillable = ['email'];

}
