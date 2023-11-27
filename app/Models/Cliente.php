<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    use HasFactory;

    protected $table = 'cliente';

    protected $fillable = [
        'nomeCliente', 'dtNascimento', 'endereçoCliente', 'idCidade'
    ];

    public function cidade() {
        return $this->belongsTo(Cidade::class);
    }

}
