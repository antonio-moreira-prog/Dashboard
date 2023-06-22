<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_fornecedor',
        'cnpj_fornecedor',
        'tipo_fornecedor',
        'email_fornecedor',
        'numero_fornecedor',
    ];
}
