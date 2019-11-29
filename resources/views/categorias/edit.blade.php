@extends('layouts.master')
<form action="/categorias/{{$categoria->id}}" method="POST">
    {{csrf_field()}}
    {{method_field('patch')}}
    <label>Nome:</label>
    <input name="nome" value="{{$categoria->nome}}">
    <button type="submit">Atualizar</button>
</form>