<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
	protected $fillable = ['descricao'];
	public $timestamps = false;

	public function chamados(){
    	return $this->hasMany('App\Chamado','id');
    }

}
