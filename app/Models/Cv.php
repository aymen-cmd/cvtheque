<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv extends Model
{
   
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    

}