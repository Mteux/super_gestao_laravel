<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    //

    use HasFactory;  // 👈 ADICIONE ESTA LINHA

    protected $table = 'site_contatos';  // Ajuste para o nome da sua tabela

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'motivo_contato',
        'mensagem',
    ];
}
