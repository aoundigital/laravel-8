<?php

namespace App\Http\Controllers;

use App\Models\Pernoite;
use Illuminate\Http\Request;

class PernoiteController extends Controller
{
    public function index()
    {
        $pernoites = Pernoite::all();

        return view('dashboard.pernoites.index', [
            'pernoites' => $pernoites
        ]);
    }
}
