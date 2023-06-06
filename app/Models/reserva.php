<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class reserva extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'reserva';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function actividad(): BelongsTo
    {
        return $this->belongsTo(actividades::class,'id_actividad');
    }
}

