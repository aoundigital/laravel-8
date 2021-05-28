<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateViagens;
use App\Models\Viagem;
use Illuminate\Http\Request;

class ViagemController extends Controller
{
    public function index()
    {
        $viagens = Viagem::with([
            'propriedade', 'reembolso', 'pernoite', 'translado', 'avaliacao'
        ])->paginate();

        return view('dashboard.viagens.index', [
            'viagens' => $viagens
        ]);
    }

    public function create()
    {
        return view('dashboard.viagens.criar');
    }

    public function store(StoreUpdateViagens $request)
    {
        Viagem::create($request->all());

        return redirect()->route('viagens.index');
    }

}
