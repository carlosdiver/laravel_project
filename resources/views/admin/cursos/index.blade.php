@extends('templates.site')

@section('title', 'Cursos')

@section('content')

<div class="">
    <h3 class="center">Lista de Cursos</h3>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Publicado</th>
                    <th>Valor</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->titulo }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td>
                            <img height="50" src="{{ asset($registro->imagem) }}" alt="{{ !empty($registro->imagem) ?  $registro->titulo  : '' }}">                     </td>
                        <td>{{ $registro->publicado }}</td>
                        <td>R${{ $registro->valor }}</td>
                        <td>
                            <a class="btn deep-orange" style="margin-bottom:5px" href="{{ route('admin.cursos.editar', $registro->id) }}">Editar</a>
                            <a class="btn red" onclick="return confirm('Você realmente que deletar esse curso?')" href="{{ route('admin.cursos.deletar', $registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <a href="{{ route('admin.cursos.adicionar') }}" class="btn blue">Adicionar</a>
    </div>
</div>

@endsection