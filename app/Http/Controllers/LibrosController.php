<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Http\Requests\StoreLibrosRequest;
use App\Http\Requests\UpdateLibrosRequest;
use Illuminate\Http\Request;
use App\Services\LibroService;
class LibrosController extends Controller
{

    protected $libroService;

    public function __construct(LibroService $libroService)
    {
        $this->libroService = $libroService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->libroService->getAll();

        return $this->successList($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createLibro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibrosRequest $request)
    {

       $created =$this->libroService->create($request->all());
        return $this->successCreate($created);
    }

    /**
     * Display the specified resource.
     */
    public function show(Libros $libros)
    {
        return view('showLibro');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libros $libros)
    {
        return view('editLibro');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibrosRequest $request, $id)
    {
        $updated= $this->libroService->update($request->all(), $id);
        return $this->successUpdate($updated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libros $libros)
    {
        //
    }
}
