<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\For_;

class ClienteController extends Controller
{
    function idoso() {


        $idodo =  Carbon::now()->subYears(70)->toDateString();

        Cliente::where('dt_nascimento' ,'<=', $idodo)->update(['nm_cliente'=>'IDOSO']);

        return redirect('/');
    }

}
