@extends('layouts.master')

@section('title')
    Plante
@endsection

@section('css')

@endsection

@section('title_header')
    Plante {{$plante->name}}
@endsection

@section('title_page1')
    <a class="btn btn-outline-secondary" href="{{url('/dashboard')}}">Home</a>
@endsection

@section('title_page2')
    <a class="btn btn-outline-secondary" href="{{url('/plante')}}">Plante</a>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card " style="margin:20px;">
                <div class="card-header">Plante Page</div>
                <div class="card-body">
                    <div class="card-body">
                        <h1 class="card-text"> Nom Plante : {{ $plante->name}}</h1>
                        <h4 class="card-text"> Num Plante: {{ $plante->id }}</h4>
                        <h5 class="card-text">Origine : {{ $plante->origin }}</h5>
                        <h5 class="card-text">Prix : {{ $plante->price }}</h5>
                        <h5 class="card-text"> Jardin : 
                            <ul>
                                @foreach($plante->jardins as $jardin)
                                <li>{{$jardin->nomJardin}}</li>
                                @endforeach
                            </ul>
                            
                        </h5>
                    </div>
                  </hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection