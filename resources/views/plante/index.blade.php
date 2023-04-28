@extends('layouts.master')

@section('title')
    Plante
@endsection

@section('css')

@endsection

@section('title_header')
    Les Plantes
@endsection

@section('title_page1')
    <a class="btn btn-outline-secondary" href="{{url('/dashboard')}}">Home</a>
@endsection

@section('title_page2')
    
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col pl-5 pb-2">
            <a class="btn btn-primary" href="{{url('plante/create')}}">Ajouter Une Plante</a>
        </div>
    </div>
    @if (session()->has('message'))
    <div class="alert alert-success  alert-dismissible fade show" role="alert">
        {{session()->get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
      </div>
    @endif
</div>
<section class="content pl-5 pr-5">

    <div class="card">
      <div class="card-header">
        <h2 class="card-title">Plante</h2>
      </div>

      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr align="center">
                    <th>
                        NumP
                    </th>
                    <th>
                        Nom Plante
                    </th>
                    <th>
                        Origine
                    </th>
                    <th>
                        Prix
                    </th>
                    <th>
                        Jardin
                    </th>
                    <th>
                        Acction
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($plantes as $plante)
                <tr align="center">
                    <td>
                        {{$plante->id}}
                    </td>
                    <td>
                        {{$plante->name}}
                    </td>
                    <td>
                        {{$plante->origin}}
                    </td>
                    <td>
                        {{$plante->price}}
                    </td>
                    <td>
                        <ul>
                            @foreach($plante->jardins as $jardin)
                                <li>{{$jardin->nomJardin}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="project-actions text-center">
                        <a  class="btn btn-primary btn-sm" href="{{url('/plante/' . $plante->id)}}">
                            <i class="fa fa-eye"></i>
                            voir
                        </a>
                        {{-- only admin can update and delet this --}}
                        @can('isAdmin')
                        <a class="btn btn-info btn-sm" href="">
                            <i class="fas fa-pencil-alt"></i>
                            Modifier
                        </a>
                        <form method="POST" action="" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Doctor" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
                

            </tbody>
        </table>
      </div>

    </div>


</section>
@endsection

@section('scripts')

@endsection