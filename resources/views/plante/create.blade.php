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

<div class="container d-flex justify-content-center">
    <div class="col-md-10 grid-margin stretch-card pt-5">
        <div class="card pt-2">
          <div class="card-body">
            @if (session()->has('message'))
            <div class="alert alert-success  alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
              </div>
            @endif
            <h2 class="header_card">Ajouter Plante</h2>
            <form class="forms-sample" action="{{route('plante.store')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="phone" class="col-sm-3 col-form-label">Nom Plante</label>
                <div class="col-sm-9">
                  <input type="text" name="name" class="form-control" id="exampleInputEmail2" placeholder="name plante" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Origine</label>
                <div class="col-sm-9">
                  <input required type="text" class="form-control" name="origin" id="exampleInputUsername2" placeholder="Origin" required>
                </div>

              </div>
              <div class="form-group row">
                <label for="phone" class="col-sm-3 col-form-label">price</label>
                <div class="col-sm-9">
                  <input type="text" name="price" class="form-control" id="exampleInputEmail2" placeholder="price">
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary me-2">Ajouter</button>
                    <button type="reset" class="btn btn-dark">Supprimer</button>
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
</div>

@endsection

@section('scripts')

@endsection