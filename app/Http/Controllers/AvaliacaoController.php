<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    public function index()
    {
        $avaliacaos = Avaliacao::all();

        return view('dashboard.avaliacaos.index', [
            'avaliacaos' => $avaliacaos
        ]);
    }
}
