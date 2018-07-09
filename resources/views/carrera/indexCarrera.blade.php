@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Programa carreras</div>

                <div class="panel-body">


                    <a href="{{ route('carrera.create') }}" class="btn btn-success"> Nueva carrera</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
