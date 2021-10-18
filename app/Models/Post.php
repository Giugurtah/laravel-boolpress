<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    public function getFormatDate() {
        return Carbon::create($this->created_at)->format('d-m-Y');
    }

    // Per renderlo personificabile dall'esterno
    // public function getFormatDate($element, $format="d-m-Y") {
    //     return Carbon::create($this->$element)->format($format);
    // };
}
