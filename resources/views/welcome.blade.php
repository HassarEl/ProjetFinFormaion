@extends('layouts.app')
@include('layouts.head')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
            <div class="card">
                <div class="card-header">{{ __('Home Page') }}</div>
                <div class="card-body">
                  <div class="row text-center">
                    <div class="col-lg-6">
                      <h5>Se Connecter</h5>
                      <a class="btn btn-outline-secondary" href="{{route('login')}}">Login</a>
                    </div>
                    <div class="col-lg-6">
                      <h5>Add a new jardinier</h5>
                      <a class="btn btn-outline-secondary" href="{{route('register')}}">Register</a>
                    </div>
                  </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection