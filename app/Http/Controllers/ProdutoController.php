<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    // Lista todos os produtos cadastrados
    public function index()
    {
        // Busca todos os registros da tabela produtos
        return Produto::all();
    }

    // Cadastra um novo produto
    public function store(Request $request)
    {
        // Cria um novo produto utilizando os dados enviados
        $produto = Produto::create([
            'nome' => $request->nome,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
        ]);

        // Retorna o produto cadastrado
        return response()->json($produto, 201);
    }

    // Exclui um produto pelo ID
    public function destroy($id)
    {
        // Procura o produto pelo ID
        $produto = Produto::find($id);

        // Verifica se o produto existe
        if (!$produto) {
            return response()->json([
                'mensagem' => 'Produto não encontrado.'
            ], 404);
        }

        // Exclui o produto
        $produto->delete();

        // Retorna mensagem de sucesso
        return response()->json([
            'mensagem' => 'Produto excluído com sucesso.'
        ]);
    }
}