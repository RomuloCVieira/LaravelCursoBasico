@extends('layouts.master')
<h1>{{$categoria->nome}}</h1>
<button>
    <a href="/categorias/{{$categoria->id}}/produtos/create">
        Inserir produto
    </a>
</button>
<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Cor</th>
            <th>Qtde</th>
            <th>Valor</th>
            <th>Foto</th>
            <th>Descrição</th>
            <th>ID da categoria</th>
            <th>Ultima atualização</th>
            <th>Data de Cadastro</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categoria->produtos as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->nome}}</td>
            <td>{{$value->cor}}</td>
            <td>{{$value->qtde}}</td>
            <td>{{$value->valor}}</td>
            <td>{{$value->foto}}</td>
            <td>{{$value->descricao}}</td>
            <td>{{$value->categoria_id}}</td>
            <td>{{$value->updated_at}}</td>
            <td>{{$value->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>