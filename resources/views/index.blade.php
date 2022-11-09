@extends('templates.template')
@section('content')
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Seu produto</title>
  <meta charset="utf-8">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">

</head>
<body>

    <!-- Header principal -->
    <header class="header" role="banner">
      <div class="container">
        <span class="control-menu visible-xs ico-menu-2"></span>
        <span class="control-sidebar visible-xs ico-list"></span>
        <h1 class="project-name"><a href="#">Gerenciamento de Condomínio</a></h1>
      </div>
    </header>

    <!-- Menu -->
    <div class="nav-content">
      <menu class="menu">
        <ul class="container">
          <li><a href="#" class="active ico-home" role="menuitem">Home</a></li>
          <li><a href="#" role="menuitem">Apartamentos</a>
            <ul>
              <li><a href="{{route('salvar_apartamento')}}">Cadastrar</a></li>
              <li><a href="{{route('mostar_apartamanto')}}">Visualizar</a></li>
            </ul>
          </li>
          <li><a href="#" role="menuitem">Moradores</a>
          <ul>
              <li><a href="{{route('salvar_morador')}}">Cadastrar</a></li>
              <li><a href="{{url('/morador/mostrar')}}">Visualizar</a></li>
            </ul>
          </li>
        </ul>
      </menu>
    </div>
    </div>
</body>
</html>

@endsection
