<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    protected $fillable = ['address', 'phone_number', 'country', 'date_of_birth'];

    public function user() {
        return $this->hasOne('App\User');
    }
}
