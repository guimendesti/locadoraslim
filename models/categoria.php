<?php
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model{
    public $timestamps = false;
    protected $table = 'categoria';
    protected $primaryKey = 'idcategoria';
    protected $fillable = ['nome'];
}