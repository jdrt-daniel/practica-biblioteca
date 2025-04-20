<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prestamos extends Model
{

    use HasFactory;

    protected $fillable = [
        'libro_id',
        'lector_id',
        'fecha_prestamo',
        'fecha_devolucion'
    ];

    public function libro(): BelongsTo
    {
        return $this->belongsTo(Libros::class, 'libro_id');
    }

    public function lector(): BelongsTo
    {
        return $this->belongsTo(User::class, 'lector_id');
    }
}
