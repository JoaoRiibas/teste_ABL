@extends('templates.template')

@section('content')
    
<h1 class = "text-center">Cadastrar Apartamento</h1>
<div class = main-form>
    <form action = "{{ route('salvar_apartamento') }}" method = "post">
        @csrf 
        <div class="form-group" aling = "center">
            <div class="form-group">
                <label for = "Edificio">Edifício</label>
                <input name="nome_edificio" id="nome_edificio" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for = "Numero">Numero do Apartamento</label>
                <input name="numero_apto" id="numero_apto" type="number" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-dark">Salvar</button>
    </form>
</div>

@endsection