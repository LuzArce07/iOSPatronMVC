<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    
    protected $table = 'noticias';
    public $timestamps = false; //Es para decirle que no tiene campos de auditoria
    

}
