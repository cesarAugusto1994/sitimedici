<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaleConosco extends Model
{
    protected $table = 'fale_conosco';

    protected $fillable = [
      'nome',
      'email',
      'telefone',
      'empresa',
      'mensagem',
    ];
}
