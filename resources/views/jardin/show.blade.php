@extends('layouts.master')

@section('title')
    
@endsection

@section('css')

@endsection

@section('title_header')

@endsection

@section('title_page1')
    
@endsection

@section('title_page2')
    
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card " style="margin:20px;">
                <div class="card-header">Jardin Page</div>
                <div class="card-body">
                      <div class="card-body">
                      <h1 class="card-text"> Nom Jardin: {{ $jardins->NumJ }}</h1>
                      <h4 class="card-text"> Ville : {{ $jardins->ville}}</h4>
                      <h5 class="card-text">Address : {{ $jardins->adresse }}</h5>
                      <h5 class="card-text">superficie : {{ $jardins->superficie }}</h5>
                      <h5 class="card-text"> Jardinier : 
                      @foreach($users as $user)
                        @if($user->id == $jardins->user_id)
                            {{$name_jardinier = $user->name}}
                        @endif
                      @endforeach
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