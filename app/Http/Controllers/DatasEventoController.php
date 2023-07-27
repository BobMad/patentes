<?php

namespace App\Http\Controllers;

use App\Models\DatasEvento;
use App\Models\ObjetoPI;
use Illuminate\Http\Request;

class DatasEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ObjetoPI $objeto)
    {
        return view('dataEventos.create', compact('objeto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ObjetoPI $objeto, Request $request)
    {
        $info = $objeto->datas()->create($request->all());

        return to_route('objetoPIs.show', $info->objetoPI_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DatasEvento::query()->find($id);

        return view('dataEventos.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
