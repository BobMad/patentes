<?php

namespace App\Http\Controllers;

use App\Models\InformacaoInvento;
use App\Models\ObjetoPI;
use Illuminate\Http\Request;

class InformacaoInventoController extends Controller
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
        return view('inventoInformacoes.create', compact('objeto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ObjetoPI $objeto, Request $request)
    {
        $info = $objeto->infoInvento()->create($request->all());

        return to_route('objetoPIs.show', $info->objetoPI_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $infoInvento = InformacaoInvento::query()->find($id);
        $infoInvento->all();

        return view('inventoInformacoes.show', compact('infoInvento'));
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
