<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class ClientesController extends Model
class Clientes extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'fone1'];
}
