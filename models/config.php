<?php
use Illuminate\Database\Eloquent\Model;

class Config extends Model{
    public $timestamps = false;
    protected $table = 'config';
    protected $primaryKey = 'idconfig';
    protected $fillable = ['nome','valor','descricao'];
}