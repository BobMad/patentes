<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Titular;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class TitutlarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|Application|Factory
    {
        $titulares = Titular::all();

        return view('titulares.index', compact('titulares'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Factory|View|Application
     */
    public function create(): Factory|View|Application
    {
        return view('titulares.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $titular = Titular::create($request->all());
        $titular->endereco()->create($request->all());
        //$titular->endereco()->save();
        $titular->save();

        /*$titular = new Titular;
        $titular->nome = $request->nome;
        $titular->cnpj = $request->cnpj;
        $titular->endereco->cep = $request->cep;
        $titular->endereco->logradouro = $request->logradouro;
        $titular->endereco->numero = $request->numero;
        $titular->endereco->bairro = $request->bairro;
        $titular->endereco->save();
        $titular->save();*/

        return to_route('titulares.index');
      //return to_route('representantes.create');
    }

    /**
     * Display the specified resource.
     * @param string $id
     * @return View|Application|Factory
     */
    public function show(string $id): View|Application|Factory
    {
        $titular = Titular::query()->find($id);

        return view('titulares.show',compact('titular'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $titular = Titular::find($id);
        return view('titulares.edit', compact('titular'));
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
