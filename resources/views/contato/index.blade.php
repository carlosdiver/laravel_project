@extends('templates.site')

@section('title', 'Contatos')

@section('content')

<h3>Essa é a View Index!</h3>
<ul>
    @foreach($contatos as $contato)
    <li>Nome: {{ $contato['nome'] }} -
        Telefone: {{ $contato['tel'] }}</li>
    @endforeach
</ul>

@endsection