<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    public function index()
    {
        $socios = Socio::all();

        return view('dashboard.socios.index', [
            'socios' => $socios
        ]);
    }
}
