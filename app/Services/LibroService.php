<?php

namespace App\Services;

use App\Models\Libros;
use App\Traits\Loggable;


class LibroService
{
    use Loggable;

    public function getAll()
    {
        return Libros::with('autor')->paginate(10);
    }

    public function create(array $data)
    {
        $libro = Libros::create($data);
        return $libro;
    }

    public function update(array $data, string $id)
    {
        $libro = $this->getById($id);
        $libro->update($data);
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
            return null;
        }

        return $libro;
    }

}