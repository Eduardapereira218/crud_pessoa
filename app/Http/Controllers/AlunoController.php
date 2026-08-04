<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    // Lista todos os alunos cadastrados
    public function index()
    {
        // Busca todos os registros da tabela alunos
        return Aluno::all();
    }

    // Cadastra um novo aluno
    public function store(Request $request)
    {
        // Cria um novo aluno utilizando os dados enviados
        $aluno = Aluno::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'curso' => $request->curso
        ]);

        // Retorna o aluno cadastrado
        return response()->json($aluno, 201);
    }

    // Exclui um aluno pelo ID
    public function destroy( )
    {
        // Procura o aluno pelo ID
        $aluno = Aluno::find($id);

        // Verifica se o aluno existe
        if (!$aluno) {
            return response()->json([
                'mensagem' => 'Aluno não encontrado.'
            ], 404);
        }

        // Exclui o aluno
        $aluno->delete();

        // Retorna mensagem de sucesso
        return response()->json([
            'mensagem' => 'Aluno excluído com sucesso.'
        ]);
    }
}