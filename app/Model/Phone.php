<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Phone extends Model
{
    public function user(){

      return $this->belongsTo(User::class);
    }
}
