@extends('layouts.master')

@section('title')
    Traveaux en coures
@endsection

@section('css')

@endsection

@section('title_page1')
    Home
@endsection

@section('title_page2')
    Traveaux en coures
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste Des Traveaux</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th># N°Fiche</th>
                    <th>Patient</th>
                    <th>Docteur</th>
                    <th>Nature De Travail</th>
                    <th>Timeout</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>#05766</td>
                    <td>Morad</td>
                    <td>Dr Belakbir</td>
                    <td>CCM</td>
                    <td>6d:16h:23min</td>
                  </tr>
                  <tr>
                    <td>#05767</td>
                    <td>Reda</td>
                    <td>Dr Alaoui</td>
                    <td>Stelite</td>
                    <td>6d:16h:23min</td>
                  </tr>
                  <tr>
                    <td>#05767</td>
                    <td>Reda</td>
                    <td>Dr Alaoui</td>
                    <td>Stelite</td>
                    <td>6d:16h:23min</td>
                  </tr>
                  <tr>
                    <td>#05767</td>
                    <td>Reda</td>
                    <td>Dr Alaoui</td>
                    <td>Stelite</td>
                    <td>6d:16h:23min</td>
                  </tr>
                  <tr>
                    <td>#05767</td>
                    <td>Reda</td>
                    <td>Dr Alaoui</td>
                    <td>Stelite</td>
                    <td>6d:16h:23min</td>
                  </tr>
                  <tr>
                    <td>#05767</td>
                    <td>Reda</td>
                    <td>Dr Alaoui</td>
                    <td>Stelite</td>
                    <td>6d:16h:23min</td>
                  </tr>
                  <tr>
                    <td>#05767</td>
                    <td>Reda</td>
                    <td>Dr Alaoui</td>
                    <td>Stelite</td>
                    <td>6d:16h:23min</td>
                  </tr>
                  <tr>
                    <td>#05767</td>
                    <td>Reda</td>
                    <td>Dr Alaoui</td>
                    <td>Stelite</td>
                    <td>6d:16h:23min</td>
                  </tr>
                  <tr>
                    <td>#05767</td>
                    <td>Reda</td>
                    <td>Dr Alaoui</td>
                    <td>Stelite</td>
                    <td>6d:16h:23min</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('scripts')
    <!-- jQuery -->
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function () {
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>
@endsection