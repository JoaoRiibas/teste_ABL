@extends('templates.template')

@section('content')
    <h1 class = "text-center">Apartamentos</h1>

    <div class = "col-8 m-auto"> 
        <div class = "card-header">
            <a href="{{ url('/') }}">Voltar</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome Edificio</th>
                <th scope="col">Numero Apartamento</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            
            @foreach($apartamentos as $apartamento)
            <tr>
                <td>{{$apartamento->id}}</td>
                <td>{{$apartamento->nome_edificio}}</td>
                <td>{{$apartamento->numero_apto}}</td>
                <td>
                    <a href="/apartamento/{{$apartamento->id}}/edit" class="btn btn-dark">Editar</a>
                </td>
            </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>

@endsection
