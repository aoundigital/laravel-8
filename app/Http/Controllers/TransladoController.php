<?php

namespace App\Http\Controllers;

use App\Models\Translado;
use Illuminate\Http\Request;

class TransladoController extends Controller
{
    public function index()
    {
        $translados = Translado::all();

        return view('dashboard.translados.index', [
            'translados' => $translados
        ]);
    }
}
