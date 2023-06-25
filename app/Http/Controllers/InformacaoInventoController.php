<?php

namespace App\Http\Controllers;

use App\Models\InformacaoInvento;
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
    public function create()
    {
        return view('inventoInformacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $info = InformacaoInvento::create($request->all());

        return to_route('inventoInformacoes.show', $info->id);
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
