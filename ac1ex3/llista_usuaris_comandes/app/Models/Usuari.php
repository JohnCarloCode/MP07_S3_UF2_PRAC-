<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    public function comandas()
    {
        return $this->hasMany(Comanda::class);
    }
}
