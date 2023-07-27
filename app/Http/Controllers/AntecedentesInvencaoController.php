<?php

namespace App\Http\Controllers;

use App\Models\AntecedentesInvencao;
use App\Models\ObjetoPI;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class AntecedentesInvencaoController extends Controller
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
    public function create(ObjetoPI $objeto): View|Application|Factory
    {
        return view('antecedentesInvencao.create', compact('objeto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ObjetoPI $objeto, Request $request)
    {
        $info = $objeto->antecedentes()->create($request->all());

        return to_route('objetoPIs.show', $info->objetoPI_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $antecedente = AntecedentesInvencao::query()->find($id);
//        $antecedente->all();

        return view('antecedentesInvencao.show', compact('antecedente'));
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
