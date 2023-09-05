<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoItem;
use App\Models\ProdutoGrupo;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    function gruposMaiorVenda() {

        $produtoGrupo = ProdutoGrupo::all()->pluck("nm_produto_grupo");
        $gruposMaiorVenda = PedidoItem::join('pedidos', 'pedido_itens.id_pedido', '=', 'pedidos.id_pedido')
                                              ->join('produtos', 'pedido_itens.id_produto', '=', 'produtos.id_produto')
                                              ->join('produto_grupos', 'produtos.id_produto_grupo', '=', 'produto_grupos.id_produto_grupo')
                                              ->whereYear('pedidos.dt_pedido', '=', 2023)
                                              ->whereMonth('pedidos.dt_pedido', '=', 8)
                                              ->select('produto_grupos.nm_produto_grupo','pedido_itens.qt_produto')
                                              ->get();

        $listaProdutoGrupo = array();

        foreach ($produtoGrupo as $value) {

            $listaProdutoGrupo[$value]['qtd'] = $gruposMaiorVenda->where('nm_produto_grupo',$value)->sum('qt_produto');
        }

        $listaProdutoGrupo = collect($listaProdutoGrupo);
        $listaProdutoGrupo =   $listaProdutoGrupo->sortByDesc('qtd')
                                                 ->take(5);

        return view ('gruposMaiorVenda')->with('listaProdutoGrupo',$listaProdutoGrupo);
    }

    function maiorVenda() {


        $maiorVenda = PedidoItem::join('pedidos', 'pedido_itens.id_pedido', '=', 'pedidos.id_pedido')
                                              ->join('produtos', 'pedido_itens.id_produto', '=', 'produtos.id_produto')
                                              ->join('produto_grupos', 'produtos.id_produto_grupo', '=', 'produto_grupos.id_produto_grupo')
                                              ->whereYear('pedidos.dt_pedido', '=', 2023)
                                              ->selectRaw('sum(pedido_itens.qt_produto) as qtd,pedidos.dt_pedido')
                                              ->groupBy('pedidos.dt_pedido')
                                              ->orderBy('qtd','desc')
                                              ->get();

        die($maiorVenda);

        return view ('maiorVenda')->with('maiorVenda',$maiorVenda);
    }
    function pedidos() {

        $pedidos = Pedido::all();

        return view ('pedidos')->with('pedidos',$pedidos);
    }
    function excluirPedido() {

        $id = request('id', 0);
        $pedido = Pedido::where('id_pedido', $id);
        $pedido->delete();

        return redirect('/pedidos');
    }
}
