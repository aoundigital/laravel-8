<?php

namespace App\Http\Controllers;

use App\Models\Barco;
use Illuminate\Http\Request;

class BarcoController extends Controller
{
    public function index()
    {
        $barcos = Barco::all();

        return view('dashboard.barcos.index', [
            'barcos' => $barcos
        ]);
    }
}
