<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     * Este método retorna a visualização da lista de todas as cidades.
     */
    public function index()
    {
        $cidades = Cidade::all();  // Busca todas as cidades no banco de dados
        return view('cidades.index', compact('cidades'));  // Retorna a view com as cidades
    }

    /**
     * Display the specified resource.
     * Este método retorna a visualização de uma cidade específica.
     *
     * @param Cidade $cidade  // Injeção de modelo para acessar a cidade solicitada diretamente
     */
    public function show(Cidade $cidade)
    {
        return view('cidades.show', compact('cidade'));  // Retorna a view com a cidade especificada
    }

    // Aqui você pode adicionar outros métodos como create, store, edit, update, destroy
    // se você quiser permitir mais operações CRUD neste controlador.
}
