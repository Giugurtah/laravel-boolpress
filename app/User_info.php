<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address', 'phone_number', 'date_of_birth', 'country',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
