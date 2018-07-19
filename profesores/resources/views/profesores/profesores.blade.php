<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <title>Profesores</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <br/>
    <h3 align="center">Profesores Registrados</h3>
    <br/>
    @if($profesor)
     <table class="table table-striped " id='table'>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Centro</th>
        <th>Correo</th>
        <th>Cargo</th>
        <th>Departamento</th>
        <th>Celular</th>
        <th>Telefono - Ext</th>
        </tr>
      </thead>

      <tbody>

        @foreach($profesor as $profesores)
        <tr>

           <td>{{ $profesores->id}}</td></a>
           <td><a href="{{ route('profesor.show', $profesores->id) }}">{{ $profesores->nombre}}</td></a>
           <td>{{ $profesores->apellidoP}}</td>
           <td>{{ $profesores->apellidoM}}</td>
           <td>{{ $profesores->centro}}</td>
           <td>{{ $profesores->correo}}</td>
           <td>{{ $profesores->cargo}}</td>
           <td>{{ $profesores->departamento}}</td>
           <td>{{ $profesores->celular}}</td>
           <td>{{ $profesores->telExt}}</td>
         </tr>

        @endforeach
        </tbody>
    </table>
    @endif
    <br><br>
    <a href="{{ ('welcome') }}" class="btn btn-primary btn-block "> Inicio</a>

   </div>

</div>
<br>

</div>
  </div>

    <script>
          $(document).ready( function ()
          {
            $('#table').DataTable();
          } );
    </script>

</body>
</html>
