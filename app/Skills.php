<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
  protected $table = 'skills';
    protected $primariKey= 'id';
    public $guarded= ['id'];

    public function profesor()
 {
    return $this->hasMany('App\Skills');
 }

}
