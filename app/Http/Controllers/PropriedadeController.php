<?php

namespace App\Http\Controllers;

use App\Models\Propriedade;
use App\Models\Viagem;
use Illuminate\Http\Request;

class PropriedadeController extends Controller
{
    public function index()
    {
        $propriedades = Propriedade::with('viagem')->get();

        return view('dashboard.propriedades.index', [
            'propriedades' => $propriedades
            ]);

        //buscar reembolsos por viagem
        // $rembolso = Viagem::find(1)->reembolso->where('viagems_id', 1);
    }
}
