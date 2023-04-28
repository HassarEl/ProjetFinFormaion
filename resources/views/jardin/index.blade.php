@extends('layouts.master')

@section('title')
    jardin
@endsection

@section('css')

@endsection

@section('title_header')
    <h4>Liste des Jardin</h4>
@endsection

@section('title_page1')
    <a class="btn btn-outline-secondary" href="{{route('dashboard')}}">Home</a>
@endsection

@section('title_page2')
    
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col pl-5 pb-2">
            <a class="btn btn-primary" href="{{route('jardin.create')}}" title="Add New Doctor">Ajouter Jardin</a>
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
        <h2 class="card-title">Jardin</h2>
      </div>

      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr align="center">
                    <th>
                        Jardin Id
                    </th>
                    <th>
                        Nom Jardin
                    </th>
                    <th>
                        Adsresse
                    </th>
                    <th>
                        Ville
                    </th>
                    <th>
                        superficie
                    </th>
                    <th>
                        Jardinier
                    </th>
                    <th>
                        Acction
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach($jardins as $jardin)
                <tr align="center">
                    <td>
                        {{$jardin->NumJ}}
                    </td>
                    <td>
                        {{$jardin->nomJardin}}
                    </td>
                    <td>
                        {{$jardin->adresse}}
                    </td>
                    <td>
                        {{$jardin->ville}}
                    </td>
                    <td>
                        {{$jardin->superficie}}
                    </td>
                    <td> 
                        @foreach($users as $user)
                            @if($user->id == $jardin->user_id)
                                {{$name_jardinier = $user->name}}
                            @endif
                        @endforeach
                    </td>
                    <td class="project-actions text-center">
                        <a  class="btn btn-primary btn-sm" href="{{ url('/jardin/' . $jardin->id) }}">
                            <i class="fa fa-eye"></i>
                            voir
                        </a>
                        <a class="btn btn-info btn-sm" href="">
                            <i class="fas fa-pencil-alt"></i>
                            Modifier
                        </a>

                        {{-- only admin can delete this jardin --}}
                        @can('isAdmin')
                            <form method="POST" action="{{url('/jardin/'. $jardin->id)}}" accept-charset="UTF-8" style="display:inline">
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