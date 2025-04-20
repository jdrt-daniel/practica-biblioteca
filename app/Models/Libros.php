<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Libros extends Model
{
    use HasFactory;

    protected $table = 'libros';

    protected $fillable = [
        'titulo',
        'autor',
        'editorial',
        'isbn'
    ];

    public function prestamos(): HasMany
    {
        return $this->hasMany(Prestamos::class);
    }

}
