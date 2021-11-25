<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pdvitens extends Model
{
    use HasFactory;
    protected $fillable = ['id_cliente', 'id_produto','vunit', 'qde' , 'vtotal' , 'unid' ];


}
