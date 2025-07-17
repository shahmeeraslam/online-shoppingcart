<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Confirm_order extends Model
{

    public function user(){
        return $this->belongsTo(Users::class);
    }
protected $table = "confirm_order";
protected $primaryKey = "id";
protected $fillable = ['comfirm_title','comfirm_price','comfirm_description', 'comfirm_image'];
}
