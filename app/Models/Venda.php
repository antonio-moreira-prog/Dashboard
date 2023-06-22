<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $fillable = ['codigo_produto', 'nome_produto', 'descricao_produto', 'preco_produto', 'quantidade_produto'];
}
