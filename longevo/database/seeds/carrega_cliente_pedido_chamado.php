<?php

use Illuminate\Database\Seeder;
use App\Cliente;
use App\Pedido;
use App\Chamado;

class carrega_cliente_pedido_chamado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	Cliente::create(['nome'=>'Cliente 1', 'email'=>'cliente1@longevo.com.br']);
     	Cliente::create(['nome'=>'Cliente 2', 'email'=>'cliente2@longevo.com.br']);
     	Cliente::create(['nome'=>'Cliente 3', 'email'=>'cliente3@longevo.com.br']);
     	Cliente::create(['nome'=>'Cliente 4', 'email'=>'cliente4@longevo.com.br']);
     	Cliente::create(['nome'=>'Cliente 5', 'email'=>'cliente5@longevo.com.br']);
     	Cliente::create(['nome'=>'Cliente 6', 'email'=>'cliente6@longevo.com.br']);
     	Cliente::create(['nome'=>'Cliente 7', 'email'=>'cliente7@longevo.com.br']);
     	Cliente::create(['nome'=>'Cliente 8', 'email'=>'cliente8@longevo.com.br']);
     	Cliente::create(['nome'=>'Cliente 9', 'email'=>'cliente9@longevo.com.br']);
     	Cliente::create(['nome'=>'Cliente 10', 'email'=>'cliente10@longevo.com.br']);

     	Pedido::create(['descricao'=>'Pedido 1']);
     	Pedido::create(['descricao'=>'Pedido 2']);
     	Pedido::create(['descricao'=>'Pedido 3']);
     	Pedido::create(['descricao'=>'Pedido 4']);
     	Pedido::create(['descricao'=>'Pedido 5']);
     	Pedido::create(['descricao'=>'Pedido 6']);
     	Pedido::create(['descricao'=>'Pedido 7']);
     	Pedido::create(['descricao'=>'Pedido 8']);
     	Pedido::create(['descricao'=>'Pedido 9']);
     	Pedido::create(['descricao'=>'Pedido 10']);

     	Chamado::create(['pedido_id'=>'1', 'cliente_id'=>'1', 'titulo'=>'titulo-1', 'observacao'=>'observacao-1']);
     	Chamado::create(['pedido_id'=>'2', 'cliente_id'=>'2', 'titulo'=>'titulo-2', 'observacao'=>'observacao-2']);
     	Chamado::create(['pedido_id'=>'3', 'cliente_id'=>'3', 'titulo'=>'titulo-3', 'observacao'=>'observacao-3']);
     	Chamado::create(['pedido_id'=>'4', 'cliente_id'=>'4', 'titulo'=>'titulo-4', 'observacao'=>'observacao-4']);
     	Chamado::create(['pedido_id'=>'5', 'cliente_id'=>'5', 'titulo'=>'titulo-5', 'observacao'=>'observacao-5']);
     	Chamado::create(['pedido_id'=>'6', 'cliente_id'=>'6', 'titulo'=>'titulo-6', 'observacao'=>'observacao-6']);
     	Chamado::create(['pedido_id'=>'7', 'cliente_id'=>'7', 'titulo'=>'titulo-7', 'observacao'=>'observacao-7']);
     	Chamado::create(['pedido_id'=>'8', 'cliente_id'=>'8', 'titulo'=>'titulo-8', 'observacao'=>'observacao-8']);
     	Chamado::create(['pedido_id'=>'9', 'cliente_id'=>'9', 'titulo'=>'titulo-9', 'observacao'=>'observacao-9']);
     	Chamado::create(['pedido_id'=>'10', 'cliente_id'=>'10', 'titulo'=>'titulo-10', 'observacao'=>'observacao-10']);
     	
    }
}
