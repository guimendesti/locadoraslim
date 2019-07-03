<?php
use Illuminate\Database\Eloquent\Model;

class LocacaoFilme extends Model{
    public $timestamps = false;
    protected $table = 'locacaofilme';
    protected $primaryKey = ['idlocacao','idfilme'];
    protected $fillable = ['idlocacao','idfilme'];
}