<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = "filme";
    protected $primaryKey = "filme_id";
    public $timestamps = false;

}
// fazemos para conectar com o banco de dados