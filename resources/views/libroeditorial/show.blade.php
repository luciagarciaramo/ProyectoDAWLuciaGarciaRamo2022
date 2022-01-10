@extends('layouts.app')

@section('template_title')
    {{ $libroeditorial->name ?? 'Show Libroeditorial' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Libroeditorial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libroeditorials.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Libro:</strong>
                            {{ $libroeditorial->libro }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $libroeditorial->editorial }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
