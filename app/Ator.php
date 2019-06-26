<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    protected $table = "ator";
    protected $primaryKey = "ator_id";
    public $timestamps = false;

}
// timestamps - quando o dado foi criado, usado para o controle de data. tirando isso, não permitimos o laravel de usar o seu padrão para criar duas colunas com essas datas.