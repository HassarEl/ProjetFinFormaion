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
        $content = Jardinplante::all();
        $jardins =  DB::table('jardins')->where('user_id', auth()->user()->id)->get();
        $plantes = Plant::all();
        return view('contenu.index', compact('jardins', 'plantes'));
    }
    public function content(Request $request)
    {
        $plantes = Plant::all();
        $jardin = Jardin::find($request->jardin);
        $jardin_plants = Jardin::find($request->jardin)->plants()->get();
        $contents = Jardinplante::all()->where('jardin_id', $request->jardin);

        return view('contenu.content' , compact('jardin', 'jardin_plants', 'contents', 'plantes'));
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
        
        foreach($request->plante as $key=>$plant){
            $data = new Jardinplante();
            $data-> plant_id = $plant;
            $data->jardin_id = $request->jardin;
            $data->quantite = $request->quantite[$key];
            $data->date_plantation = date(now());
            $data->save();
        }
        return redirect()->route('contenu.content');
        
    }

    public function destroy($id)
    {

        Jardinplante::destroy($id);
        return redirect()->route('contenu.index')->with('message', 'Attach Has Been Detached');
    }
}
