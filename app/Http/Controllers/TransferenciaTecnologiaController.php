<?php

namespace App\Http\Controllers;

use App\Models\ObjetoPI;
use App\Models\TransferenciaTecnologia;
use Illuminate\Http\Request;

class TransferenciaTecnologiaController extends Controller
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
        return view('transferenciaTecnologias.create', compact('objeto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ObjetoPI $objeto, Request $request)
    {
        $info = $objeto->transferencias()->create($request->all());

        return to_route('objetoPIs.show', $info->objetoPI_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transferencia = TransferenciaTecnologia::query()->find($id);

        return view('trnasferenciaTecnologias.show', compact('transferencia'));
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
