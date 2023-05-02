@extends('layouts.master')

@section('title')
    
@endsection

@section('css')
    <style>
        .table {
            border-radius: 10px !important;
            box-shadow: 0 2px 8px rgba(94, 94, 94, 0.4);
        }
    </style>
@endsection

@section('title_header')

@endsection

@section('title_page1')
    <a class="btn btn-outline-secondary" href="{{url('/dashboard')}}">Home</a>
@endsection
    <a class="btn btn-outline-secondary" href="{{route('contenu.create')}}">Add Content</a>
@section('title_page2')
    
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h4>Jardin : {{$jardin->nomJardin}}</h4>
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <label class="form-label">Composition</label>
            </div>
            <div class="card-body d-flex justify-content-center">
                <div class="col-8">
                    <table class="table table-bordere">
                      <thead>
                        <tr>
                          <th>Plante</th>
                          <th>Quantite</th>
                          <th>Date Plantation</th>
                          <th>Acction</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($contents as $content)
                        <tr>
                            <td>
                                @foreach($plantes as $plant)
                                    @if($name_plante = $plant->id == $content->plant_id)
                                        {{$plant->name}}
                                    @endif
                                @endforeach
                            </td>
                            
                            <td>
                                
                                {{$content->quantite}}
            
                            </td>
                            <td>
                                {{$content->date_plantation}}
                            </td>
                            
                            <td>
                                
                                <form method="POST" action="{{url('/contenu/'. $content->id)}}" accept-charset="UTF-8" >
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
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection