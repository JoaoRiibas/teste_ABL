
@extends('templates.template')

@section('content')
    
    <h1 class = "text-center">Moradores</h1>
    
    <div class = "col-8 m-auto"> 
        <div class = "card-header">
            <a href="{{ url('/') }}">Voltar</a>
        </div>
        <table class="table" >
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">ApartamentoID</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col"></th>            
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            
            @foreach($moradors as $morador)
            <tr>
                <td name = "morador_id">{{$morador->id}}</td>
                <td name = "id_apto">{{$morador->id_apto}}</td>
                <td name = "nome">{{$morador->nome}}</td>
                <td name = "cpf">{{$morador->cpf}}</td>
                <td name = "email">{{$morador->email}}</td>
                <td name = "telefone">{{$morador->telefone}}</td>
                <td>
                    <a href="/morador/{{$morador->id}}/edit" class="btn btn-dark">Editar</a>
                </td>
                <td>
                    <form action= "/morador/del/{{$morador->id}}" title = "Excluir Morador {{$morador->nome}}" method = "post">
                    @csrf
                    @method('delete')    
                    <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
                   
            </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>

@endsection


