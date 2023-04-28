@extends('layouts.master')

@section('title')
    Contenu
@endsection

@section('css')

@endsection

@section('title_header')
    Contenu De Jardin
@endsection

@section('title_page1')
<a class="btn btn-outline-secondary" href="{{route('dashboard')}}">Home</a>
@endsection

@section('title_page2')
    <a class="btn btn-outline-secondary" href="{{route('contenu.index')}}">Contenu</a>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <div class="card m-0">
          <div class="card-header">
            Contenu Jardin Plante
          </div>
          <div class="card-body">
            
              <form id="myForm" class="form">
                <div id="inputFields">
                  <div class="col-4">
                    <label for="jardin" class="form-label">Liste Jardins</label>
                    <select class="form-select" name="jardin">
                      <option selected>Select Jardin</option>
                      @foreach($jardins as $jardin)
                      <option value="{{$jardin->nomJardin}}">{{$jardin->nomJardin}}</option>
                      @endforeach
                    </select>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-12">
                          <label class="form-label">Composition</label>
                          <br>
                          <table class="table table-bordere" id="table">
                            <thead>
                              <tr>
                                <th>Plante</th>
                                <th>Quantite</th>
                                <th style="text-align: center"><button type="button" id="addInput" class="btn btn-success addRow"><i class="bi bi-plus-square"> Ajouter</i></button></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <select class="form-select" name="plante[]" required>
                                      <option selected>Selection La Plante</option>
                                      @foreach($plantes as $plante)
                                          <option value="{{$plante->id}}">{{$plante->name}}</option>
                                      @endforeach
                                  </select>
                                </td>
                                <td>
                                  <input type="text" name="quantite[]" class="form-control" required>
                                </td>
                                <td style="text-align: center">
                                  <button type="button" class="btn btn-danger remove"><i class="bi bi-x-square"></i> Remove</button>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </div>
                  </div>

                  <br>                       

                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                  </div>
                </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


<script type="text/javascript">
$('.addRow').on('click', function(){
addRow();
});

function addRow(){
var tr = 
'<tr>'+
'<td>'+
  '<select class="form-select" name="plante[]">'+
      '<option selected>Selection La Plante</option>'+
      '@foreach($plantes as $plante)'+
          '<option value="{{$plante->id}}">{{$plante->name}}</option>'+
      '@endforeach'+
  '</select>'+
'</td>'+
'<td>'+
  '<input type="text" name="quantite[]" class="form-control">'+
'</td>'+
'<td style="text-align: center">'+
  '<button type="button" id="remove" class="btn btn-danger remove"><i class="bi bi-x-square"> Remove</i></button>'+
'</td>'+
'</tr>';
$('tbody').append(tr);
};
$('tbody').on('click', '.remove', function(){
$(this).parent().parent().remove();
});

</script>
@endsection