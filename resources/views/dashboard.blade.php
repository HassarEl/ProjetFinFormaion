@extends('layouts.master')

@section('title')
    
@endsection

@section('css')

@endsection

@section('title_header')
    {{auth()->user()->name}}
@endsection

@section('title_page1')
    <a class="btn btn-outline-secondary" href="{{route('dashboard')}}">Home</a>
@endsection

@section('title_page2')
    
@endsection

@section('content')
{{-- Question 4 --}}
<div class="content">
    @if (session()->has('message'))
    <div class="alert alert-success  alert-dismissible fade show" role="alert">
        {{session()->get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
      </div>
    @endif
</div>
<section class="content pl-5 pr-5">

    <div class="card text-center">
      <div class="card-header">
        <h2 class="card-title">Jardinier</h2>
      </div>

      <div class="card-body p-0">
        <h2 class="text-header">Name Jardinier Connecter : <span class="badge text-bg-dark">{{auth()->user()->name}}</span></h2>

        <h3 class="text-header">Date D'embauche : 
            <span class="badge text-bg-dark">
                @foreach($jardiniers as $jardinier)
                    @if($jardinier->id == auth()->user()->id )
                            {{$date_jardinier = $jardinier->date_embauche}}
                    @endif
                @endforeach
            </span>
        </h3>
        
      </div>

    </div>


</section>
@endsection

@section('scripts')

@endsection