<?php
 
// Localização do arquivo dentro do projeto
namespace App\Http\Controllers;
 
// Importa o Model Pessoa
// Será usado para acessar o banco de dados
use App\Models\Pessoa;
 
// Importa o Request
// Ele recebe os dados enviados pelo usuário
use Illuminate\Http\Request;
 
// Cria o Controller da Pessoa
class PessoaController extends Controller
{
    /*
     * FUNÇÃO LISTAR
     * Responsável por buscar todas as pessoas cadastradas.
     */
    public function index()
    {
        // Busca todos os registros da tabela "pessoas" no banco
        $pessoas = Pessoa::all();
 
        // Retorna os dados encontrados em formato JSON para o Vue.js
        return response()->json($pessoas);
    }
 
    /*
     * FUNÇÃO CADASTRAR
     * Recebe os dados enviados pelo Vue e salva no banco.
     */
    public function store(Request $request)
    {
        // Cria um novo registro utilizando o nome recebido
        $pessoa = Pessoa::create([
            'nome' => $request->nome // Valor enviado pelo formulário
        ]);
 
        // Retorna a pessoa cadastrada para o Vue.js
        return response()->json($pessoa);
    }
 
    /*
     * FUNÇÃO EXCLUIR
     * Remove uma pessoa pelo ID.
     */
    public function destroy($id)
    {
        // Procura uma pessoa no banco utilizando o ID recebido
        $pessoa = Pessoa::find($id);
 
        // Exclui o registro encontrado
        $pessoa->delete();
 
        // Retorna uma mensagem informando sucesso
        return response()->json([
            'mensagem' => 'Pessoa excluída'
        ]);
    }
}