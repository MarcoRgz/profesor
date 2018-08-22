@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <link rel="p.png" href="{{ asset('/imagen/p.png') }}" >

        <div class="row">

  @if($errors->any())
          <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
          </ul>
    @endif

                <div class="form-horizontal" style="margin = 0 auto">
                  <h3>Datos personales</h3>

                <br>


                  @if(isset($profesor))
                    {!! Form::model($profesor, ['route' => ['profesor.update', $profesor->id], 'method' => 'patch']) !!}
                    @else
                  {!! Form::open( ['route' => ['profesor.store'],'class'=>'form-control-lg']) !!}

                    @endif
                    <div class="row">


                    <div class="col-lg-4 col-center-block">
                      {!! Form::label('nombre','  Nombre') !!}<br>
                      {!! Form::text('nombre', null, ['required'] ) !!}<br>
                      {!! Form::label('apellidoP','Apellido Paterno') !!}<br>
                      {!! Form::text('apellidoP', null, ['required'] ) !!}<br>
                      {!! Form::label('apellidoM','Apellido Materno') !!}<br>
                      {!! Form::text('apellidoM', null) !!}


                    </div>
                    <br>



                      <div class="col-lg-4 col-center-block">
                      {!! Form::label('centro','Centro') !!}<br>
                      {!! Form::select
                            ('centro', ['Seleccione su centro'=> 'disable' = true,
                                    'Centros Universitarios Temáticos' =>
                                      [
                                       'CUCEI' => 'CUCEI',
                                       'CUCEA' => 'CUCEA',
                                       'CUCBA' => 'CUCBA',
                                       'CUAAD' => 'CUAAD',
                                       'CUCS' => 'CUCS',
                                       'CUCSH' => 'CUCSH'
                                      ],

                                   'Centros Universitarios Regionales' =>
                                     ['CUALTOS' => 'CUALTOS',
                                      'CUCIÈNEGA' => 'CUCIÈNEGA',
                                      'CUCOSTA' => 'CUCOSTA',
                                      'CUCSUR' => 'CUCSUR',
                                      'CULAGOS' => 'CULAGOS',
                                      'CUNORTE' => 'CUNORTE',
                                      'CUSUR' => 'CUSUR',
                                      'CUVALLES' => 'CUVALLES',
                                      'CUTONALA' => 'CUTONALA'
                                      ],
                                      'Sistemas ' =>
                                           ['SUV - UDG Virtual ' => 'SUV - UDG Virtual ',
                                             'SEMS'=> 'SEMS'

                                           ],


                                  ]) !!} <br>
                      {!! Form::label('correo','Correo') !!}<br>
                      {!! Form::text('correo', null ) !!}<br>
                      {!! Form::label('cargo','Cargo') !!}<br>
                      {!! Form::text('cargo', null ) !!}<br>
                    </div>



                    <div class="col-lg-4 col-center-block">
                    {!! Form::label('departamento','Departamento') !!}<br>
                    {!! Form::text('departamento', null) !!}<br>
                    {!! Form::label('celular','Celular') !!}<br>
                    {!! Form::text('celular', null) !!}<br>
                    {!! Form::label('telExt','Telefono Extension') !!}<br>
                    {!! Form::text('telExt', null ) !!}<br>
                    <br>
                    <br>
                  </div>
                  <br>
                  <br>

                      <div class="col-lg-5 col-center-block">
                      <h3>Habilidades </h3>
                      <br>
                    {!! Form::label('skill','Habilidad') !!}<br>
                    {!! Form::text('skill', null) !!}<br>
                    {!! Form::label('especialidad','Especialidad') !!}<br>
                    {!! Form::text('especialidad', null ) !!}<br>
                    {!! Form::label('extra',' Extras') !!}<br>
                    {!! Form::text('extra', null ) !!}<br>
                  </div>

                                    </div>
                                    <br>
                                    <br>

                    {!! Form::submit('Siguiente', ['class' => 'btn btn-outline-primary btn-block'], ['required'] ) !!}
                    {!! Form::close()!!}
          </div>
        </div>
</div>


@endsection
