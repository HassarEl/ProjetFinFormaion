<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jardin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jardin_connecterController extends Controller
{
    public function jardinier_connecter(){
        $users= User::all();

        $jardins = DB::table('jardins')->where('user_id', auth()->user()->id)->get();
        
        return view('jardin.connecter', compact('jardins', 'users'));
    }

    
}
