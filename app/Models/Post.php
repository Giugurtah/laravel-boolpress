<?php

namespace App\Models;
use App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'image', 'category_id'];
    
    public function getCategoryName() {
        if($this->category) {
            return $this->category->category;
        }
        return "No category";
    }

    public function getFormatDate() {
        return Carbon::create($this->created_at)->format('d-m-Y');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tag() {
        return $this->belongsToMany('App\Models\Tag');
    }
    
    // Per renderlo personificabile dall'esterno
    // public function getFormatDate($element, $format="d-m-Y") {
    //     return Carbon::create($this->$element)->format($format);
    // };
}
