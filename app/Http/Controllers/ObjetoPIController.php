<?php

namespace App\Http\Controllers;

use App\Models\ObjetoPI;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ObjetoPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|Application|Factory
    {
        $objetos = ObjetoPI::all();

        return view('objetoPIs.index', compact('objetos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('objetoPIs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $objeto = ObjetoPI::create($request->all());

        return to_route('objetoPIs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ObjetoPI $objetos, string $id): View|Application|Factory
    {
        $objeto = ObjetoPI::query()->find($id);


        return view('objetoPIs.show', compact('objeto', 'objetos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): RedirectResponse
    {
        return to_route('objetoPIs.edit');
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
