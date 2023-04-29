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
    
@endsection

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
                          <th>Acction</th>
                        </tr>
                      </thead>
                      <tbody>
                    
                    @foreach($jardin_plants as $plante)
                        <tr>
                            <td>
                                {{$plante->name}}
                            </td>
                            <td>
                               @foreach($pivot as $piv)
                               {{$piv->quantite}}
                               {{-- @dd($piv->id) --}}
                               @endforeach
                            </td>
                            
                            <td>
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
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection