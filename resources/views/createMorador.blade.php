@extends('templates.template')

@section('content')
    
<h1 class = "text-center">Cadastrar Morador</h1>


@if( Request::is('*/edit'))
<h1 class = "text-center">Editar Apartamento</h1>

<form action = "{{ route('update_morador', $morador->id) }}" method = "post">
    @csrf 
    <div class="form-group">
        <div class="form-group">
            <label for = "ID Apartamento">Id Apartamento</label>
            <input name="id_apto" type="number" class="form-control" value="{{ $morador->id_apto }}">
        </div>
        <div class="form-group">
            <label for = "Nome">Nome</label>
            <input name="nome" type="text" class="form-control" value="{{ $morador->nome }}">
        </div>
        <div class="form-group">
            <label for = "CPF">CPF</label>
            <input name="cpf" type="text" class="form-control" value="{{ $morador->cpf }}">
        </div>
        <div class="form-group">
            <label for = "Telefone">Telefone</label>
            <input name="telefone" type="text" class="form-control" value="{{ $morador->telefone }}">
        </div>
        <div class="form-group">
            <label for = "Email">Email</label>
            <input name="email" type="text" class="form-control" value="{{ $morador->email }}">
        </div>
    </div>
    
    <button type="submit" class="btn btn-dark">Salvar</button>
    
    @else
    
    <form action = "{{ route('salvar_morador') }}" method = "post">
    @csrf 
    <div class="form-group">
        <div class="form-group">
            <label for = "ID Apartamento">Id Apartamento</label>
            <input name="id_apto" type="number" class="form-control" placeholder="ID Apto">
        </div>
        <div class="form-group">
            <label for = "Nome">Nome</label>
            <input name="nome" type="text" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for = "CPF">CPF</label>
            <input name="cpf" type="text" class="form-control" placeholder="CPF">
        </div>
        <div class="form-group">
            <label for = "Telefone">Telefone</label>
            <input name="telefone" type="text" class="form-control" placeholder="Telefone">
        </div>
        <div class="form-group">
            <label for = "Email">Email</label>
            <input name="email" type="text" class="form-control" placeholder="Email">
        </div>
    </div>
    
    <button type="submit" class="btn btn-dark">Salvar</button>
    
    @endIf

</form>

@endsection