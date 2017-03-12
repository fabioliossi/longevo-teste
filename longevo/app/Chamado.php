<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
	protected $table = 'chamados';
	protected $fillable = ['cliente_id', 'pedido_id', 'titulo', 'observacao'];
	public $timestamps = false;

 	public function cliente(){
    	return $this->hasOne('App\Cliente','id', 'cliente_id');
    }

    public function pedido(){
    	return $this->hasOne('App\Pedido','id', 'pedido_id');
    }
}
