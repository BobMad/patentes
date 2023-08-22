@php use App\Models\ObjetoPI; @endphp
@extends('components.layout')

@section('content')
    <div class="container-sm">
        <figure class="figure pt-3">
            <img class="figure-img img-fluid rounded" src="{{asset('images/gfpi_img.png')}}" alt="GFPI">
        </figure>

        <div class="card rounded bg-primary">
            <h4 class="text-center pb-3 pt-3">QUESTIONÁRIO DE PATENTEABILIDADE</h4>

            <h5 class="text-center text-light">Para começar cadastre uma Propriedade Intelectual</h5>
            <div class="text-center pt-3 pb-3">
                {{--<a href="{{route('titulares.create')}}"><button type="button" class="btn btn-primary btn-lg">Titular</button></a>
                <a href="#"><button type="button" class="ms-4 btn btn-primary btn-lg">Inventor</button></a>--}}
                <a href="{{route('objetoPIs.create')}}">
                    <button type="button" class="btn btn-outline-dark text-white btn-lg ms-4">Nova Propriedade
                        Intelectual
                    </button>
                </a>
            </div>
        </div>

        @include('objetoPIs.showItens.transferencia')

        <div class="card rounded bg-primary mt-4">
            <h4 class="text-center pb-3 pt-3">TRANSFERÊNCIA DE TECNOLOGIA</h4>

            <h5 class="text-center text-light">Preencha o formulário de transferência de tecnologia</h5>
            <div class="text-center pt-3 pb-3">
                {{--<a href="{{route('titulares.create')}}"><button type="button" class="btn btn-primary btn-lg">Titular</button></a>
                <a href="#"><button type="button" class="ms-4 btn btn-primary btn-lg">Inventor</button></a>--}}
                <a class="btn btn-outline-dark text-white btn-lg ms-4"
                   href="{{route('transferenciaTecnologias.create')}}">Transferência de
                    Tecnologia</a>
            </div>
        </div>
    </div>
    {{--<figure class="figure pt-4">
        <img class="figure-img img-fluid rounded" src="{{asset('images/gfpi_img.png')}}" alt="">
    </figure>--}}
@endsection
