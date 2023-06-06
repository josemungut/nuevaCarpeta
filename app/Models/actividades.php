<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\softDeletes;

class actividades extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = 'actividades';

    public function reserva(): HasMany
    {
        return $this->hasMany(reserva::class,'id_actividad');
    }
    public function sala(): HasOne
    {
        return $this->hasOne(sala::class,'id');
    }
}

