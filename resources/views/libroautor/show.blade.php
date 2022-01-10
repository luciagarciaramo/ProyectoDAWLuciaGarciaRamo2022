@extends('layouts.app')

@section('template_title')
    {{ $libroautor->name ?? 'Show Libroautor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Libroautor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libroautors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Isbn:</strong>
                            {{ $libroautor->isbn }}
                        </div>
                        <div class="form-group">
                            <strong>Autor Id:</strong>
                            {{ $libroautor->autor_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
