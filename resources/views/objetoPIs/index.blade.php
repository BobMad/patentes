@extends('components.layout')

@section('content')
    <h1 class="display-5 pt-5 pb-3 text-center">Objetos de Propriedade Intelectual</h1>
    <section class="text-center">
        <a class="" href="{{route('objetoPIs.create')}}">
            <button type="button" class="btn btn-outline-success btn-lg">Nova Propriedade Intelectual</button>
        </a>
    </section>
    <section class="pt-5 pb-3 text-center">

        <table class="table table-striped table-hover align-middle">
            <thead class="table-bordered table-active">
            <th scope="col ">Título</th>
            <th scope="col">Opções</th>
            {{--<td></td>
            <td></td>
            <td></td>--}}
            </thead>
            <tbody class="table-group-divider table-secondary">
            @foreach($objetos as $objeto)
                <tr>
                    <td>{{$objeto->titulo}}</td>
                    <td>
                        <a href="{{route('objetoPIs.show', $objeto->id)}}"><button class="btn btn-outline-info">Detalhes</button></a>
                        <a href="{{route('objetoPIs.edit', $objeto->id)}}"><button class="btn btn-outline-warning">Editar</button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
