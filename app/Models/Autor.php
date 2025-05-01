<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Autor extends Model
{

    use HasFactory;

    protected $table = 'autor';

    protected $fillable = [
        'nombre'
    ];


    public function libros(): HasMany
    {
        return $this->hasMany(Libros::class);
    }
}
