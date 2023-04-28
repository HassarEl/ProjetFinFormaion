<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Jardin;
use Illuminate\Http\Request;

class ContenuController extends Controller
{
    public function index()
    {
        $jardins = Jardin::all();
        $plantes = Plant::all();
        return view('contenu.index', compact('jardins', 'plantes'));
    }

    public function create()
    {
        $jardins = Jardin::all();
        $plantes = Plant::all();
        return view('contenu.create', compact('jardins', 'plantes'));
    }
}
