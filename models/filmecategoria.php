<?php
use Illuminate\Database\Eloquent\Model;

class FilmeCategoria extends Model{
    public $timestamps = false;
    protected $table = 'filmecategoria';
    protected $primaryKey = ['idfilme','idcategoria'];
    protected $fillable = ['idfilme','idcategoria'];
}