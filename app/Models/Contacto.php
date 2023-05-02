<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    public function eventos() {
        return $this->hasmany(Eventos::class);
    }
    public function notas() {
        return $this->hasmany(Notas::class);
    }
    
}
