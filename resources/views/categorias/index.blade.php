@extends('layouts.master')

<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>data de Cadastro</th>
            <th>data da Ultima atualização</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td><a href="/categorias/{{$value->id}}">{{$value->nome}}</a></td>
                <td>{{$value->created_at}}</td>
                <td>{{$value->updated_at}}</td>
                <td>
                    <button><a href="/categorias/{{$value->id}}/edit">Editar</a></button>
                    <form action="/categorias/{{$value->id}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('delete')}}
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button><a href="/categorias/create">nova categoria</a></button></td>
        </tr>
    </tfoot>
</table>