<?php
/**
 * User: tairo.miguel
 * Date: 15/10/2015
 * Time: 20:16
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model{

    protected $table = 'telefones';
    protected $fillable = [
        'descricao',
        'codpais',
        'ddd',
        'sufixo'
    ];

}