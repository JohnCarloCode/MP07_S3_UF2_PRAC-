<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    public function usuari()
    {
        return $this->belongsTo(Usuari::class);
    }
}
