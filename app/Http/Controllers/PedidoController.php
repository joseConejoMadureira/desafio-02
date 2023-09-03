<?php

namespace App\Http\Controllers;

use App\Models\PedidoItem;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    function gruposMaiorVenda() {


        $gruposMaiorVenda = PedidoItem::join('pedidos', 'pedido_itens.id_pedido', '=', 'pedidos.id_pedido')

                                              ->join('produtos', 'pedido_itens.id_produto', '=', 'produtos.id_produto')
                                              ->join('produto_grupos', 'produtos.id_produto_grupo', '=', 'produto_grupos.id_produto_grupo')
                                              ->whereYear('pedidos.dt_pedido', '=', 2023)
                                              ->whereMonth('pedidos.dt_pedido', '=', 9)
                                              ->select('produto_grupos.nm_produto_grupo')
                                              ->orderBy('pedido_itens.qt_produto','desc')
                                              ->take(5)
                                              ->get()
                                              ->unique("nm_produto_grupo");







        return view ('gruposMaiorVenda')->with('gruposMaiorVenda',$gruposMaiorVenda);
    }

    function maiorVenda() {

        $gruposMaiorVenda = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));

        return view ('gruposMaiorVenda')->with('gruposMaiorVenda',$gruposMaiorVenda);
    }

}
