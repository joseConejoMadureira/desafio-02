<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    function idoso() {

        Cliente::where('dt_nascimento' ,'<=', '1953-09-3')->update(['nm_cliente'=>'idoso']);

        return redirect('/');
    }

}
