@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">  Bienvenido </div>

                <div class="card-body">
                  <div class="row justify-content-center">
                    <h1>Menu</h1>
                  </div>
                    <div class="card-body">
                      <a href="{{ route('profesor.create') }}" class="btn btn-success btn-block"> Registrar mis datos</a>
                    <br> <br>
                      <a href="{{ route('profesor.index') }}" class="btn btn-primary btn-block"> Ver  Profesores   </a>
                      <br> <br>
                      </div>

                  </div>
            </div>
            <br>

        </div>

    </div>
</div>
@endsection
