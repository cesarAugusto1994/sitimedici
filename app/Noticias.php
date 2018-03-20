<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $dates = ['created_at'];

    public function user()
    {
      return $this->belongsTo(User::class, 'usuario_id');
    }
}
