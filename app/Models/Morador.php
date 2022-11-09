<?php

namespace App\Models;

use App\Models\Apartamento;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    protected $fillable = ['morador_id','id_apto','nome','cpf','telefone','email'];

}
