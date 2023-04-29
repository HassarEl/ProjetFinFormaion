<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Jardin;
use App\Models\Jardinplante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContenuController extends Controller
{
    public function index()
    {
        // $jardins = Jardin::all();
        $jardins =  DB::table('jardins')->where('user_id', auth()->user()->id)->get();
        $plantes = Plant::all();
        return view('contenu.index', compact('jardins', 'plantes'));
    }
    public function content(Request $request){

        // dd($request->jardin);
        $jardin = Jardin::find($request->jardin);
        $jardin_plants = Jardin::find($request->jardin)->plants()->get();
        $pivot = Jardinplante::all()->where('jardin_id', $request->jardin);

        return view('contenu.content' , compact('jardin', 'jardin_plants', 'pivot'));
    }

    public function create()
    {
        $jardins =  DB::table('jardins')->where('user_id', auth()->user()->id)->get();
        $plantes = Plant::all();
        
        return view('contenu.create', compact('jardins', 'plantes'));
    }

    public function attach(Request $request)
    {
        $jardins =  DB::table('jardins')->where('user_id', auth()->user()->id)->get();
        $plantes = Plant::all();
        dd($request);
        return view('contenu.attach', compact('jardins', 'plantes'));
    }
}
