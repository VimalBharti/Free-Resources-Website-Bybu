<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Psd extends Model
{
  protected $table = 'psds';
  use Sluggable;

  public function category() {
      return $this->belongsTo('App\Category');
  }

  public function user() {
      return $this->belongsTo('App\User');
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
