<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Noticias extends Model
{
    protected $dates = ['created_at'];

    public function user()
    {
      return $this->belongsTo(User::class, 'usuario_id');
    }
}
