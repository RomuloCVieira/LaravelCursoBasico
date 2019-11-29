@extends('layouts.master')
<form action="/categorias" method="POST">
    {{csrf_field()}}
    <label>Nome:</label>
    <input name="nome">
    <button type="submit">Salvar</button>
</form>