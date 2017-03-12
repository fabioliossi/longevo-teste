<?php
namespace App\Repositories;

use App\Chamado;

class ChamadoRepository
{
	public function save($request, $cliente)
	{

		try {
		    $salvar = Chamado::create(
				[
					'cliente_id'=>$cliente->id,
					'pedido_id'=>$request->input('txtPedido'),
					'titulo'=>$request->input('txtTitulo'),
					'observacao'=>$request->input('txtObservacao')
				]);

		} catch (Exception $e) {
		    $salvar = false;
		}

		return $salvar;
	}
}

?>