@extends('layouts.app')

@section('content')
<div class="container">
  <head>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  </head>
    <div class="row">
        <div class="col-md-15 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Mis habilidades </div>

                <div class="panel-body">
                 @if($skill)
                  <table class="table table-striped" id='table'>
                 <thead>
                     <th>id</th>
                     <th>Nombre</th>
                     <th>Especialidad</th>
                     <th>Extras</th>

                   </thead>

                   <tr>
                     @foreach($skill as $row)
                       <td>{{ $row->id}}</td></a>
                       <td><a href="{{ route('skills.index', $row->id) }}">{{ $row->nombre}}</td></a>
                        <td>{{ $row->especialidad}}</td>
                        <td>{{ $row->extras}}</td>

                     </tr>
                     @endforeach
                 </table>
                 @endif
                </div>
            </div>
            <a href="{{ route('profesor.create') }}" class="btn btn-success"> Crear mi ficha </a>

        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
        </script>

    </div>
</div>
@endsection
