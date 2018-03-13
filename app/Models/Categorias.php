<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';

    public function paginas()
    {
        return $this->hasMany(Paginas::class, 'categoria_id');
    }
}
