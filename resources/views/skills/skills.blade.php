  <!DOCTYPE html>
<html>
  <head>
    <title>Habilidades </title>
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
              <div class="center">Mis habilidades </div>


               @if($skill)
                <table class="table table-striped" id='table'>
               <thead>
                   <th>id</th>
                   <th>Nombre</th>
                   <th>Especialidad</th>
                   <th>Extras</th>

                 </thead>

                 <tbody>

                 <tr>
                   @foreach($skill as $row)
                     <td>{{ $row->id}}</td></a>
                     <td><a href="{{ route('skills.index', $row->id) }}">{{ $row->nombre}}</td></a>
                      <td>{{ $row->especialidad}}</td>
                      <td>{{ $row->extras}}</td>

                   </tr>
                   @endforeach
                 </tbody>

               </table>
               @endif
              </div>
              <a href="{{ route('home') }}" class="btn btn-success btn btn-block"> Inicio </a>

    <script>
    $(document).ready( function () {
        $('#table').DataTable();
    } );
    </script>
  </body>
</html>
