@extends('layouts.master')
<form action="/categorias/{{$categoria_id}}/produtos" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="id">ID:</label>
        <input 
            type            = "text" 
            name            = "id" 
            class           = "form-control" 
            readonly        =  ""
            value           = ""
        >
    </div>
    <div class="form-group">
        <label>Nome:</label>
        <input 
            type            = "text" 
            name            = "nome" 
            class           = "form-control" 
            placeholder     = "Digite o nome do Produto:" 
            maxlength       = "50" 
            required        = ""
            value           = ""
        >
    </div>
    <div class="form-group">
        <label>Categoria:</label>
        <select name="categoria_id" class="form-control" required="" >
            <option value="teste">sdfa</option>
            
        </select>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label>Valor do produto:</label>
            <input 
                type            = "text" 
                name            = "valor" 
                id              = "valor"
                class           = "form-control" 
                required        = ""
                value           = ""
            >
        </div>
        <div class="form-grop col-md-6">
            <label>Quantidade em estoque:</label>
            <input 
                type            = "number" 
                name            = "qtde" 
                class           = "form-control" 
                required        = "required" 
                value           = ""
            >
        </div>
    </div>  
    <div class="row">
            <div class="form-grop col-md-6">
            <label>Cor:</label>
            <select name="cor" class="form-control">
                <option value="Azul">Azul</option>
                <option value="Branco">Branco</option>
                <option value="Preto">Preto</option>
                <option value="Rosa">Rosa</option>
                <option value="Verde">Verde</option>
                <option value="Vermelho">Vermelho</option>
            </select>
        </div>
        <div class="form-group col-md-6 ">      
            <label for="foto">Foto do produto (JPG):</label>
            <input type="file" name="foto"
                class="form-control"
                value="gazin.jpg"
                required
                accept=".jpg"
            >
        </div>
    </div>
    <div class="form-group ">
        <label for="descricao">Descrição:</label>
        <textarea 
            id="descricao"
            name="descricao" 
            class="form-control"
            cols="1" 
            rows="1"
            maxlength="100"
        >
        </textarea>
    </div>
    <div class="card-footer pd-15">
        <button type="submit" class="btn btn-fill btn-success">Cadastrar</button>
    </div>
</form>