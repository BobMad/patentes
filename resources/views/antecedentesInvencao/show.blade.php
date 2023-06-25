@extends('components.layout')

@section('content')
    <h1 class="display-5 pt-5 text-center">4. ANTECEDENTES DA INVENÇÃO</h1>
    <p class="pt-3">{{$antecedente->diferencial}}</p><br>
    <p class="pt-3">{{$antecedente->diferencial_patentes}}</p>
@endsection
