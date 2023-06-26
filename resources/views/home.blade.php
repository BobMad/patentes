@extends('components.layout')

@section('content')

    <figure class="figure pt-5">
        <img class="figure-img img-fluid rounded" src="{{asset('images/gfpi_img.png')}}" alt="">
    </figure>

    <div class="card rounded bg-primary">
        <h3 class="text-center pb-3 pt-5">QUESTIONÁRIO DE PATENTEABILIDADE</h3>

        <h4 class="text-center text-light">Para começar cadastre uma Propriedade Intelectual</h4>
        <div class="text-center pt-4 pb-5">
            {{--<a href="{{route('titulares.create')}}"><button type="button" class="btn btn-primary btn-lg">Titular</button></a>
            <a href="#"><button type="button" class="ms-4 btn btn-primary btn-lg">Inventor</button></a>--}}
            <a href="{{route('objetoPIs.create')}}">
                <button type="button" class="btn btn-outline-dark text-white btn-lg ms-4">Nova Propriedade Intelectual</button>
            </a>
        </div>
    </div>

    {{--<figure class="figure pt-4">
        <img class="figure-img img-fluid rounded" src="{{asset('images/gfpi_img.png')}}" alt="">
    </figure>--}}
@endsection
