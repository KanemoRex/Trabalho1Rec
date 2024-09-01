<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;

    // Defina a tabela associada ao model
    protected $table = 'mensagens';

    // Defina os atributos que são atribuíveis em massa
    protected $fillable = ['mensagem'];
}
