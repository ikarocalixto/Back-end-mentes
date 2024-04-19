<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = request('query');
        $tipo = request('tipo', 'nome'); // Assume 'nome' como padrão
    
        $clientes = Cliente::when($query, function ($queryBuilder) use ($query, $tipo) {
            if ($tipo == 'id') {
                // Busca por ID
                return $queryBuilder->where('id', '=', $query);
            } else {
                // Busca por nome
                return $queryBuilder->where('nome', 'like', '%' . $query . '%');
            }
        })->paginate(10);
    
        return view('clientes.index', compact('clientes'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $is_edit = false;  // Indicando que é um formulário de criação
        return view('clientes.create', compact('is_edit'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
        ]);

        Cliente::create($request->all());
        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
    
        if (!$cliente) {
            return redirect()->route('clientes.index')->with('error', 'Cliente não encontrado.');
        }
    
        return view('clientes.show', compact('cliente'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $is_edit = true;  // Indicando que é um formulário de edição
        return view('clientes.edit', compact('cliente', 'is_edit'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
        ]);

        $cliente->update($request->all());
        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente atualizado com sucesso.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente deletado com sucesso.');
    }

    
}
