<?php

namespace App\Http\Controllers;

use App\Models\ProdutoGrupo;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    function produtos() {

        $produto_grupo = ProdutoGrupo::all();

        return view ('produtos')->with('produto_grupo',$produto_grupo);
    }
}
