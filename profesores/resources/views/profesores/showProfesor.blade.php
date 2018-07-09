@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Programa carreras</div>

                <div class="panel-body">
                 @if($profesor)
                  <table class="table table-hover ">
                 <thead>
                     <th>ID</th>
                     <th>Nombre</th>
                     <th>Habilidad</th>
                     <th>Especialidad</th> 
                     <th>Extra</th>
                   </thead>

                   <tr>

                       <td>{{ $profesor->id}}</td>
                       <td>{{ $profesor->nombre}}</td>
                       <td>{{ $profesor->skill}}</td>
                       <td>{{ $profesor->especialidad}}</td>
                       <td>{{ $profesor->extra}}</td>


                     </tr>
                 </table>
                 @endif
                </div>
            </div>
            <br><br>
            <a href="{{ route('profesor.index') }}" class="btn btn-outline-primary btn-block"> Inicio </a>

        </div>
    </div>
</div>
@endsection
