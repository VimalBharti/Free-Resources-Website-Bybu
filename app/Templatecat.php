<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Templatecat extends Model
{
    protected $table = 'templatecats';

    public function templates(){
        return $this->hasMany('App\Template');
    }
}
