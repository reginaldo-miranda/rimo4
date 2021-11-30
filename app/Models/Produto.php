<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['descricao', 'un', 'grupo', 'pvenda', 'qde'];
}
