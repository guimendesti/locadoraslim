<?php
use Illuminate\Database\Eloquent\Model;

class Filme extends Model{
    public $timestamps = false;
    protected $table = 'filme';
    protected $primaryKey = 'idfilme';
    protected $fillable = ['nome','estoque','disponivel'];
}