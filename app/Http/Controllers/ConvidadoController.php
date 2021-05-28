<?php

namespace App\Http\Controllers;

use App\Models\Convidado;
use Illuminate\Http\Request;

class ConvidadoController extends Controller
{
    public function index()
    {
        $convidados = Convidado::all();

        return view('dashboard.convidados.index', [
            'convidados' => $convidados
        ]);
    }
}
