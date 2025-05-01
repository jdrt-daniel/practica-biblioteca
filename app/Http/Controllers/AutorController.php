<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Http\Requests\StoreAutorRequest;
use App\Http\Requests\UpdateAutorRequest;
use App\Services\AutorService;
use Illuminate\Http\Request;

class AutorController extends Controller
{

    protected $autorService;
    public function __construct(AutorService $autorService)
    {
        $this->autorService = $autorService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->autorService->getAll();
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
    public function store( StoreAutorRequest $request)
    {
        $data = $this->autorService->create($request->all());
        return $this->successCreate($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        UpdateAutorRequest $request,
        $id
    )
    {
        $updated = $this->autorService->update($request->all(), $id);
        return $this->successUpdate($updated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        //
    }
}
