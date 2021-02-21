<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    use HasFactory;

    public function templateAtividade(){
        return $this->hasMany('App\Models\TemplateAtividade');
    }

    public function usuarios(){
        return $this->hasMany('App\Models\Usuario');
    }
}
