<?php
use Illuminate\Database\Eloquent\Model;

class Locacao extends Model{
    public $timestamps = false;
    protected $table = 'locacao';
    protected $primaryKey = 'idlocacao';
    protected $fillable = ['idcliente','datalocacao','datadevolucao','valorlocacao','valorrenovacao','valoratraso','valortotal','valorpago'];
}