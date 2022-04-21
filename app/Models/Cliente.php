<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = ['id', 'nome', 'genero', 'data_nascimento', 'email', 'telefone', 'whatsapp', 'cep', 'endereco', 'bairro', 'cidade', 'uf', 'observacao'];
}
