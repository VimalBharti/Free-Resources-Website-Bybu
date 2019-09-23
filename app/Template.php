<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Template extends Model
{
    protected $table = 'templates';
    use Sluggable;

    public function templatecat() {
        return $this->belongsTo('App\Templatecat');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'separator' => '-'
            ]
        ];
    }
}
