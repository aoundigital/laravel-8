<?php

namespace App\Http\Controllers;

use App\Models\Reembolso;
use Illuminate\Http\Request;

class ReembolsoController extends Controller
{
    public function index()
    {
        $reembolsos = Reembolso::all();

        return view('dashboard.reembolsos.index', [
            'reembolsos' => $reembolsos
        ]);
    }
}
