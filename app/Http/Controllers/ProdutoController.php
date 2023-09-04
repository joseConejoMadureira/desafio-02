<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\ProdutoGrupo;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    function produtos() {

        $produto_grupo = ProdutoGrupo::all();

        return view ('produtos')->with('produto_grupo',$produto_grupo);
    }

    function cadastroProduto(){

        $produto_grupo = request('produto_grupo', 0);
        $nm_produto = request('nm_produto', 0);
        $vl_compra = request('vl_compra', 0);
        $vl_venda = request('vl_venda', 0);
        $produto = request('produto', 0);


        $Produto = new Produto;
        $Produto->nm_produto = $nm_produto;
        $Produto->vl_compra = $vl_compra;
        $Produto->vl_venda = $vl_venda;
        $Produto->produto = $produto;
        $Produto->id_produto_grupo = $produto_grupo;
        $Produto->save();

        return redirect('/');
    }
}
