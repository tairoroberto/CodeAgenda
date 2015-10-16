<?php
/**
 * User: tairo.miguel
 * Date: 15/10/2015
 * Time: 20:13
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model {
    protected $table = 'pessoas';
    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones(){

    }
}