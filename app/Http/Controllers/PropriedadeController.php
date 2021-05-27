<?php

namespace App\Http\Controllers;

use App\Models\Propriedade;
use Illuminate\Http\Request;

class PropriedadeController extends Controller
{
    public function index()
    {
        $propriedades = Propriedade::all();

        return view('dashboard.propriedades.index', [
            'propriedades' => $propriedades
        ]);
    }
}
