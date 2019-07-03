<?php
use Illuminate\Database\Eloquent\Model;

class FilmeProfissional extends Model{
    public $timestamps = false;
    protected $table = 'filmeprofissional';
    protected $primaryKey = ['idfilme','idprofissional'];
    protected $fillable = ['idfilme','idprofissional','funcao','personagem'];
}