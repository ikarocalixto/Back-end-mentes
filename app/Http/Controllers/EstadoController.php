<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Exibe uma listagem do recurso.
     * Acessível via GET /estados
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();  // Recupera todos os estados do banco de dados
        return view('estados.index', compact('estados'));  // Envia os estados para a view
    }

    /**
     * Exibe o recurso especificado.
     * Acessível via GET /estados/{id}
     *
     * @param Estado $estado  // Estado é automaticamente resolvido pelo Laravel através da injeção de modelo
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        return view('estados.show', compact('estado'));
    }
    
    
    // Se você decidir implementar métodos adicionais para criar, editar ou deletar estados,
    // você pode adicionar métodos como create(), store(), edit(), update(), destroy() aqui.
}
