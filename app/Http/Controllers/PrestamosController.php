<?php

namespace App\Http\Controllers;

use App\Models\Prestamos;
use App\Http\Requests\StorePrestamosRequest;
use App\Http\Requests\UpdatePrestamosRequest;
use App\Services\PrestamoService;
class PrestamosController extends Controller
{

    protected $prestamoService;

    public function __construct(PrestamoService $prestamoService)
    {
        $this->prestamoService = $prestamoService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->prestamoService->getAll();
        return $this->successList($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrestamosRequest $request)
    {
        $created = $this->prestamoService->create($request->all());
        return $this->successCreate($created);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = $this->prestamoService->getById($id);
        return $this->success($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestamos $prestamos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrestamosRequest $request, $id)
    {
            $updated = $this->prestamoService->update($request->all(), $id);
            return $this->successUpdate($updated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestamos $prestamos)
    {
        //
    }
}
