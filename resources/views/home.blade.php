@extends('components.layout')

@section('content')
<h1 class="display-4 text-center pt-5">GFPI</h1>

<p class="card-header text-secondary text-light text-center pb-3">Criar</p>
<div class="text-center">
    <a href="{{route('titulares.create')}}"><button type="button" class="btn btn-primary btn-lg">Titular</button></a>
    <a href="#"><button type="button" class="ms-4 btn btn-primary btn-lg">Inventor</button></a>
</div>

@endsection
