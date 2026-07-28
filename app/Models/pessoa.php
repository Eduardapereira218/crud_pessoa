<?php
 
// Define o namespace (localização) da classe dentro do projeto
namespace App\Models;
 
// Importa a classe Model do Laravel
// Ela permite que nossa classe converse com o banco de dados
use Illuminate\Database\Eloquent\Model;
 
// Cria a classe Pessoa, que representa a tabela "pessoas"
class Pessoa extends Model
{
    // Define quais campos podem receber informações
    // através de cadastro ou atualização (mass assignment)
    protected $fillable = [
        'nome' // Campo que será salvo no banco de dados
    ];
}

