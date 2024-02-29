<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Navbar extends Model
{
    use Translatable;
    protected $translatable = ['name'];

    public function navs(){
        return $this->hasMany(Navbar::class);
    }

    public function page(){
        return $this->belongsTo(Page::class, 'page_id');
    }

}
