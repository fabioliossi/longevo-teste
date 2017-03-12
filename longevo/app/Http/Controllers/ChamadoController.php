<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Chamado;
use App\Pedido;

class ChamadoController extends Controller
{

	public function index(Request $request)
	{
		$email = $request->input('email');
		$pedido = $request->input('pedido');

		$chamados = Chamado::with(['cliente','pedido'])->orderBy('id','');
		
		if(!empty($email))
		{
			$chamados = $chamados->whereHas('cliente', function ($query) use ($request,$email) 
			{
    			$query->where('email', $email);
			});
		}

		if(!empty($pedido))
		{
			$chamados = $chamados->whereHas('pedido', function ($query) use ($request, $pedido) 
			{
    			$query->where('id', $pedido);
			});
		}

		$chamados = $chamados->paginate(5);

		return view('index',['chamados'=>$chamados, 'email'=>$email, 'pedido'=>$pedido]);

	}

	public function create(Request $request)
 	{
 		return view('form');
 	}

 	public function store(Request $request)
 	{

		if( ! Pedido::where(['id'=>$request->input('txtPedido')])->first()  )
		{
			return response("Pedido não encontrado",400);
		}

		$cliente = Cliente::where(['email'=>$request->input('txtEmail')])->first();

		if(! $cliente)
		{
			$cliente = Cliente::create(['nome'=>$request->input('txtNome'), 'email'=>$request->input('txtEmail')]);			
		}

		Chamado::create(
			[
				'cliente_id'=>$cliente->id,
				'pedido_id'=>$request->input('txtPedido'),
				'titulo'=>$request->input('txtTitulo'),
				'observacao'=>$request->input('txtObservacao')
			]);

		return response("Chamado cadastrado com sucesso!",200);
    	
 	}
}
