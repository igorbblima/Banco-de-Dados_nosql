<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarefa extends Model
{
    protected $table = "tarefas";
    protected $fillable=["titulo" , "mensagem"];

}
