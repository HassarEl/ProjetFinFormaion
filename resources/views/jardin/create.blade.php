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
    <div class="col-md-10 grid-margin stretch-card pt-5">
        <div class="card pt-2">
          <div class="card-body">
            @if (session()->has('message'))
            <div class="alert alert-success  alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
              </div>
            @endif
            <h2 class="header_card">Ajouter jardin</h2>
            <form class="forms-sample" action="{{route('jardin.store')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="phone" class="col-sm-3 col-form-label">Num Jardin</label>
                <div class="col-sm-9">
                  <input type="text" name="NumJ" class="form-control" id="exampleInputEmail2" placeholder="Num Jardin" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nom Jardin</label>
                <div class="col-sm-9">
                  <input required type="text" class="form-control" name="nomJardin" id="exampleInputUsername2" placeholder="Nom Jardin">
                </div>

              </div>
              <div class="form-group row">
                <label for="phone" class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-9">
                  <input type="text" name="adresse" class="form-control" id="exampleInputEmail2" placeholder="Address">
                </div>
              </div>
              <div class="form-group row">
                <label for="speciality" class="col-sm-3 col-form-label">Ville</label>
                <div class="col-sm-9">
                    <input type="text" name="ville" class="form-control" id="exampleInputEmail2" placeholder="Ville">
                  </div>
              </div>
              <div class="form-group row">
                <label for="room_num" class="col-sm-3 col-form-label">Superficie</label>
                <div class="col-sm-9">
                  <input type="text" name="superficie" class="form-control" id="exampleInputPassword2" placeholder="Superficie">
                </div>
              </div>
              <div class="form-group row">
                <label for="room_num" class="col-sm-3 col-form-label">Image</label>
                <div class="col-sm-9">
                  <input type="file" name="image" class="form-control" id="exampleInputPassword2" placeholder="Image">
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