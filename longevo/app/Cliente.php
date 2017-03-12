<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $table = 'clientes';
	protected $fillable = ['nome', 'email'];
	public $timestamps = false;

    public function chamados()
    {
    	return $this->hasMany('App\Chamado','id');
    }

    public function scopeEmail($query, $email)
    {
        return $query->where('email', $flag);
    }
}
