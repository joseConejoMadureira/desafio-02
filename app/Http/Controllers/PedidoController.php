<?php

namespace App\Http\Controllers;

use App\Models\PedidoItem;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    function gruposMaiorVenda() {


        $gruposMaiorVenda = PedidoItem::join('pedidos', 'pedido_itens.id_pedido', '=', 'pedidos.id_pedido')

            ->get();



        return view ('gruposMaiorVenda')->with('gruposMaiorVenda',$gruposMaiorVenda);
    }

    function maiorVenda() {

        $gruposMaiorVenda = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));

        return view ('gruposMaiorVenda')->with('gruposMaiorVenda',$gruposMaiorVenda);
    }

}
