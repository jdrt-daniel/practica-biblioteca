<?php

namespace App\Services;

use App\Models\Prestamos;
use App\Traits\Loggable;

class PrestamoService
{

    use Loggable;

    public function getAll()
    {
        return Prestamos::with([
            'libro:id,titulo,autor',
            'lector:id,name'
        ])->get();
    }

    public function create(array $data)
    {
        $prestamo = Prestamos::create($data);
        $this->log('Prestamo creado', $prestamo);
        return $prestamo;
    }

    public function update(array $data, $id)
    {
        $prestamo = $this->getById($id);
        $prestamo->update($data);
        $this->log('Prestamo actualizado', $prestamo);
        return $prestamo;
    }


    public function delete($id)
    {
        $prestamo = $this->getById($id);
        $prestamo->delete();
        $this->log('Prestamo eliminado', $prestamo);
        return $prestamo;
    }

    public function getById($id)
    {
        $prestamo = Prestamos::find($id);

        if (!$prestamo) {
            $this->log('Prestamo no encontrado');
            return null;
        }

        $this->log('Prestamo obtenido', $prestamo);
        return $prestamo;
    }

}