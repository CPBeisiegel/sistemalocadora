<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    private $table = "filme";
    private $primaryKey = "filme_id";
}
// fazemos para conectar com o banco de dados