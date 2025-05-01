<?php

namespace App\Services;

use App\Models\Autor;
use App\Traits\Loggable;

class AutorService
{
    use Loggable;

    public function getAll()
    {
        return Autor::all();
    }

    public function create(array $data)
    {
        $autor = Autor::create($data);
        return $autor;
    }

    public function update(array $data, string $id)
    {
        $autor = $this->getById($id);
        $autor->update($data);
        return $autor;
    }

    public function delete($id)
    {
        $autor = $this->getById($id);
        return $autor->delete();
    }

    public function getById($id)
    {
        $autor = Autor::find($id);

        if (!$autor) {
            return null;
        }

        return $autor;
    }

}