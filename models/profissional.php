<?php
use Illuminate\Database\Eloquent\Model;

class Profissional extends Model{
    public $timestamps = false;
    protected $table = 'profissional';
    protected $primaryKey = 'idprofissional';
    protected $fillable = ['nome','sexo'];
}