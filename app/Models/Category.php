<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function post() {
        return $this->hanMany('App\Models\Post.php');
    }
}
