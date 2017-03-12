<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChamadoRequest;
use App\Repositories\ClienteRepository;
use App\Repositories\ChamadoRepository;
use App\Cliente;
use App\Chamado;
use App\Pedido;

class ChamadoController extends Controller
{

	public $clienteRepository;
	public $chamadoRepository;

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

 	public function store(ChamadoRequest $request)
 	{

		if( ! Pedido::where(['id'=>$request->input('txtPedido')])->first()  )
		{
			return response()->json(["pedido"=>["Pedido não encontrado"]],400);
		}

		$this->clienteRepository = new ClienteRepository();
		$this->chamadoRepository = new ChamadoRepository();

		$cliente = $this->clienteRepository->getCliente($request);
		$chamado = $this->chamadoRepository->save($request,$cliente);

		$resposta = response("Chamado cadastrado com sucesso!",200);	

		if(! $chamado)
		{
			$resposta = response("Erro ao salvar o chamado.",401);	
		}

		return $resposta;
 	}
}