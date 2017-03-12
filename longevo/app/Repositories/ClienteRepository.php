<?php
namespace App\Repositories;

use App\Cliente;

class ClienteRepository
{
	public function getCliente($request)
	{
		$cliente = Cliente::where(['email'=>$request->input('txtEmail')])->first();

		if(! $cliente)
		{
			$cliente = Cliente::create(
				[
					'nome'=>$request->input('txtNome'), 
					'email'=>$request->input('txtEmail')
				]
			);			
		}

		return $cliente;
	}
}

?>