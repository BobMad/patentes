<?php

namespace App\Http\Controllers;

use App\Models\Representante;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RepresentanteController extends Controller
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
        return view('representantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): View|Factory|Application
    {
        $representante = Representante::create($request->all());

        return view('/', compact('representante'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return to_route('representantes.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $representante = Representante::query()->find($id);
        $representante->fill($request->all());
        $representante->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
