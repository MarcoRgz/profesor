<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
  protected $table = 'profesores';
    protected $primariKey= 'id';
    public $guarded= ['id'];


    public function profesor()
 {
    return $this->belongsTo('App\Profesor');
 }

    public function user ()
    {
      return $this->hasMany('App\User');
    }

    public function handle($request, Closure $next, $role)
{
    if (! $request->user()->hasRole($role)) {
        return redirect('wel');
    }
return $next($request);
}

public function setCarreraAttribute($value)
{
  $this->attributes['nombre'] = strtoupper($value);
}

}
