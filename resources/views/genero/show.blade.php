@extends('layouts.app')

@section('template_title')
    {{ $genero->name ?? 'Show Genero' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Genero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('generos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $genero->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Seccion:</strong>
                            {{ $genero->seccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
