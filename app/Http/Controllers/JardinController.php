<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Jardin;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class JardinController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::all();
        $jardins = Jardin::all();
        return view('jardin.index', compact('jardins', 'users'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jardin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jardin = new Jardin();

        // $image = $request->file('file');
        // $destinationPath = public_path('jardinimage');
        // $imagename=time().'.'.$image->getClientOriginalExtension();
        // $image->move($destinationPath, $imagename);

        $jardin->NumJ=$request->NumJ;
        $jardin->nomJardin=$request->nomJardin;
        $jardin->adresse=$request->adresse;
        $jardin->ville=$request->ville;
        $jardin->superficie=$request->superficie;
        $jardin->image='image';
        $jardin->user_id=auth()->user()->id;
        $jardin->save();

        if(Auth::user()->profil == 'admin'){
            return redirect('jardin')->with('message', 'Jardin Has Been Added Seccessfuly');
        }
        else{
            return redirect('vosJardin')->with('message', 'Jardin Has Been Added Seccessfuly');
        }
    }

    /**
     
    *@param  \App\Models\Jardin $jardin
    *@return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users= User::all();
        $jardin = Jardin::find($id);

        return view('jardin.show', compact('users'))->with('jardins', $jardin);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Jardin::destroy($id);

        return redirect('jardin')->with('message', 'Jardin Has Been Deleted');
    }

}

