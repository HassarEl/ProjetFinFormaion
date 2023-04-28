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
        <div class="col-lg-4">
            <h4>Jardin : {{$jardin->nomJardin}}</h4>
        </div>
        
    </div>
    <br>
    <div class="row">
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
            
            @foreach($jardin_plants as $plante)
                <tr>
                    <td>
                        {{$plante->name}}
                    </td>
                    <td>
                       {{$pivot}}
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
    </div>
</div>
@endsection

@section('scripts')

@endsection