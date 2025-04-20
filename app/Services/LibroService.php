<?php

namespace App\Services;

use App\Models\Libros;
use App\Traits\Loggable;


class LibroService
{
    use Loggable;

    public function getAll()
    {
        return Libros::all();
    }

    public function create(array $data)
    {
        $libro = Libros::create($data);
        // $this->log("Libro creado: {$libro->id}");
        return $libro;
    }

    public function update(array $data, string $id)
    {
        $libro = $this->getById($id);
        $libro->update($data);
        // $this->log("Libro actualizado: {$libro->id}");
        return $libro;
    }

    public function delete($id)
    {
        $libro = $this->getById($id);
        return $libro->delete();
    }

    public function getById($id)
    {
        $libro = Libros::find($id);

        if (!$libro) {
            // $this->log('Libro no encontrado');
            return null;
        }

        return $libro;
    }

}