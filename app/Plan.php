<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Plan extends Model
{
    public function infos(){
        return $this->hasMany(PlanInformation::class);
    }
}
