<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    function gruposMaiorVenda() {

        $gruposMaiorVenda = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));

        return view ('gruposMaiorVenda')->with('gruposMaiorVenda',$gruposMaiorVenda);
    }

    function maiorVenda() {

        $gruposMaiorVenda = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));

        return view ('gruposMaiorVenda')->with('gruposMaiorVenda',$gruposMaiorVenda);
    }

}
