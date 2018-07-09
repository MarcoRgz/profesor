@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">



        @if($errors->any())
        <ul class="alert alert-danger">
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </u
  @endif

              <div class="form-horizontal" style="margin = 0 auto">
                <h3>Datos personales</h3>

              <br>


                @if(isset($skill))
                  {!! Form::model($skill, ['route' => ['skills.update', $skill->habilidad], 'method' => 'post']) !!}
                  @else
                {!! Form::open( ['route' => ['skills.store'], 'method' =>'post','class'=>'form-control-lg'] ) !!}
                  @endif
                  <div class="row">


                  <div class="col-lg-4 col-center-block">
                    {!! Form::label('nombre','  nombre') !!}<br>
                    {!! Form::text('nombre', null) !!}<br>
                    {!! Form::label('especialidad','Especialidad') !!}<br>
                    {!! Form::text('especialidad', null) !!}<br>
                    {!! Form::label('extras','Extras') !!}<br>
                    {!! Form::textarea('extras', null, ['size' => '30x5']) !!}
                  </div>


                                  </div>
                                  <br>
                                  <br>

                  {!! Form::submit('Guardar', ['class' => 'btn btn-outline-primary btn-block']) !!}
                  {!! Form::close()!!}
        </div>
      </div>



@endsection
