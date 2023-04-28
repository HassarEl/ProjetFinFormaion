@extends('layouts.master')

@section('title')
    Contenu
@endsection

@section('css')

@endsection

@section('title_header')
    Contenu De Jardin
@endsection

@section('title_page1')
    <a class="btn btn-outline-secondary" href="{{route('dashboard')}}">Home</a>
@endsection

@section('title_page2')
    
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a class="btn btn-primary" href="{{route('contenu.attach')}}">Ajouter Plantes</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="card m-0">
                <div class="card-header">
                  Contenu Jardin Plante
                </div>
                <div class="card-body">
                  
                    <form class="form">
                        <div class="col-12">
                          <label for="inputEmail4" class="form-label">Liste Jardins</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Select Jardin</option>
                            @foreach($jardins as $jardin)
                            <option value="{{$jardin->nomJardin}}">{{$jardin->nomJardin}}</option>
                            @endforeach
                          </select>
                        </div>
                        <br>
                        <div class="col-8">
                          <label for="inputPassword4" class="form-label">Composition</label>
                          <table class="table  table-bordere">
                            <thead>
                              <tr>
                                <th>Plante</th>
                                <th>Quantite</th>
                                <th>Acction</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                                @foreach($plantes as $plante)
                                    <tr>
                                        <td>
                                            {{$plante->name}}
                                        </td>
                                        <td>
                                            <input name="quantité" type="text" class="form-control">
                                        </td>
                                        <td align="center">

                                            <form method="POST" action="" accept-charset="UTF-8" >
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Doctor" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                          </table>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-6">
                                <select class="form-select" name="" id="">
                                    <option selected>Selection La Plante</option>
                                    @foreach($plantes as $plante)
                                        <option value="{{$plante->id}}">{{$plante->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@endsection