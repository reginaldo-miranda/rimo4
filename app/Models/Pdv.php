<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdv extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['id_clientes','vtotal', 'status'];
}
