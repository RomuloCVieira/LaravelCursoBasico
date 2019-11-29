<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Produto;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    public function index()
    {
        // return Categoria::all();
        $categorias = Categoria::all();
        // return view('categorias.index',['categorias' => $categorias]);
        return view('categorias.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->save();
        return redirect('categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        return view('categorias.show',compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->nome = $request->nome;
        $categoria->save();
        return redirect('categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect('categorias');
    }
    
    public function createProduto($categoria_id)
    {
        return view('categorias.produtos.create',compact('categoria_id'));
    }

    public function storeProduto(Request $request, Categoria $categoria_id)
    {
        $produto  = new Produto();
        $produto->nome          = $request->nome;
        $produto->qtde          = $request->qtde;
        $produto->valor         = $request->valor;
        $produto->foto          = $request->foto;
        $produto->descricao     = $request->descricao;
        $produto->cor           = $request->cor;
        $produto->categoria_id  = $categoria_id->id;
        $categoria_id->produtos()->save($produto);
        return redirect("/categorias/$categoria_id->id");
    }
}
