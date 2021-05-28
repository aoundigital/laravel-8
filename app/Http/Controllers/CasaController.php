<?php

namespace App\Http\Controllers;

use App\Models\Casa;
use Illuminate\Http\Request;

class CasaController extends Controller
{
    public function index()
    {
        $casas = Casa::all();

        return view('dashboard.casas.index', [
            'casas' => $casas
        ]);
    }
}
