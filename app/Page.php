<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Page extends Model
{
    use Translatable;
    protected $translatable = ['name','desc','meta_title','meta_description','meta_keywords','content'];

}
