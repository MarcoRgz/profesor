<!DOCTYPE html>
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


    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{('/') }}">Inicio</a>
                    <a href="{{ url('/logout') }}">Salir</a>

                @else
                    <a href="{{ route('login') }}">Entrar </a>
                    <a href="{{ route('register') }}">Registrar</a>
                @endauth
            </div>
    @endif
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

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

