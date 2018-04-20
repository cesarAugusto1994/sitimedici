<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paginas extends Model
{
    public function categoria()
    {
        return $this->belongsTo(Categorias::class);
    }
}
